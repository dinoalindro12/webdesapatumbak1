@extends('layouts.app')
@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Daftar Berita</h2>
    <a href="{{ route('berita.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Tambah Berita</a>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2">Judul</th>
                <th class="py-2">Kategori</th>
                <th class="py-2">Tanggal</th>
                <th class="py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($beritas as $berita)
            <tr>
                <td class="py-2">{{ $berita->title }}</td>
                <td class="py-2">{{ $berita->kategori }}</td>
                <td class="py-2">{{ $berita->date }}</td>
                <td class="py-2">
                    <a href="{{ route('berita.edit', $berita->id) }}" class="text-green-500">Edit</a> |
                    <a href="{{ route('berita.destroy.view', $berita->id) }}" class="text-red-500">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection