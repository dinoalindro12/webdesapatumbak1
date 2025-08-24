<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Surat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                <div class="mx-auto max-w-3xl px-4 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-slate-800 dark:text-gray-200">Detail Surat -
                                {{ $jenis_surat }}</h2>
                            <a href="{{ route('surat-menyurat.index') }}"
                                class="text-white font-medium text-sm bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-md px-5 py-2.5 transition duration-200">&laquo;
                                Kembali</a>
                        </div>
                        <div class="px-6 py-4">
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <tbody>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">NIK
                                            </td>
                                            <td class="px-6 py-3">{{ $surat->nik }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Nama
                                            </td>
                                            <td class="px-6 py-3">{{ $surat->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tanggal
                                                Lahir</td>
                                            <td class="px-6 py-3">{{ $surat->tanggal_lahir->format('d-m-Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                Lahir</td>
                                            <td class="px-6 py-3">{{ $surat->tempat_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Bangsa
                                            </td>
                                            <td class="px-6 py-3">{{ $surat->bangsa }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Agama
                                            </td>
                                            <td class="px-6 py-3">{{ $surat->agama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">
                                                Pekerjaan</td>
                                            <td class="px-6 py-3">{{ $surat->pekerjaan }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                Tinggal</td>
                                            <td class="px-6 py-3">{{ $surat->tempat_tinggal }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">
                                                Keperluan</td>
                                            <td class="px-6 py-3">{{ $surat->keperluan ?? '-' }}</td>
                                        </tr>

                                        <!-- Tampilkan field khusus berdasarkan jenis surat -->
                                        @if($source === 'SuratKetKematian')
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tanggal
                                                    Wafat</td>
                                                <td class="px-6 py-3">{{ $surat->tanggal_wafat->format('d-m-Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                    Wafat</td>
                                                <td class="px-6 py-3">{{ $surat->tempat_wafat }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                    Pemakaman</td>
                                                <td class="px-6 py-3">{{ $surat->tempat_pemakaman }}</td>
                                            </tr>
                                        @endif

                                        @if($source === 'SuratKetUsaha')
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Nama
                                                    Usaha</td>
                                                <td class="px-6 py-3">{{ $surat->nama_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                    Usaha</td>
                                                <td class="px-6 py-3">{{ $surat->tempat_usaha }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Jenis
                                                    Kelamin</td>
                                                <td class="px-6 py-3">{{ $surat->jenis_kelamin }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Status
                                                    Perkawinan</td>
                                                <td class="px-6 py-3">{{ $surat->status_perkawinan }}</td>
                                            </tr>
                                        @endif

                                        @if($source === 'SuratKetWali')
                                            <!-- Data Anak -->
                                            <tr>
                                                <td colspan="2"
                                                    class="px-6 py-3 font-semibold text-center text-gray-700 dark:text-gray-300 bg-gray-100">
                                                    Data Anak</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">NIK
                                                    Anak</td>
                                                <td class="px-6 py-3">{{ $surat->nik_anak }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Nama
                                                    Anak</td>
                                                <td class="px-6 py-3">{{ $surat->nama_anak }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tanggal
                                                    Lahir Anak</td>
                                                <td class="px-6 py-3">{{ $surat->tanggal_lahir_anak->format('d-m-Y') }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                    Lahir Anak</td>
                                                <td class="px-6 py-3">{{ $surat->tempat_lahir_anak }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Bangsa
                                                    Anak</td>
                                                <td class="px-6 py-3">{{ $surat->bangsa_anak }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Agama
                                                    Anak</td>
                                                <td class="px-6 py-3">{{ $surat->agama_anak }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">
                                                    Pekerjaan Anak</td>
                                                <td class="px-6 py-3">{{ $surat->pekerjaan_anak }}</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tempat
                                                    Tinggal Anak</td>
                                                <td class="px-6 py-3">{{ $surat->tempat_tinggal_anak }}</td>
                                            </tr>
                                        @endif

                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tanggal
                                                Buat</td>
                                            <td class="px-6 py-3">{{ $surat->created_at->format('d-m-Y H:i') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Status
                                            </td>
                                            <td class="px-6 py-3">
                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                                    {{ $surat->status === 'dicetak' ? 'bg-green-100 text-green-800' :
    ($surat->status === 'ditolak' ? 'bg-red-100 text-red-800' :
        'bg-yellow-100 text-yellow-800') }}">
                                                    {{ $surat->status ?? 'diajukan' }}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                                <div class="flex justify-between items-center gap-3 pt-6">
                                    <div>
                                        <form
                                            action="{{ route('surat-menyurat.destroy', ['source' => $source, 'id' => $surat->id]) }}"
                                            method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm('Yakin ingin menghapus surat ini?')"
                                                class="bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-md px-3 py-1.5 transition duration-200 text-white">Hapus</button>
                                        </form>
                                    </div>
                                    <div>
                                        <a href="{{ route('surat-menyurat.print', ['source' => $source, 'id' => $surat->id]) }}"
                                            class="bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-md px-3 py-2 transition duration-200 text-white text-center">
                                            Cetak Surat
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>