@extends('layouts.app')
@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Hapus Berita</h2>
    <form method="POST" action="{{ route('berita.destroy', $berita->id) }}">
        @csrf
        @method('DELETE')
        <p>Apakah Anda yakin ingin menghapus berita <strong>{{ $berita->title }}</strong>?</p>
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded mt-4">Hapus</button>
        <a href="{{ route('update-berita-kegiatan') }}" class="ml-4 text-blue-500">Batal</a>
    </form>
</div>
@endsection