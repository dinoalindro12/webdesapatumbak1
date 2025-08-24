<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Surat') }}
        </h2>
    </x-slot>

    <div class="py-8 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Pembuatan Surat</h1>
                <div class="w-20 h-1 bg-gray-800 dark:bg-gray-200 mx-auto mt-4"></div>
                <p class="text-gray-600 dark:text-gray-300 mt-4">Pembuatan surat secara online</p>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-800 rounded dark:bg-green-900 dark:border-green-800 dark:text-green-200">
                    {{ session('success_admin') }}
                </div>
            @endif

            <!-- Error Message -->
            @if($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-800 rounded dark:bg-red-900 dark:border-red-800 dark:text-red-200">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Section -->
            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6 mb-8">
                <form method="POST" action="{{ route('surat-menyurat.store') }}" enctype="multipart/form-data"
                    id="suratForm">
                    @csrf

                    <!-- Hidden input untuk menyimpan jenis surat yang dipilih -->
                    <input type="hidden" name="jenis_surat" id="selected_jenis_surat" value="{{ old('jenis_surat') }}">

                    <!-- Surat Information -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 border-b pb-2">Lengkapi Isi Surat</h2>
                        <!-- Jenis Surat Dropdown -->
                        <div class="mb-6">
                            <label for="jenis_surat_select" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">
                                Jenis Surat
                            </label>
                            <select id="jenis_surat_select" name="jenis_surat_select"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white @error('jenis_surat') border-red-500 @enderror">
                                <option value="" disabled selected>-- Pilih Jenis Surat --</option>
                                <option value="sk_domisili" {{ old('jenis_surat') == 'sk_domisili' ? 'selected' : '' }}>
                                    Surat Keterangan Domisili
                                </option>
                                <option value="sk_ck" {{ old('jenis_surat') == 'sk_ck' ? 'selected' : '' }}>
                                    Surat Keterangan Catatan Kriminal
                                </option>
                                <option value="sk_usaha" {{ old('jenis_surat') == 'sk_usaha' ? 'selected' : '' }}>
                                    Surat Keterangan Memiliki Usaha
                                </option>
                                <option value="sk_wali" {{ old('jenis_surat') == 'sk_wali' ? 'selected' : '' }}>
                                    Surat Keterangan Wali Murid
                                </option>
                                <option value="sk_kematian" {{ old('jenis_surat') == 'sk_kematian' ? 'selected' : '' }}>
                                    Surat Keterangan Kematian
                                </option>
                            </select>
                            @error('jenis_surat')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Dynamic Form Container -->
                        <div id="dynamic-form-container">
                            @if(old('jenis_surat'))
                                <div id="form-{{ old('jenis_surat') }}">
                                    @includeIf('components.surat-menyurat.forms.' . old('jenis_surat'))
                                </div>
                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-2 bg-purple-600 text-white font-medium rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors dark:bg-purple-700 dark:hover:bg-purple-600">
                            Buat Surat
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('jenis_surat_select').addEventListener('change', function () {
            const jenisSurat = this.value;
            document.getElementById('selected_jenis_surat').value = jenisSurat;

            // Hapus form sebelumnya
            const container = document.getElementById('dynamic-form-container');
            container.innerHTML = '<div class="p-4 text-center text-gray-500 dark:text-gray-400">Memuat formulir...</div>';

            if (jenisSurat) {
                // Load form yang sesuai
                fetch(`/surat-menyurat/get-form/${jenisSurat}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Form tidak ditemukan');
                        }
                        return response.text();
                    })
                    .then(html => {
                        container.innerHTML = html;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        container.innerHTML =
                            '<div class="p-4 bg-yellow-100 text-yellow-800 rounded-md dark:bg-yellow-900/30 dark:text-yellow-200">Form untuk surat ini belum tersedia.</div>';
                    });
            } else {
                container.innerHTML = '';
            }
        });

        // Jika sudah ada pilihan sebelumnya (setelah validasi error)
        @if(old('jenis_surat'))
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('jenis_surat_select').value = "{{ old('jenis_surat') }}";
                document.getElementById('jenis_surat_select').dispatchEvent(new Event('change'));
            });
        @endif
    </script>
</x-app-layout>