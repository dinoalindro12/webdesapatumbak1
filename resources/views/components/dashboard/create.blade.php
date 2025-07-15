<x-layout title="Input Data Desa">
    <div class="bg-gray-50 min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Form Header -->
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Input Data Desa</h1>
                <p class="text-lg text-gray-600">Masukkan data terkini perkembangan Desa Patumbak 1</p>
                <div class="w-20 h-1 bg-gray-300 mx-auto mt-4"></div>
            </div>

            <!-- Form Container -->
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <!-- Form Navigation -->
                <div class="bg-gray-800 px-6 py-4">
                    <div class="flex items-center justify-between">
                        <h2 class="text-lg font-medium text-white">Formulir Data Desa</h2>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-600 text-gray-200">
                            Wajib diisi
                        </span>
                    </div>
                </div>

                <!-- Form Body -->
                <form action="{{ route('data-desa.store') }}" method="POST" class="p-6 sm:p-8">
                    @csrf

                    <!-- Section 1: Data Kependudukan -->
                    <div class="mb-12">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6 pb-2 border-b border-gray-200">Data Kependudukan</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Total Penduduk -->
                            <div>
                                <label for="total_penduduk" class="block text-sm font-medium text-gray-700 mb-1">
                                    Total Penduduk
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <input 
                                        type="number" 
                                        name="total_penduduk" 
                                        id="total_penduduk" 
                                        required
                                        class="focus:ring-gray-500 focus:border-gray-500 block w-full pl-4 pr-12 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Masukkan jumlah penduduk">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">Jiwa</span>
                                    </div>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Jumlah total penduduk terdaftar di desa</p>
                            </div>

                            <!-- Jumlah Penduduk -->
                            <div>
                                <label for="jumlah_penduduk" class="block text-sm font-medium text-gray-700 mb-1">
                                    Jumlah Kepala Keluarga
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <input 
                                        type="number" 
                                        name="jumlah_penduduk" 
                                        id="jumlah_penduduk" 
                                        required
                                        class="focus:ring-gray-500 focus:border-gray-500 block w-full pl-4 pr-12 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="Masukkan jumlah KK">
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">KK</span>
                                    </div>
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Jumlah kepala keluarga terdaftar</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 2: Anggaran Desa -->
                    <div class="mb-12">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6 pb-2 border-b border-gray-200">Anggaran Desa</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Anggaran Desa -->
                            <div>
                                <label for="anggaran_desa" class="block text-sm font-medium text-gray-700 mb-1">
                                    Total Anggaran Desa
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">Rp</span>
                                    </div>
                                    <input 
                                        type="text" 
                                        name="anggaran_desa" 
                                        id="anggaran_desa" 
                                        required
                                        class="focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="0"
                                        oninput="formatCurrency(this)">
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Total anggaran desa tahun berjalan</p>
                            </div>

                            <!-- Anggaran Terpakai -->
                            <div>
                                <label for="anggaran_terpakai" class="block text-sm font-medium text-gray-700 mb-1">
                                    Anggaran Terpakai
                                    <span class="text-red-500">*</span>
                                </label>
                                <div class="relative rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">Rp</span>
                                    </div>
                                    <input 
                                        type="text" 
                                        name="anggaran_terpakai" 
                                        id="anggaran_terpakai" 
                                        required
                                        class="focus:ring-gray-500 focus:border-gray-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md"
                                        placeholder="0"
                                        oninput="formatCurrency(this)">
                                </div>
                                <p class="mt-1 text-xs text-gray-500">Jumlah anggaran yang sudah digunakan</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 3: Program & UMKM -->
                    <div class="mb-12">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6 pb-2 border-b border-gray-200">Program & UMKM</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Jumlah Program -->
                            <div>
                                <label for="jumlah_program" class="block text-sm font-medium text-gray-700 mb-1">
                                    Jumlah Program Berjalan
                                    <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="number" 
                                    name="jumlah_program" 
                                    id="jumlah_program" 
                                    required
                                    class="focus:ring-gray-500 focus:border-gray-500 block w-full px-4 py-3 sm:text-sm border-gray-300 rounded-md shadow-sm"
                                    placeholder="Masukkan jumlah program">
                                <p class="mt-1 text-xs text-gray-500">Total program yang sedang berjalan di desa</p>
                            </div>

                            <!-- Jumlah UMKM -->
                            <div>
                                <label for="jumlah_umkm" class="block text-sm font-medium text-gray-700 mb-1">
                                    Jumlah UMKM Terdaftar
                                    <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="number" 
                                    name="jumlah_umkm" 
                                    id="jumlah_umkm" 
                                    required
                                    class="focus:ring-gray-500 focus:border-gray-500 block w-full px-4 py-3 sm:text-sm border-gray-300 rounded-md shadow-sm"
                                    placeholder="Masukkan jumlah UMKM">
                                <p class="mt-1 text-xs text-gray-500">Total UMKM yang terdaftar di desa</p>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4: Prestasi & Keberhasilan -->
                    <div class="mb-12">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6 pb-2 border-b border-gray-200">Prestasi & Keberhasilan</h3>
                        
                        <!-- Prestasi -->
                        <div class="mb-6">
                            <label for="prestasi" class="block text-sm font-medium text-gray-700 mb-1">
                                Prestasi Desa
                                <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                name="prestasi" 
                                id="prestasi" 
                                rows="3"
                                required
                                class="focus:ring-gray-500 focus:border-gray-500 block w-full px-4 py-3 sm:text-sm border-gray-300 rounded-md shadow-sm"
                                placeholder="Masukkan prestasi desa terkini"></textarea>
                            <p class="mt-1 text-xs text-gray-500">Prestasi atau penghargaan yang diraih desa</p>
                        </div>

                        <!-- Keberhasilan -->
                        <div>
                            <label for="keberhasilan" class="block text-sm font-medium text-gray-700 mb-1">
                                Keberhasilan Desa
                                <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                name="keberhasilan" 
                                id="keberhasilan" 
                                rows="3"
                                required
                                class="focus:ring-gray-500 focus:border-gray-500 block w-full px-4 py-3 sm:text-sm border-gray-300 rounded-md shadow-sm"
                                placeholder="Masukkan keberhasilan desa terkini"></textarea>
                            <p class="mt-1 text-xs text-gray-500">Pencapaian atau keberhasilan program desa</p>
                        </div>
                    </div>

                    <!-- Section 5: Aktivitas Terkini -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-6 pb-2 border-b border-gray-200">Aktivitas Terkini</h3>
                        
                        <!-- Aktivitas Terkini -->
                        <div>
                            <label for="aktivitas_terkini" class="block text-sm font-medium text-gray-700 mb-1">
                                Aktivitas Terkini Desa
                                <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                name="aktivitas_terkini" 
                                id="aktivitas_terkini" 
                                rows="4"
                                required
                                class="focus:ring-gray-500 focus:border-gray-500 block w-full px-4 py-3 sm:text-sm border-gray-300 rounded-md shadow-sm"
                                placeholder="Masukkan aktivitas terkini di desa"></textarea>
                            <p class="mt-1 text-xs text-gray-500">Deskripsi kegiatan atau agenda terbaru di desa</p>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="flex flex-col sm:flex-row justify-end gap-3 pt-6 border-t border-gray-200">
                        <button type="button" class="inline-flex justify-center items-center px-6 py-3 border border-gray-300 shadow-sm text-base font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                            Batal
                        </button>
                        <button type="submit" class="inline-flex justify-center items-center px-6 py-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 transition-colors duration-300">
                            Simpan Data
                            <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Format currency input
        function formatCurrency(input) {
            // Remove non-digit characters
            let value = input.value.replace(/\D/g, '');
            
            // Format with thousand separators
            if (value.length > 0) {
                value = parseInt(value).toLocaleString('id-ID');
            }
            
            input.value = value;
        }

        // Convert formatted currency back to number before form submission
        document.querySelector('form').addEventListener('submit', function(e) {
            const currencyFields = ['anggaran_desa', 'anggaran_terpakai'];
            
            currencyFields.forEach(field => {
                const input = document.getElementById(field);
                if (input) {
                    input.value = input.value.replace(/\D/g, '');
                }
            });
        });
    </script>
</x-layout>