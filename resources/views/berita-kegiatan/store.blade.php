@extends('layouts.app')
@section('content')
<div class="container mx-auto py-8">
    <h2 class="text-2xl font-bold mb-4">Detail Berita</h2>
    <div class="mb-4">
        <h3 class="text-xl font-semibold">{{ $berita->title }}</h3>
        <p class="text-gray-600">Kategori: {{ $berita->kategori }} | Tanggal: {{ $berita->date }}</p>
        @if($berita->image)
            <img src="{{ asset('storage/'.$berita->image) }}" alt="Gambar" class="mt-2 w-64">
        @endif
        <div class="mt-4">{!! nl2br(e($berita->body)) !!}</div>
    </div>
    <a href="{{ route('update-berita-kegiatan') }}" class="text-blue-500">Kembali</a>
</div>
@endsection