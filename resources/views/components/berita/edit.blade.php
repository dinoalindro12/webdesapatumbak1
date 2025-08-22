<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('berita.update', $berita->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block">Judul</label>
            <input type="text" name="title" id="title" class="w-full border rounded p-2" value="{{ old('title', $berita->title) }}" required>
        </div>
        <div class="mb-4">
            <label for="body" class="block">Isi</label>
            <textarea name="body" id="body" class="w-full border rounded p-2" rows="6" required>{{ old('body', $berita->body) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block">Ganti Gambar (opsional)</label>
            <input type="file" name="image" id="image" class="w-full border rounded p-2">
            @if($berita->image)
                <img src="{{ asset('storage/'.$berita->image) }}" alt="Gambar" class="mt-2 w-32">
            @endif
        </div>
        <div class="mb-4">
            <label for="kategori" class="block">Kategori</label>
            <select name="kategori" id="kategori" class="w-full border rounded p-2">
                <option value="umum" {{ $berita->kategori=='umum'?'selected':'' }}>Umum</option>
                <option value="pendidikan" {{ $berita->kategori=='pendidikan'?'selected':'' }}>Pendidikan</option>
                <option value="kesehatan" {{ $berita->kategori=='kesehatan'?'selected':'' }}>Kesehatan</option>
                <option value="olahraga" {{ $berita->kategori=='olahraga'?'selected':'' }}>Olahraga</option>
                <option value="teknologi" {{ $berita->kategori=='teknologi'?'selected':'' }}>Teknologi</option>
            </select>
        </div>
                        <!-- Tombol Submit -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Update Berita') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
