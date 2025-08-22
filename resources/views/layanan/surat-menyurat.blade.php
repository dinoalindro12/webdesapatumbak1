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

            <!-- Form Section -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-8">
                <form method="POST" action="{{ route('layanan.surat-menyurat.store') }}" enctype="multipart/form-data">
                    @csrf
                    <!-- Personal Information -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Pemohon</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- NIK -->
                            <div>
                                <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                                <input type="text" id="nik" name="nik" value="{{ old('nik') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nik') border-red-500 @enderror"
                                    placeholder="Masukkan NIK Anda">
                                @error('nik')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                            </div>
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                    Lengkap</label>
                                <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nama') border-red-500 @enderror"
                                    placeholder="Nama sesuai KTP">
                                @error('nama')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                            </div>
                            <!-- Tanggal Lahir -->
                            <div>
                                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                                    Lahir</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tanggal_lahir') border-red-500 @enderror">
                                @error('tanggal_lahir')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- No. HP
                            <div>
                                <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
                                <input type="tel" id="no_hp" name="no_hp" value="{{ old('no_hp') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('no_hp') border-red-500 @enderror"
                                    placeholder="0812-3456-7890">
                                @error('no_hp')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                            </div> -->
                            <!-- Tempat Lahir -->
                            <div>
                                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                                    Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir"
                                    value="{{ old('tempat_lahir') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_lahir') border-red-500 @enderror"
                                    placeholder="Masukkan tempat lahir">
                                @error('tempat_lahir')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Bangsa -->
                            <div>
                                <label for="bangsa" class="block text-sm font-medium text-gray-700 mb-1">Bangsa</label>
                                <input type="text" id="bangsa" name="bangsa" value="{{ old('bangsa') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('bangsa') border-red-500 @enderror"
                                    placeholder="Masukkan bangsa">
                                @error('bangsa')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                            </div>

                            <!-- Agama -->
                            <div>
                                <label for="agama" class="block text-sm font-medium text-gray-700 mb-1">Agama</label>
                                <input type="text" id="agama" name="agama" value="{{ old('agama') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('agama') border-red-500 @enderror"
                                    placeholder="Masukkan agama">
                                @error('agama')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                            </div>

                            <!-- Pekerjaan -->
                            <div>
                                <label for="pekerjaan"
                                    class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                                <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('pekerjaan') border-red-500 @enderror"
                                    placeholder="Masukkan pekerjaan">
                                @error('pekerjaan')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                            </div>

                            <!-- Tempat Tinggal -->
                            <div>
                                <label for="tempat_tinggal" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                                    Tinggal</label>
                                <input type="text" id="tempat_tinggal" name="tempat_tinggal"
                                    value="{{ old('tempat_tinggal') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_tinggal') border-red-500 @enderror"
                                    placeholder="Masukkan alamat lengkap">
                                @error('tempat_tinggal')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                                @enderror
                            </div>


                        </div>
                    </div>
                    <!-- Surat Information -->
                    <div class="mb-8">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Detail Permohonan</h2>
                        <!-- Jenis Surat Dropdown -->
                        <div class="mb-6">
                            <label for="jenis_surat" class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                Surat</label>
                            <select id="jenis_surat" name="jenis_surat"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('jenis_surat') border-red-500 @enderror">
                                <option value="" disabled {{ old('jenis_surat') ? '' : 'selected' }}>-- Pilih Jenis
                                    Surat --</option>
                                <option value="ktp" {{ old('jenis_surat') == 'ktp' ? 'selected' : '' }}>Pembuatan KTP
                                </option>
                                <option value="kk" {{ old('jenis_surat') == 'kk' ? 'selected' : '' }}>Pembuatan Kartu
                                    Keluarga (KK)</option>
                                <option value="sk_domisili" {{ old('jenis_surat') == 'sk_domisili' ? 'selected' : '' }}>
                                    Surat Keterangan Domisili</option>
                                <option value="sk_ck" {{ old('jenis_surat') == 'sk_ck' ? 'selected' : '' }}>Surat
                                    Keterangan Catatan Kriminal</option>
                                <option value="sk_tidak_mampu" {{ old('jenis_surat') == 'sk_tidak_mampu' ? 'selected' : '' }}>Surat Keterangan Tidak Mampu</option>
                                <option value="sk_belum_nikah" {{ old('jenis_surat') == 'sk_belum_nikah' ? 'selected' : '' }}>Surat Keterangan Belum Menikah</option>
                                <option value="sk_penghasilan" {{ old('jenis_surat') == 'sk_penghasilan' ? 'selected' : '' }}>Surat Keterangan Penghasilan</option>
                                <option value="sk_kematian" {{ old('jenis_surat') == 'sk_kematian' ? 'selected' : '' }}>
                                    Surat Keterangan Kematian</option>
                            </select>
                            @error('jenis_surat')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                        </div>
                        <!-- Keperluan -->
                        <div>
                            <label for="keperluan"
                                class="block text-sm font-medium text-gray-700 mb-1">Keperluan</label>
                            <textarea id="keperluan" name="keperluan" rows="2"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 @error('keperluan') border-red-500 @enderror"
                                placeholder="Jelaskan keperluan pembuatan surat">{{ old('keperluan') }}</textarea>
                            @error('keperluan')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                        </div>
                        <!-- Upload Dokumen -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Upload Dokumen Pendukung</label>
                            <div class="mt-1 flex items-center">
                                <label for="file-upload"
                                    class="cursor-pointer bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                    <span>Pilih File</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <span class="ml-3 text-sm text-gray-500" id="file-name">Belum ada file dipilih</span>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Format PDF/JPG/PNG, maksimal 2MB</p>
                            @error('file-upload')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
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
                    <li>Anda akan menerima notifikasi via SMS/WhatsApp</li>
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
        // Untuk menampilkan nama file yang dipilih
        document.getElementById('file-upload').addEventListener('change', function (e) {
            var fileName = e.target.files[0] ? e.target.files[0].name : "Belum ada file dipilih";
            document.getElementById('file-name').textContent = fileName;
        });
    </script>
</x-layout>