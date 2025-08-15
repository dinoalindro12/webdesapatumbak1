<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::with('author')->latest();
        
        // Search functionality
        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%'.$request->search.'%')
                ->orWhere('body', 'like', '%'.$request->search.'%');
            });
        }
        
        // Filter by category
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }
        
        // Filter by status
        if ($request->filled('status')) {
            $query->where('is_active', $request->status === 'active');
        }
        
        // Get all unique categories for filter dropdown
        $kategories = Berita::select('kategori')->distinct()->pluck('kategori');
        
        $posts = $query->paginate(10)->withQueryString();

        return view('components.berita.index', [
            'posts' => $posts,
            'kategories' => $kategories,
        ]);
    }

    public function create()
    {
        return view('components.berita.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'date' => 'required|date',
            'kategori' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes|boolean'
        ]);

        // Pastikan author_id tidak null
        $authorId = Auth::id();
        if (!$authorId) {
            // fallback untuk development/testing, ganti dengan id user default jika perlu
            $authorId = 1;
        }

        // Generate unique slug untuk berita
        $slug = Str::slug($request->title);
        $uniqueSlug = $slug;
        $counter = 1;
        while (Berita::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter++;
        }

        // Pastikan author_id tidak null
        $authorId = Auth::id() ?? 1; // Fallback ke ID 1 jika tidak ada user yang login

        // Cari atau buat kategori yang sesuai - DIPERBAIKI
        $category = Category::where('name', $validated['kategori'])->first();
        if (!$category) {
            // Generate unique slug untuk kategori
            $categorySlug = Str::slug($validated['kategori']);
            $uniqueCategorySlug = $categorySlug;
            $categoryCounter = 1;
            while (Category::where('slug', $uniqueCategorySlug)->exists()) {
                $uniqueCategorySlug = $categorySlug . '-' . $categoryCounter++;
            }
            
            $category = new Category();
            $category->name = $validated['kategori'];
            $category->slug = $uniqueCategorySlug;
            $category->save();
        }

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('berita-images', 'public');
        }

        $berita = Berita::create([
            'title' => $validated['title'],
            'slug' => $uniqueSlug,
            'body' => $validated['body'],
            'author_id' => $authorId,
            'date' => $validated['date'],
            'kategori' => $validated['kategori'],
            'category_id' => $category->id,
            'image' => $imagePath,
            'is_active' => $request->has('is_active') ? $request->is_active : true
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($slug)
    {
        $post = Berita::where('slug', $slug)->with('author')->firstOrFail();
        
        // Hanya tampilkan jika aktif atau user adalah admin
        if (!$post->is_active && !Auth::check()) {
            abort(404);
        }
        
        $related = Berita::where('kategori', $post->kategori)
            ->where('id', '!=', $post->id)
            ->where('is_active', true)
            ->orderByDesc('date')
            ->take(4)
            ->get();
            
        return view('berita-kegiatan.berita-full', compact('post', 'related'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('components.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'date' => 'required|date',
            'kategori' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_active' => 'sometimes|boolean'
        ]);

        $berita = Berita::findOrFail($id);
        
        // Update slug only if title changed
        if ($berita->title != $request->title) {
            $slug = Str::slug($request->title);
            $uniqueSlug = $slug;
            $counter = 1;
            while (Berita::where('slug', $uniqueSlug)->where('id', '!=', $id)->exists()) {
                $uniqueSlug = $slug . '-' . $counter++;
            }
            $berita->slug = $uniqueSlug;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
            $imagePath = $request->file('image')->store('berita-images', 'public');
            $berita->image = $imagePath;
        }

        $berita->update([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'date' => $validated['date'],
            'kategori' => $validated['kategori'],
            'is_active' => $request->has('is_active') ? $request->is_active : $berita->is_active
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Delete image if exists
        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }
        
        $berita->delete();
        
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
    
    public function toggleStatus($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->is_active = !$berita->is_active;
        $berita->save();
        
        return redirect()->route('berita.index')->with('success', 'Status berita berhasil diubah');
    }

    public function showindex(Request $request)
    {
        $query = Berita::active(); // Hanya berita aktif
        
        if ($request->filled('category')) {
            $query->where('kategori', $request->category);
        }
        if ($request->filled('q')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%'.$request->q.'%')
                ->orWhere('body', 'like', '%'.$request->q.'%');
            });
        }
        $beritas = $query->orderByDesc('date')->paginate(6)->withQueryString();
        
        return view('berita-kegiatan.berita-terkini', [
            'posts' => $beritas,
            'selectedCategory' => $request->category,
            'search' => $request->q,
        ]);
    }
}