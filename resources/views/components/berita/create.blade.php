<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xs sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Form untuk membuat berita -->
                    <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Judul Berita -->
                        <div class="mb-4">
                            <x-input-label for="title" :value="__('Judul Berita')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>
                        <!-- Tanggal Berita (Auto-fill) -->
                        <div class="mb-4">
                            <x-input-label :value="__('Tanggal Berita')" />
                            <x-text-input class="block mt-1 w-full bg-gray-100 dark:bg-gray-700" 
                                        type="text" 
                                        :value="now()->format('d F Y')" 
                                        readonly />
                            <input type="hidden" name="date" value="{{ now()->toDateString() }}">
                        </div>

                        <!-- Penulis Berita (Auto-fill dari admin yang login) -->
                        <div class="mb-4">
                            <x-input-label :value="__('Penulis Berita')" />
                            <x-text-input class="block mt-1 w-full bg-gray-100 dark:bg-gray-700" 
                                        type="text" 
                                        :value="Auth::user()->name" 
                                        readonly />
                            <input type="hidden" name="author_id" value="{{ Auth::id() }}">
                        </div>

                        <!-- Konten Berita -->
                        <div class="mb-4">
                            <x-input-label for="content" :value="__('Isi Berita')" />
                            <textarea id="content" name="content" rows="10" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>{{ old('content') }}</textarea>
                            <x-input-error :messages="$errors->get('content')" class="mt-2" />
                        </div>

                        <!-- Gambar Berita -->
                        <div class="mb-4">
                            <x-input-label for="image" :value="__('Gambar Berita (opsional)')" />
                            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image" accept="image/*" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <!-- Kategori Berita -->
                        <div class="mb-4">
                            <x-input-label for="category" :value="__('Kategori')" />
                            <select id="category" name="category" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="umum">Umum</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="kesehatan">Kesehatan</option>
                                <option value="olahraga">Olahraga</option>
                                <option value="teknologi">Teknologi</option>
                            </select>
                            <x-input-error :messages="$errors->get('category')" class="mt-2" />
                        </div>

                        <!-- Tombol Submit -->
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button>
                                {{ __('Publikasikan Berita') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>