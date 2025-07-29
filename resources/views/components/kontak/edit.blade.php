<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Kontak Pengaduan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
                <div class="mx-auto max-w-3xl px-4 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
                            <h2 class="text-lg font-semibold text-slate-800 dark:text-gray-200">Detail Kontak Pengaduan</h2>
                            <a href="{{ route('kontak.index') }}" class="text-white font-medium text-sm bg-indigo-500 hover:bg-indigo-600 focus:ring-4 focus:outline-none focus:ring-indigo-300 rounded-md px-5 py-2.5 transition duration-200">&laquo; Kembali ke Daftar Kontak</a>
                        </div>
                        <div class="px-6 py-4">
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <tbody>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">ID</td>
                                            <td class="px-6 py-3">{{ $kontak->id }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Nama</td>
                                            <td class="px-6 py-3">{{ $kontak->nama }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Email</td>
                                            <td class="px-6 py-3">{{ $kontak->email }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">No HP</td>
                                            <td class="px-6 py-3">{{ $kontak->no_hp }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Jenis Subyek</td>
                                            <td class="px-6 py-3">{{ $kontak->jenis_subyek }}</td>
                                        </tr>
                                        <tr>
                                            <td class="px-6 py-3 font-semibold text-gray-600 dark:text-gray-200">Pesan</td>
                                            <td class="px-6 py-3">{{ $kontak->pesan }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex flex-col md:flex-row gap-3 pt-6">
                                <form action="{{ route('kontak.destroy', $kontak->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus pengaduan ini?')" class="bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-md px-3 py-2 transition duration-200 text-white">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-app-layout>

