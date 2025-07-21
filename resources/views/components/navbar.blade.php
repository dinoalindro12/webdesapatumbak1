<nav class="sticky top-0 z-50 bg-gray-800 " x-data="{
    isOpen: false,
    openDropdown: null
  }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <div class="shrink-0">
          <img class="size-8" src="{{ asset('images/ld.png') }}" alt="Desa Patumbak 1" />
        </div>
        <div class="hidden md:block">
          <div class="ml-10 flex items-baseline space-x-4">
            <h1>
              <a href="{{ route('beranda') }}"
                class="rounded-md px-3 py-2 text-lg font-bold text-white flex items-center" aria-current="page">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5 0a2 2 0 002-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
                </svg>
                Beranda
              </a>
            </h1>
            <div class="relative" x-data="{ isHovered: false }" @mouseenter="isHovered = true; openDropdown = 'profil'"
              @mouseleave="isHovered = false; openDropdown = null">
              <button type="button" @click="openDropdown = openDropdown === 'profil' ? null : 'profil'"
                class="rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
                </svg>
                Profil Desa
                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                  aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="openDropdown === 'profil'" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute left-0 z-10 mt-2 w-48 origin-top-left rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                <a href="{{ route('profil-desa.sejarah') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah</a>
                <a href="{{ route('profil-desa.visi-misi') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
                <a href="{{ route('profil-desa.struktur-organisasi') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah Kepemimpinan</a>
                <a href="{{ route('profil-desa.perangkat-desa') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perangkat Desa</a>
                <a href="{{ route('profil-desa.bumdes') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">BUMDes</a>
              </div>
            </div>

            {{-- menu layanan --}}
            <div class="relative" x-data="{ isHovered: false }" @mouseenter="isHovered = true; openDropdown = 'layanan'"
              @mouseleave="isHovered = false; openDropdown = null">
              <button type="button" @click="openDropdown = openDropdown === 'layanan' ? null : 'layanan'"
                class="rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9 17v-2a4 4 0 014-4h3m4 0a2 2 0 00-2-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
                </svg>
                Layanan
                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="openDropdown === 'layanan'" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute left-0 z-10 mt-2 w-48 origin-top-left rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                <a href="{{ route('layanan.kesehatan') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kesehatan</a>
                <a href="{{ route('layanan.pendidikan') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pendidikan</a>
                <a href="{{ route('layanan.pertanian') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">UMKM</a>
                <a href="{{ route('layanan.surat-menyurat') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Surat Menyurat</a>
              </div>
            </div>

            <div class="relative" x-data="{ isHovered: false }" @mouseenter="isHovered = true; openDropdown = 'berita'"
              @mouseleave="isHovered = false; openDropdown = null">
              <button type="button" @click="openDropdown = openDropdown === 'berita' ? null : 'berita'"
                class="rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 17l4-4-4-4m8 8V7a2 2 0 00-2-2H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2z" />
                </svg>
                Berita & Kegiatan
                <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </button>
              <div x-show="openDropdown === 'berita'" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95"
                class="absolute left-0 z-10 mt-2 w-48 origin-top-left rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                <a href="{{ route('berita-kegiatan.berita-terkini') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Berita Terkini</a>
                <a href="{{ route('berita-kegiatan.agenda-kegiatan') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Agenda Kegiatan</a>
                <a href="{{ route('berita-kegiatan.pengumuman') }}"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengumuman</a>
              </div>
            </div>

            <a href="{{ route('galeri') }}"
              class="rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3" />
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19.4 15a1.65 1.65 0 00.33-1.82A8 8 0 104 12.13" />
              </svg>
              Galeri
            </a>
            <a href="{{ route('kontak.create') }}"
              class="rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
              <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <rect x="7" y="2" width="10" height="20" rx="2" ry="2" stroke="currentColor" fill="none" />
                <rect x="9" y="4" width="6" height="12" rx="1" ry="1" stroke="currentColor" fill="none" />
                <circle cx="12" cy="18" r="1" stroke="currentColor" fill="none" />
                <rect x="10.5" y="19.5" width="3" height="1.5" rx="0.5" stroke="currentColor" fill="none" />
              </svg>
              Kontak
            </a>
          </div>
        </div>
      </div>

      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <div class="relative ml-3">
            <div>
              @if (Auth::check())
          <button type="button" @click="isOpen = !isOpen"
          class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none"
          id="user-menu-button" aria-expanded="false" aria-haspopup="true">
          <span class="absolute -inset-1.5"></span>
          <span class="sr-only">Open user menu</span>
          <img class="size-8 rounded-full"
            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
            alt="" />
          </button>
        @else
          <a href="/login" class="text-white text-lg font-bold">
          Login
          </a>
        @endif
            </div>
            <div x-show="isOpen" @click.away="!isOpen = false" x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none"
              role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                id="user-menu-item-0">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                id="user-menu-item-1">Settings</a>
              <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                tabindex="-1" id="user-menu-item-2"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>

              <!-- Add this hidden form somewhere in your layout -->
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              <!-- <a href="{{ route('register') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Registrasi</a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="-mr-2 flex md:hidden">
        <button type="button" @click="isOpen = !isOpen"
          class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none"
          aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg :class="{'hidden': isOpen, 'block': !isOpen}" class="size-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg :class="{'block': isOpen, 'hidden': !isOpen}" class="size-6" fill="none" viewBox="0 0 24 24"
            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <a href="{{ route('beranda') }}" class="block rounded-md px-3 py-2 text-lg font-bold text-white flex items-center"
        aria-current="page">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
            d="M3 12l2-2m0 0l7-7 7 7m-9 2v8m4-8v8m5 0a2 2 0 002-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
        </svg>
        Beranda
      </a>

      <div x-data="{ isProfilOpen: false }">
        <button @click="isProfilOpen = !isProfilOpen"
          class="flex w-full items-center justify-between rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white">
          <span class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z" />
            </svg>
            Profil Desa
          </span>
          <svg class="ml-1 h-4 w-4" :class="{ 'rotate-180': isProfilOpen }" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="isProfilOpen" class="pl-4">
          <a href="{{ route('profil-desa.sejarah') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sejarah</a>
          <a href="{{ route('profil-desa.visi-misi') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Visi
            & Misi</a>
          <a href="{{ route('profil-desa.struktur-organisasi') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Sejarah
            Kepemimpinan</a>
          <a href="{{ route('profil-desa.perangkat-desa') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Perangkat
            Desa</a>
          <a href="{{ route('profil-desa.bumdes') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">BUMDes</a>
        </div>
      </div>
      {{-- dropdown layanan --}}
      <div x-data="{ isLayananOpen: false }">
        <button @click="isLayananOpen = !isLayananOpen"
          class="flex w-full items-center justify-between rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white">
          <span class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 17v-2a4 4 0 014-4h3m4 0a2 2 0 00-2-2V7a2 2 0 00-2-2h-3.5a2 2 0 00-2 2v1" />
            </svg>
            Layanan
          </span>
          <svg class="ml-1 h-4 w-4" :class="{ 'rotate-180': isLayananOpen }" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="isLayananOpen" class="pl-4">
          <a href="{{ route('layanan.kesehatan') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kesehatan</a>
          <a href="{{ route('layanan.pendidikan') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pendidikan</a>
          <a href="{{ route('layanan.pertanian') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">UMKM</a>
          <a href="{{ route('layanan.surat-menyurat') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pertanian</a>
        </div>
      </div>

      <div x-data="{ isBeritaOpen: false }">
        <button @click="isBeritaOpen = !isBeritaOpen"
          class="flex w-full items-center justify-between rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white">
          <span class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" fill="none" />
              <rect x="7" y="8" width="6" height="2" rx="1" stroke="currentColor" fill="none" />
              <rect x="7" y="12" width="10" height="2" rx="1" stroke="currentColor" fill="none" />
              <rect x="7" y="16" width="6" height="2" rx="1" stroke="currentColor" fill="none" />
            </svg>
            Berita & Kegiatan
          </span>
          <svg class="ml-1 h-4 w-4" :class="{ 'rotate-180': isBeritaOpen }" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div x-show="isBeritaOpen" class="pl-4">
          <a href="{{ route('berita-kegiatan.berita-terkini') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Berita
            Terkini</a>
          <a href="{{ route('berita-kegiatan.agenda-kegiatan') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Agenda
            Kegiatan</a>
          <a href="{{ route('berita-kegiatan.pengumuman') }}"
            class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Pengumuman</a>
        </div>
      </div>

      <a href="{{ route('galeri') }}"
        class="block rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="3" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.4 15a1.65 1.65 0 00.33-1.82A8 8 0 104 12.13" />
        </svg>
        Galeri
      </a>
      <a href="{{ route('kontak.create') }}"
        class="block rounded-md px-3 py-2 text-lg font-bold text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <rect x="7" y="2" width="10" height="20" rx="2" ry="2" stroke="currentColor" fill="none" />
          <rect x="9" y="4" width="6" height="12" rx="1" ry="1" stroke="currentColor" fill="none" />
          <circle cx="12" cy="18" r="1" stroke="currentColor" fill="none" />
          <rect x="10.5" y="19.5" width="3" height="1.5" rx="0.5" stroke="currentColor" fill="none" />
        </svg>
        Kontak
      </a>
    </div>

    <div class="border-t border-gray-700 pt-4 pb-3">
      @if(Auth::check())
      <div class="flex items-center px-5">
      <div class="shrink-0">
        <img class="size-10 rounded-full" src="{{ asset('images/ld.png') }}" alt="" />
      </div>
      <div class="ml-3">
        <div class="text-base font-medium text-white">Tom Cook</div>
        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
      </div>
      <button type="button"
        class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-none">
        <span class="absolute -inset-1.5"></span>
        <span class="sr-only">View notifications</span>
        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
        </svg>
      </button>
      </div>
      <div class="mt-3 space-y-1 px-2">
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
        Profile</a>
      <a href="#"
        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
      <a href="{{ route('login') }}"
        class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
        in</a>
      </div>
    @else
      <div class="mt-3 space-y-1 px-2 text-center">
      <a href="/login" class="text-white text-lg font-bold flex items-center justify-center">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M9 12h12m0 0l-4-4m4 4l-4 4m-13-4a9 9 0 1118 0 9 9 0 01-18 0z" />
        </svg>
        Login
      </a>
      <div>
    @endif
        </div>
      </div>
</nav>