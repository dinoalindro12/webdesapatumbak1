<nav class="sticky top-0 z-50 bg-gray-800 font-sans" x-data="{ isOpen: false, openDropdown: null }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <img class="size-8" src="{{ asset('images/ld.png') }}" alt="Desa Patumbak 1" />
          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Beranda -->
              <h1>
                <a href="{{ route('beranda') }}" class="rounded-md px-3 py-2 text-lg font-medium text-white hover:bg-gray-700 transition-colors duration-200 flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5 0a2 2 0 002-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
                  </svg>
                  Beranda
                </a>
              </h1>

              <!-- Profil Desa -->
              <div class="relative" x-data="{ isHovered: false }" @mouseenter="isHovered = true; openDropdown = 'profil'" @mouseleave="isHovered = false; openDropdown = null">
                <button type="button" @click="openDropdown = openDropdown === 'profil' ? null : 'profil'" 
                        class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                  </svg>
                  Profil Desa
                  <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': openDropdown === 'profil' }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div x-show="openDropdown === 'profil'"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-1"
                     class="absolute left-0 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none">
                  <div class="py-1">
                    <a href="{{ route('profil-desa.sejarah') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Sejarah Desa</a>
                    <a href="{{ route('profil-desa.visi-misi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Visi & Misi</a>
                    <a href="{{ route('profil-desa.struktur-organisasi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Sejarah Kepemimpinan</a>
                    <a href="{{ route('profil-desa.perangkat-desa') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Perangkat Desa</a>
                    <a href="{{ route('profil-desa.bumdes') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">BUMDes</a>
                  </div>
                </div>
              </div>

              <!-- Layanan -->
              <div class="relative" x-data="{ isHovered: false }" @mouseenter="isHovered = true; openDropdown = 'layanan'" @mouseleave="isHovered = false; openDropdown = null">
                <button type="button" @click="openDropdown = openDropdown === 'layanan' ? null : 'layanan'" 
                        class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h3m4 0a2 2 0 00-2-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
                  </svg>
                  Layanan
                  <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': openDropdown === 'layanan' }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div x-show="openDropdown === 'layanan'"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-1"
                     class="absolute left-0 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none">
                  <div class="py-1">
                    <a href="{{ route('kesehatan.user') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Kesehatan</a>
                    <a href="{{ route('pendidikan.user') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Pendidikan</a>
                    <a href="{{ route('layanan.pertanian') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">UMKM</a>
                    <a href="{{ route('layanan.surat-menyurat') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Surat Menyurat</a>
                  </div>
                </div>
              </div>

              <!-- Berita & Kegiatan -->
              <div class="relative" x-data="{ isHovered: false }" @mouseenter="isHovered = true; openDropdown = 'berita'" @mouseleave="isHovered = false; openDropdown = null">
                <button type="button" @click="openDropdown = openDropdown === 'berita' ? null : 'berita'" 
                        class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 flex items-center">
                  <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                  </svg>
                  Berita & Kegiatan
                  <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': openDropdown === 'berita' }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                  </svg>
                </button>
                <div x-show="openDropdown === 'berita'"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 translate-y-1"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 translate-y-0"
                     x-transition:leave-end="opacity-0 translate-y-1"
                     class="absolute left-0 z-10 mt-2 w-56 origin-top-left rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none">
                  <div class="py-1">
                    <a href="{{ route('berita-kegiatan.berita-terkini') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Berita Terkini</a>
                    <a href="{{ route('agendauser') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Agenda Kegiatan</a>
                    <a href="{{ route('pengumumanuser') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 font-medium">Pengumuman</a>
                  </div>
                </div>
              </div>

              <!-- Galeri -->
              <a href="{{ route('galeri.user') }}" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Galeri
              </a>

              <!-- Kontak -->
              <a href="{{ route('kontak.create') }}" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition-colors duration-200 flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                Kontak
              </a>
            </div>
          </div>
        </div>

        <!-- User Menu -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <div class="relative ml-3">
              <div>
                @if (Auth::check())
                <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </button>
                @else
                <a href="/login" class="text-white text-lg font-medium hover:text-gray-300 transition-colors duration-200">
                  Login
                </a>
                @endif
              </div>
              <div x-show="isOpen"
                   @click.away="isOpen = false"
                   x-transition:enter="transition ease-out duration-100"
                   x-transition:enter-start="transform opacity-0 scale-95"
                   x-transition:enter-end="transform opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-75"
                   x-transition:leave-start="transform opacity-100 scale-100"
                   x-transition:leave-end="transform opacity-0 scale-95"
                   class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil Anda</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-1">Pengaturan</a>
                <a href="{{ route('login') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-2">Masuk</a>
                <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" tabindex="-1" id="user-menu-item-3">Daftar</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Mobile menu button -->
        <div class="-mr-2 flex md:hidden">
          <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg :class="{'hidden': isOpen, 'block': !isOpen}" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <svg :class="{'block': isOpen, 'hidden': !isOpen}" class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <a href="{{ route('beranda') }}" class="block rounded-md px-3 py-2 text-lg font-medium text-white hover:bg-gray-700 flex items-center">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5 0a2 2 0 002-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
          </svg>
          Beranda
        </a>

        <!-- Profil Desa Mobile -->
        <div x-data="{ isProfilOpen: false }">
          <button @click="isProfilOpen = !isProfilOpen" class="flex w-full items-center justify-between rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
            <span class="flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
              </svg>
              Profil Desa
            </span>
            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': isProfilOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="isProfilOpen" x-collapse class="pl-4 space-y-1">
            <a href="{{ route('profil-desa.sejarah') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sejarah</a>
            <a href="{{ route('profil-desa.visi-misi') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Visi & Misi</a>
            <a href="{{ route('profil-desa.struktur-organisasi') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sejarah Kepemimpinan</a>
            <a href="{{ route('profil-desa.perangkat-desa') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Perangkat Desa</a>
            <a href="{{ route('profil-desa.bumdes') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">BUMDes</a>
          </div>
        </div>

        <!-- Layanan Mobile -->
        <div x-data="{ isLayananOpen: false }">
          <button @click="isLayananOpen = !isLayananOpen" class="flex w-full items-center justify-between rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
            <span class="flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2a4 4 0 014-4h3m4 0a2 2 0 00-2-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
              </svg>
              Layanan
            </span>
            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': isLayananOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="isLayananOpen" x-collapse class="pl-4 space-y-1">
            <a href="{{ route('kesehatan.user') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kesehatan</a>
            <a href="{{ route('pendidikan.user') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pendidikan</a>
            <a href="{{ route('layanan.pertanian') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">UMKM</a>
            <a href="{{ route('layanan.surat-menyurat') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Surat Menyurat</a>
          </div>
        </div>

        <!-- Berita & Kegiatan Mobile -->
        <div x-data="{ isBeritaOpen: false }">
          <button @click="isBeritaOpen = !isBeritaOpen" class="flex w-full items-center justify-between rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
            <span class="flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
              </svg>
              Berita & Kegiatan
            </span>
            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': isBeritaOpen }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="isBeritaOpen" x-collapse class="pl-4 space-y-1">
            <a href="{{ route('berita-kegiatan.berita-terkini') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Berita Terkini</a>
            <a href="{{ route('agendauser') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Agenda Kegiatan</a>
            <a href="{{ route('pengumumanuser') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengumuman</a>
          </div>
        </div>

        <!-- Galeri Mobile -->
        <a href="{{ route('galeri.user') }}" class="block rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          Galeri
        </a>

        <!-- Kontak Mobile -->
        <a href="{{ route('kontak.create') }}" class="block rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
          </svg>
          Kontak
        </a>
      </div>

      <!-- User Menu Mobile -->
      <div class="border-t border-gray-700 pt-4 pb-3">
        @if(Auth::check())
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Profil Anda</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Pengaturan</a>
          <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Masuk</a>
        </div>
        @else
        <div class="mt-3 space-y-1 px-2 text-center">
          <a href="/login" class="text-white text-lg font-medium hover:text-gray-300 transition-colors duration-200 flex items-center justify-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            Login
          </a>
        </div>
        @endif
      </div>
    </div>
  </nav>