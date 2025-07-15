<?php

namespace App\Http\Controllers;

use App\Models\Berita;
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
        
        return view('dashboard', [
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

        // Generate unique slug
        $slug = Str::slug($request->title);
        $uniqueSlug = $slug;
        $counter = 1;
        while (Berita::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $counter++;
        }

        $berita = Berita::create([
            'title' => $validated['title'],
            'slug' => $uniqueSlug,
            'body' => $validated['body'],
            'author_id' => Auth::id(),
            'date' => $validated['date'],
            'kategori' => $validated['kategori'],
            'image' => $request->hasFile('image') 
                ? $request->file('image')->store('berita-images', 'public') 
                : null
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($id)
    {
        $post = Berita::findOrFail($id);
        return view('dashboard', compact('post'));
    }

    public function edit($id)
    {
        $post = Berita::findOrFail($id);
        return view('berita-kegiatan.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'date' => 'required|date',
            'kategori' => 'required|string|max:50',
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

        return redirect()->route('dashboard')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        
        return redirect()->route('dashboard')->with('success', 'Berita berhasil dihapus');
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
        $beritas = $query->orderByDesc('date')->take(6)->get();
        return view('berita-kegiatan.berita-terkini', [
            'posts' => $beritas,
            'selectedCategory' => $request->category,
            'search' => $request->q,
        ]);
    }
}