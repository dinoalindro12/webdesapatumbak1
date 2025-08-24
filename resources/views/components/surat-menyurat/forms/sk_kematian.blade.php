<div class="bg-white py-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Data Almarhum/Almarhumah -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Almarhum/Almarhumah</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- NIK -->
                <div>
                    <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                    <input type="text" id="nik" name="nik" value="{{ old('nik') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nik') border-red-500 @enderror"
                        placeholder="Masukkan NIK almarhum">
                    @error('nik')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Nama Lengkap -->
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('nama') border-red-500 @enderror"
                        placeholder="Nama lengkap almarhum">
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
                        placeholder="Masukkan tempat lahir almarhum">
                    @error('tempat_lahir')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Bangsa -->
                <div>
                    <label for="bangsa" class="block text-sm font-medium text-gray-700 mb-1">Bangsa</label>
                    <input type="text" id="bangsa" name="bangsa" value="{{ old('bangsa') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('bangsa') border-red-500 @enderror"
                        placeholder="Masukkan bangsa almarhum">
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
                        placeholder="Masukkan pekerjaan almarhum">
                    @error('pekerjaan')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Tinggal -->
                <div>
                    <label for="tempat_tinggal" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                        Tinggal</label>
                    <input type="text" id="tempat_tinggal" name="tempat_tinggal" value="{{ old('tempat_tinggal') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_tinggal') border-red-500 @enderror"
                        placeholder="Masukkan alamat lengkap almarhum">
                    @error('tempat_tinggal')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>

        <!-- Data Kematian -->
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4 border-b pb-2">Data Kematian</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Tanggal Wafat -->
                <div>
                    <label for="tanggal_wafat" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                        Wafat</label>
                    <input type="date" id="tanggal_wafat" name="tanggal_wafat" value="{{ old('tanggal_wafat') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tanggal_wafat') border-red-500 @enderror">
                    @error('tanggal_wafat')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Wafat -->
                <div>
                    <label for="tempat_wafat" class="block text-sm font-medium text-gray-700 mb-1">Tempat Wafat</label>
                    <input type="text" id="tempat_wafat" name="tempat_wafat" value="{{ old('tempat_wafat') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_wafat') border-red-500 @enderror"
                        placeholder="Masukkan tempat wafat">
                    @error('tempat_wafat')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
                <!-- Tempat Pemakaman -->
                <div>
                    <label for="tempat_pemakaman" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                        Pemakaman</label>
                    <input type="text" id="tempat_pemakaman" name="tempat_pemakaman"
                        value="{{ old('tempat_pemakaman') }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-800 @error('tempat_pemakaman') border-red-500 @enderror"
                        placeholder="Masukkan tempat pemakaman">
                    @error('tempat_pemakaman')<div class="text-red-500 text-xs mt-1">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
    </div>
</div>