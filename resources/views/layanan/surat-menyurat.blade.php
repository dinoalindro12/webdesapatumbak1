<x-layout title="Permohonan Surat Desa">
    <div class="bg-white py-8">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-3xl font-bold text-gray-900">Permohonan Surat Menyurat</h1>
                <div class="w-20 h-1 bg-gray-800 mx-auto mt-4"></div>
                <p class="text-gray-600 mt-4">Ajukan permohonan pembuatan surat secara online</p>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="mb-6 p-4 bg-green-100 border border-green-200 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Error Message -->
            @if($errors->any())
                <div class="mb-6 p-4 bg-red-100 border border-red-200 text-red-800 rounded">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Section -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-8">
                <form method="POST" action="{{ route('layanan.surat-menyurat.store') }}" enctype="multipart/form-data"
                    id="suratForm">
                    @csrf

                    <!-- Hidden input untuk menyimpan jenis surat yang dipilih -->
                    <input type="hidden" name="jenis_surat" id="selected_jenis_surat" value="{{ old('jenis_surat') }}">

                    <!-- Surat Information -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Ajukan Permohonan Surat</h2>
                        <!-- Jenis Surat Dropdown -->
                        <div class="mb-6">
                            <label for="jenis_surat_select" class="block text-sm font-medium text-gray-700 mb-1">
                                Jenis Surat</label>
                            <select id="jenis_surat_select" name="jenis_surat_select"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('jenis_surat') border-red-500 @enderror">
                                <option value="" disabled selected>-- Pilih Jenis Surat --</option>
                                <option value="sk_domisili" {{ old('jenis_surat') == 'sk_domisili' ? 'selected' : '' }}>
                                    Surat Keterangan Domisili</option>
                                <option value="sk_ck" {{ old('jenis_surat') == 'sk_ck' ? 'selected' : '' }}>
                                    Surat Keterangan Catatan Kriminal</option>
                                <option value="sk_usaha" {{ old('jenis_surat') == 'sk_usaha' ? 'selected' : '' }}>
                                    Surat Keterangan Memiliki Usaha</option>
                                <option value="sk_wali" {{ old('jenis_surat') == 'sk_wali' ? 'selected' : '' }}>
                                    Surat Keterangan Wali Murid</option>
                                <option value="sk_kematian" {{ old('jenis_surat') == 'sk_kematian' ? 'selected' : '' }}>
                                    Surat Keterangan Kematian</option>
                            </select>
                            @error('jenis_surat')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
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
                            class="px-6 py-2 bg-gray-800 text-white font-medium rounded-md hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Ajukan Permohonan
                        </button>
                    </div>
                </form>
            </div>

            <!-- Informasi Proses -->
            <div class="bg-blue-50 rounded-lg p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Proses Pengajuan Surat</h3>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Isi formulir permohonan dengan data yang valid</li>
                    <li>Permohonan akan diverifikasi oleh petugas desa (1-2 hari kerja)</li>
                    <li>You will receive notification via SMS/WhatsApp</li>
                    <li>Ambil surat di kantor desa dengan menunjukkan bukti pengajuan</li>
                </ol>
                <div class="mt-4 p-3 bg-blue-100 border border-blue-200 rounded-md">
                    <p class="text-sm text-white-500 flex items-start">
                        <svg class="h-5 w-5 mr-2 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Untuk pertanyaan lebih lanjut, silahkan hubungi kantor desa di jam kerja (08.00-15.00) atau
                        melalui WhatsApp di 0812-3456-7890
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('jenis_surat_select').addEventListener('change', function () {
            const jenisSurat = this.value;
            document.getElementById('selected_jenis_surat').value = jenisSurat;

            // Hapus form sebelumnya
            const container = document.getElementById('dynamic-form-container');
            container.innerHTML = '<div class="p-4 text-center">Memuat formulir...</div>';

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
                            '<div class="p-4 bg-yellow-100 text-yellow-800 rounded-md">Form untuk surat ini belum tersedia.</div>';
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
</x-layout>