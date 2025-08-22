<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Buat Surat') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                <div class="mx-auto max-w-3xl px-4 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-slate-800 dark:text-gray-200">Detail Surat</h2>
                            <a href="{{ route('surat-menyurat.index') }}"
                                class="text-white font-medium text-sm bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-md px-5 py-2.5 transition duration-200">&laquo;
                                Kembali ke Daftar Surat</a>
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
                                            <td class="px-6 py-3">{{ $surat->tanggal_lahir }}</td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Nomor HP</td>
                                            <td class="px-6 py-3">{{ $surat->no_hp }}</td>
                                        </tr> -->
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
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Tanggal
                                                Buat</td>
                                            <td class="px-6 py-3">{{ $surat->tanggal_buat->format('d F Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Jenis
                                                Surat</td>
                                            <td class="px-6 py-3">{{ $surat->jenis_surat }}</td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Alasan
                                            </td>
                                            <td class="px-6 py-3">{{ $surat->alasan ?? '-' }}</td>
                                        </tr> -->
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Dokumen
                                            </td>
                                            <td class="px-6 py-3">
                                                @if($surat->dokumen)
                                                    <a href="{{ asset('storage/' . $surat->dokumen) }}" target="_blank"
                                                        class="text-blue-600 hover:underline">Lihat Dokumen</a>
                                                @else
                                                    <span class="text-gray-400">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Status
                                            </td>
                                            <td class="px-6 py-3">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full 
                                                    {{ $surat->status == 'Selesai' ? 'text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100' :
    ($surat->status == 'Proses' ? 'text-yellow-700 bg-yellow-100 dark:bg-yellow-700 dark:text-yellow-100' :
        'text-red-700 bg-red-100 dark:bg-red-700 dark:text-red-100') }}">
                                                    {{ $surat->status }}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex flex-col md:flex-row gap-3 pt-6">
                                <!-- TOMBOL GENERATE SURAT BARU -->
                                <a href="{{ route('surat-menyurat.generate', $surat->id) }}"
                                    class="bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 rounded-md px-3 py-2 transition duration-200 text-white text-center">
                                    Generate Surat (.docx)
                                </a>

                                <form action="{{ route('surat-menyurat.destroy', $surat->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus surat ini?')"
                                        class="bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-md px-3 py-2 transition duration-200 text-white">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>