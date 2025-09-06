<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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
        
        // Get all unique categories for filter dropdown
        $kategories = Berita::select('kategori')->distinct()->pluck('kategori');
        
        $posts = $query->paginate(10)->withQueryString();

        return view('components.berita.beritadashboard', [
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
        ]);

        // Pastikan author_id tidak null
        $authorId = Auth::id();
        if (!$authorId) {
            // fallback untuk development/testing, ganti dengan id user default jika perlu
            $authorId = 1;
        }

        // Generate unique slug
        $slug = Str::slug($request->title);
        $uniqueSlug = $slug;
        $counter = 1;
        while (Berita::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter++;
        }

        // Pastikan author_id tidak null
        $authorId = Auth::id() ?? 1; // Fallback ke ID 1 jika tidak ada user yang login

        // Cari atau buat kategori yang sesuai
        $category = Category::firstOrCreate(['name' => $validated['kategori']]);

        $berita = Berita::create([
            'title' => $validated['title'],
            'slug' => $uniqueSlug,
            'body' => $validated['body'],
            'author_id' => $authorId,
            'date' => $validated['date'],
            'kategori' => $validated['kategori'],
            'category_id' => $category->id,
            'image' => $request->hasFile('image') 
                ? $request->file('image')->store('berita-images', 'public') 
                : null
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($slug)
    {
        $post = Berita::where('slug', $slug)->with('author')->firstOrFail();
        $related = Berita::where('kategori', $post->kategori)
            ->where('id', '!=', $post->id)
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
            'category_id' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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

        $berita->update([
            'title' => $validated['title'],
            'body' => $validated['body'],
            'date' => $validated['date'],
            'kategori' => $validated['kategori'],
            'image' => $request->hasFile('image') 
                ? $request->file('image')->store('berita-images', 'public') 
                : $berita->image
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        
        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
    public function showindex(Request $request)
    {
        $query = Berita::query();
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