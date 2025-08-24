<div class="bg-white py-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Data Pemohon (Wali) -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Pemohon (Wali)</h2>
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
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nama') border-red-500 @enderror"
                        placeholder="Nama sesuai KTP">
                    @error('nama')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tanggal Lahir -->
                <div>
                    <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                        Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tanggal_lahir') border-red-500 @enderror">
                    @error('tanggal_lahir')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Lahir -->
                <div>
                    <label for="tempat_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_lahir') border-red-500 @enderror"
                        placeholder="Masukkan tempat lahir">
                    @error('tempat_lahir')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
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
                    <select id="agama" name="agama"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('agama') border-red-500 @enderror">
                        <option value="">Pilih Agama</option>
                        <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                    @error('agama')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Pekerjaan -->
                <div>
                    <label for="pekerjaan" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan</label>
                    <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('pekerjaan') border-red-500 @enderror"
                        placeholder="Masukkan pekerjaan">
                    @error('pekerjaan')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Tinggal -->
                <div>
                    <label for="tempat_tinggal" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                        Tinggal</label>
                    <input type="text" id="tempat_tinggal" name="tempat_tinggal" value="{{ old('tempat_tinggal') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_tinggal') border-red-500 @enderror"
                        placeholder="Masukkan alamat lengkap">
                    @error('tempat_tinggal')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>

        <!-- Data Anak -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Anak</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- NIK Anak -->
                <div>
                    <label for="nik_anak" class="block text-sm font-medium text-gray-700 mb-1">NIK Anak</label>
                    <input type="text" id="nik_anak" name="nik_anak" value="{{ old('nik_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nik_anak') border-red-500 @enderror"
                        placeholder="Masukkan NIK anak">
                    @error('nik_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Nama Anak -->
                <div>
                    <label for="nama_anak" class="block text-sm font-medium text-gray-700 mb-1">Nama Anak</label>
                    <input type="text" id="nama_anak" name="nama_anak" value="{{ old('nama_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nama_anak') border-red-500 @enderror"
                        placeholder="Nama lengkap anak">
                    @error('nama_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tanggal Lahir Anak -->
                <div>
                    <label for="tanggal_lahir_anak" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Lahir
                        Anak</label>
                    <input type="date" id="tanggal_lahir_anak" name="tanggal_lahir_anak"
                        value="{{ old('tanggal_lahir_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tanggal_lahir_anak') border-red-500 @enderror">
                    @error('tanggal_lahir_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Lahir Anak -->
                <div>
                    <label for="tempat_lahir_anak" class="block text-sm font-medium text-gray-700 mb-1">Tempat Lahir
                        Anak</label>
                    <input type="text" id="tempat_lahir_anak" name="tempat_lahir_anak"
                        value="{{ old('tempat_lahir_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_lahir_anak') border-red-500 @enderror"
                        placeholder="Masukkan tempat lahir anak">
                    @error('tempat_lahir_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Bangsa Anak -->
                <div>
                    <label for="bangsa_anak" class="block text-sm font-medium text-gray-700 mb-1">Bangsa Anak</label>
                    <input type="text" id="bangsa_anak" name="bangsa_anak" value="{{ old('bangsa_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('bangsa_anak') border-red-500 @enderror"
                        placeholder="Masukkan bangsa anak">
                    @error('bangsa_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Agama Anak -->
                <div>
                    <label for="agama_anak" class="block text-sm font-medium text-gray-700 mb-1">Agama Anak</label>
                    <select id="agama_anak" name="agama_anak"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('agama_anak') border-red-500 @enderror">
                        <option value="">Pilih Agama</option>
                        <option value="Islam" {{ old('agama_anak') == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen" {{ old('agama_anak') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                        <option value="Katolik" {{ old('agama_anak') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                        <option value="Hindu" {{ old('agama_anak') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ old('agama_anak') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                        <option value="Konghucu" {{ old('agama_anak') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                    </select>
                    @error('agama_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Pekerjaan Anak -->
                <div>
                    <label for="pekerjaan_anak" class="block text-sm font-medium text-gray-700 mb-1">Pekerjaan
                        Anak</label>
                    <input type="text" id="pekerjaan_anak" name="pekerjaan_anak" value="{{ old('pekerjaan_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('pekerjaan_anak') border-red-500 @enderror"
                        placeholder="Masukkan pekerjaan anak">
                    @error('pekerjaan_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Tinggal Anak -->
                <div>
                    <label for="tempat_tinggal_anak" class="block text-sm font-medium text-gray-700 mb-1">Tempat Tinggal
                        Anak</label>
                    <input type="text" id="tempat_tinggal_anak" name="tempat_tinggal_anak"
                        value="{{ old('tempat_tinggal_anak') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_tinggal_anak') border-red-500 @enderror"
                        placeholder="Masukkan alamat lengkap anak">
                    @error('tempat_tinggal_anak')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>

        <!-- Keperluan -->
        <div class="mb-6">
            <label for="keperluan" class="block text-sm font-medium text-gray-700 mb-1">Keperluan</label>
            <textarea id="keperluan" name="keperluan" rows="3"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500 @error('keperluan') border-red-500 @enderror"
                placeholder="Jelaskan keperluan pembuatan surat keterangan">{{ old('keperluan') }}</textarea>
            @error('keperluan')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
        </div>
    </div>
</div>