<nav class="sticky top-0 z-50 bg-gray-800 font-sans" x-data="{ isOpen: false, openDropdown: null }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <img class="size-8" src="{{ asset('images/ld.png') }}" alt="Desa Patumbak 1" />
        <div class="hidden md:flex ml-10 space-x-4">
          <a href="{{ route('beranda') }}" class="rounded-md px-3 py-2 text-lg font-medium text-white hover:bg-gray-700 flex items-center">
            Beranda
          </a>
          <div class="relative" x-data @mouseenter="openDropdown = 'profil'" @mouseleave="openDropdown = null">
            <button type="button" @click="openDropdown = openDropdown === 'profil' ? null : 'profil'" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
              Profil Desa
              <svg class="ml-1 h-4 w-4" :class="{ 'rotate-180': openDropdown === 'profil' }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openDropdown === 'profil'" x-transition class="absolute left-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg">
              <a href="{{ route('profil-desa.sejarah') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah Desa</a>
              <a href="{{ route('profil-desa.visi-misi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Visi & Misi</a>
              <a href="{{ route('profil-desa.struktur-organisasi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sejarah Kepemimpinan</a>
              <a href="{{ route('profil-desa.perangkat-desa') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Perangkat Desa</a>
              <a href="{{ route('profil-desa.bumdes') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">BUMDes</a>
            </div>
          </div>
          <div class="relative" x-data @mouseenter="openDropdown = 'layanan'" @mouseleave="openDropdown = null">
            <button type="button" @click="openDropdown = openDropdown === 'layanan' ? null : 'layanan'" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
              Layanan
              <svg class="ml-1 h-4 w-4" :class="{ 'rotate-180': openDropdown === 'layanan' }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openDropdown === 'layanan'" x-transition class="absolute left-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg">
              <a href="{{ route('kesehatan.user') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kesehatan</a>
              <a href="{{ route('pendidikan.user') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pendidikan</a>
              <a href="{{ route('umkm.user') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">UMKM</a>
              <a href="{{ route('layanan.surat-menyurat') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Surat Menyurat</a>
            </div>
          </div>
          <div class="relative" x-data @mouseenter="openDropdown = 'berita'" @mouseleave="openDropdown = null">
            <button type="button" @click="openDropdown = openDropdown === 'berita' ? null : 'berita'" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
              Berita & Kegiatan
              <svg class="ml-1 h-4 w-4" :class="{ 'rotate-180': openDropdown === 'berita' }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openDropdown === 'berita'" x-transition class="absolute left-0 z-10 mt-2 w-48 bg-white rounded-md shadow-lg">
              <a href="{{ route('berita-kegiatan.berita-terkini') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Berita Terkini</a>
              <a href="{{ route('agendauser') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Agenda Kegiatan</a>
              <a href="{{ route('pengumuman.user') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Pengumuman</a>
            </div>
          </div>
          <a href="{{ route('galeri.user') }}" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
            Galeri
          </a>
          <a href="{{ route('kontak.create') }}" class="rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white flex items-center">
            Kontak
          </a>
        </div>
      </div>
      <div class="hidden md:block">
        @if (Auth::check())
        <button @click="isOpen = !isOpen" class="flex items-center rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white">
          <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
        </button>
        <div x-show="isOpen" @click.away="isOpen = false" x-transition class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg">
          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil Anda</a>
          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
        </div>
        @else
        <a href="{{ route('login') }}" class="text-white text-lg font-medium hover:text-gray-300">Login</a>
        @endif
      </div>
      <div class="md:hidden">
        <button @click="isOpen = !isOpen" class="rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white">
          <svg :class="{'hidden': isOpen, 'block': !isOpen}" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg :class="{'block': isOpen, 'hidden': !isOpen}" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pt-2 pb-3">
      <a href="{{ route('beranda') }}" class="block rounded-md px-3 py-2 text-lg font-medium text-white hover:bg-gray-700">Beranda</a>
      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full text-left rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Profil Desa</button>
        <div x-show="open" x-collapse>
          <a href="{{ route('profil-desa.sejarah') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Sejarah Desa</a>
          <a href="{{ route('profil-desa.visi-misi') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Visi & Misi</a>
          <a href="{{ route('profil-desa.struktur-organisasi') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Sejarah Kepemimpinan</a>
          <a href="{{ route('profil-desa.perangkat-desa') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Perangkat Desa</a>
          <a href="{{ route('profil-desa.bumdes') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">BUMDes</a>
        </div>
      </div>
      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full text-left rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Layanan</button>
        <div x-show="open" x-collapse>
          <a href="{{ route('kesehatan.user') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Kesehatan</a>
          <a href="{{ route('pendidikan.user') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Pendidikan</a>
          <a href="{{ route('umkm.user') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">UMKM</a>
          <a href="{{ route('layanan.surat-menyurat') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Surat Menyurat</a>
        </div>
      </div>
      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full text-left rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Berita & Kegiatan</button>
        <div x-show="open" x-collapse>
          <a href="{{ route('berita-kegiatan.berita-terkini') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Berita Terkini</a>
          <a href="{{ route('agendauser') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Agenda Kegiatan</a>
          <a href="{{ route('pengumuman.user') }}" class="block px-3 py-2 text-base text-gray-300 hover:bg-gray-700 hover:text-white">Pengumuman</a>
        </div>
      </div>
      <a href="{{ route('galeri.user') }}" class="block rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Galeri</a>
      <a href="{{ route('kontak.create') }}" class="block rounded-md px-3 py-2 text-lg font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kontak</a>
    </div>
    <div class="border-t border-gray-700 pt-4 pb-3">
      @if(Auth::check())
      <div class="flex items-center px-5">
        <img class="size-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
        <div class="ml-3">
          <div class="text-base font-medium text-white">{{ Auth::user()->name ?? 'User' }}</div>
          <div class="text-sm font-medium text-gray-400">{{ Auth::user()->email ?? '' }}</div>
        </div>
      </div>
      <div class="mt-3 space-y-1 px-2">
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Profil Anda</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Pengaturan</a>
        <a href="{{ route('login') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Masuk</a>
      </div>
      @else
      <div class="mt-3 space-y-1 px-2 text-center">
        <a href="{{ route('login') }}" class="text-white text-lg font-medium hover:text-gray-300">Login</a>
      </div>
      @endif
    </div>
  </div>
</nav>
