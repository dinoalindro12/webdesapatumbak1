<footer class="bg-gray-800 text-white pt-12 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo dan Deskripsi Desa -->
            <div class="space-y-4">
                <div class="flex items-center">
                    <img class="h-10 w-auto" src="{{ asset('images/ld.png') }}" alt="Logo Desa">
                    <span class="ml-3 text-xl font-semibold">Desa Patumbak 1</span>
                </div>
                <p class="text-gray-300 text-sm">
                    Desa kami berkomitmen untuk memberikan pelayanan terbaik kepada masyarakat melalui inovasi dan pelayanan berkualitas.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5Zm0 1.5h8.5A4.25 4.25 0 0 1 20.5 7.75v8.5a4.25 4.25 0 0 1-4.25 4.25h-8.5A4.25 4.25 0 0 1 3.5 16.25v-8.5A4.25 4.25 0 0 1 7.75 3.5Zm4.25 2.25a6 6 0 1 0 0 12 6 6 0 0 0 0-12Zm0 1.5a4.5 4.5 0 1 1 0 9 4.5 4.5 0 0 1 0-9Zm5.25 1.25a1 1 0 1 0 0 2 1 1 0 0 0 0-2Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">YouTube</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <span class="sr-only">TikTok</span>
                        <!-- TikTok SVG Logo (lebih jelas) -->
                        <svg class="h-6 w-6" viewBox="0 0 48 48" fill="none" aria-hidden="true">
                            <g>
                                <path d="M34.5 7.5c.2 3.7 3.1 6.7 6.8 6.9v6.1c-2.1.2-4.2-.1-6.2-.9v13.7c0 7.2-5.8 13-13 13s-13-5.8-13-13 5.8-13 13-13c.5 0 1 .1 1.5.1v6.2c-.5-.1-1-.1-1.5-.1-3.7 0-6.8 3-6.8 6.8s3 6.8 6.8 6.8 6.8-3 6.8-6.8V4.5h6.6Z" fill="currentColor"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Menu Cepat -->
            <div class="space-y-4">
                <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">Menu Cepat</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('beranda') }}" class="text-gray-300 hover:text-white text-sm">Beranda</a></li>
                    <li><a href="{{ route('profil-desa.sejarah') }}" class="text-gray-300 hover:text-white text-sm">Profil Desa</a></li>
                    <li><a href="{{ route('kesehatan.user') }}" class="text-gray-300 hover:text-white text-sm">Layanan</a></li>
                    <li><a href="{{ route('pengumumanuser') }}" class="text-gray-300 hover:text-white text-sm">Berita & Kegiatan</a></li>
                    <li><a href="{{ route('galeri.user') }}" class="text-gray-300 hover:text-white text-sm">Galeri</a></li>
                    <li><a href="{{ route('kontak.create') }}" class="text-gray-300 hover:text-white text-sm">Kontak</a></li>
                </ul>
            </div>

            <!-- Layanan Publik -->
            <div class="space-y-4">
                <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">Layanan Publik</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('layanan.surat-menyurat') }}" class="text-gray-300 hover:text-white text-sm">Surat Keterangan</a></li>
                    <li><a href="{{ route('layanan.surat-menyurat') }}" class="text-gray-300 hover:text-white text-sm">Administrasi KTP</a></li>
                    <li><a href="{{ route('layanan.surat-menyurat') }}" class="text-gray-300 hover:text-white text-sm">Pengajuan KK</a></li>
                    <li><a href="{{ route('layanan.surat-menyurat') }}" class="text-gray-300 hover:text-white text-sm">Pelayanan Pajak</a></li>
                    <li><a href="{{ route('layanan.surat-menyurat') }}" class="text-gray-300 hover:text-white text-sm">Pengaduan Masyarakat</a></li>
                </ul>
            </div>

            <!-- Kontak -->
            <div class="space-y-4">
                <h3 class="text-sm font-semibold text-gray-200 uppercase tracking-wider">Hubungi Kami</h3>
                <address class="not-italic text-gray-300 text-sm">
                    <div class="flex items-start mb-3">
                        <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Jl. Patumbak Deli Tua, Patumbak Satu, Kec. Patumbak, Kabupaten Deli Serdang, Sumatera Utara 20361, Indonesia</span>
                    </div>
                    <div class="flex items-center mb-3">
                        <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <span>0896-9052-2278</span>
                    </div>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>desapatumbak1.id</span>
                    </div>
                </address>
            </div>
        </div>

        <!-- Hak Cipta -->
        <div class="mt-12 border-t border-gray-700 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm text-center md:text-left">
                    &copy; Desa Patumbak 1. All rights reserved.
                </p>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white text-sm mx-4">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white text-sm mx-4">Syarat & Ketentuan</a>
                    <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e839560a85ab!2sMonumen%20Nasional!5e0!3m2!1sen!2sid!4v1634025436347!5m2!1sen!2sid" class="text-gray-400 hover:text-white text-sm mx-4">Peta Situs</a>
                </div>
            </div>
        </div>
    </div>
</footer>