<nav x-data="{ 
    open: false,
    sidebarOpen: true,
    activeMenu: null,
    init() {
        const path = window.location.pathname;
        if (path.includes('/berita')) this.activeMenu = 'berita';
        if (path.includes('/perangkat')) this.activeMenu = 'perangkat';
    },
    toggleMenu(menu) {
        this.activeMenu = this.activeMenu === menu ? null : menu;
    }
}" class="min-h-screen flex bg-white">
    <!-- Mobile overlay -->
    <div x-show="open" @click="open = false" class="fixed inset-0 z-40 bg-black bg-opacity-50 md:hidden"
        x-transition:enter="transition ease-out duration-300" x-transition:leave="transition ease-in duration-200">
    </div>

    <!-- Fixed Sidebar -->
    <div :class="{'w-64': sidebarOpen, 'w-16': !sidebarOpen}"
        class="fixed h-full bg-white text-gray-800 border-r border-gray-200 shadow-sm z-50 transition-all duration-300 ease-in-out flex flex-col">

        <!-- Logo & Toggle -->
        <div class="flex items-center justify-between h-16 px-4 border-b border-gray-200">
            <a href="{{ route('dashboard.index') }}" class="flex items-center space-x-3">
                <div class="flex items-center flex-shrink-0">
                    <img class="size-8" src="{{ asset('images/ld.png') }}" alt="Desa Patumbak 1" />
                </div>
                <span x-show="sidebarOpen" class="font-medium text-gray-900">Admin Panel</span>
            </a>
            <button @click="sidebarOpen = !sidebarOpen"
                class="text-gray-500 hover:text-gray-700 p-1 rounded-md hover:bg-gray-100">
                <template x-if="sidebarOpen">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </template>
                <template x-if="!sidebarOpen">
                    <span class="ml-4 p-1 bg-white border border-gray-200 rounded-md flex items-center justify-center">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                </template>
            </button>
        </div>

        <!-- Scrollable Menu Area -->
        <div class="py-2 space-y-1 overflow-y-auto overflow-x-hidden flex-grow" style="scrollbar-width: thin;">

            <!-- Dashboard -->
            <a href="{{ route('dashboard.index') }}"
            class="flex items-center px-4 py-3 mx-2 my-1 rounded-lg transition-all duration-200 {{ request()->routeIs('dashboard.index') ? 'bg-blue-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50' }}">
            <div :class="sidebarOpen ? 'ml-0 p-2 bg-blue-100 rounded-lg' : '-ml-2.5 p-2 bg-blue-100 rounded-lg'">
                <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen" class="ml-3 font-medium truncate max-w-[160px] text-left">Dashboard</span>
                </a>
            
            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>
            
                
                <!-- Surat Menyurat -->
                <a href="{{ route('surat-menyurat.index') }}"
                    class="flex items-center px-4 py-3 mx-2 my-1 rounded-lg transition-all duration-200 {{ request()->routeIs('surat-menyurat.index') ? 'bg-purple-50 text-purple-600' : 'text-gray-600 hover:bg-gray-50' }}">
                    <div
                        :class="sidebarOpen ? 'ml-0 p-2 bg-purple-100 rounded-lg' : '-ml-2.5 p-2 bg-purple-100 rounded-lg'">
                        <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen" class="ml-3 font-medium truncate max-w-[160px] text-left">Surat
                        Menyurat</span>
                </a>
            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>

            <!-- Berita & Agenda -->
            <div class="space-y-1">
                <button @click="toggleMenu('berita')"
                    :class="['w-full flex items-center px-4 py-3 mx-2 my-1 rounded-lg text-gray-600 hover:bg-gray-50 transition-all duration-200', activeMenu === 'berita' ? 'bg-gray-50' : '']">
                    <div
                        :class="sidebarOpen ? 'ml-0 p-2 bg-green-100 rounded-lg' : '-ml-2.5 p-2 bg-green-100 rounded-lg'">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2 2 0 00-2-2h-2" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen" class="ml-3 font-medium flex-1 truncate max-w-[160px] text-left">Berita &
                        Agenda</span>
                    <svg x-show="sidebarOpen" class="w-4 h-4 ml-2 transition-transform duration-300 flex-shrink-0"
                        :class="{'rotate-90': activeMenu === 'berita'}" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div x-show="activeMenu === 'berita'" x-collapse
                    class="space-y-1 pl-14 overflow-hidden transition-all duration-300">
                    <a href="{{ route('berita.index') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('berita.index') ? 'text-green-600 font-medium' : 'text-gray-500' }}">
                        Daftar Berita
                    </a>
                    <a href="{{ route('berita.create') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('berita.create') ? 'text-green-600 font-medium' : 'text-gray-500' }}">
                        Tambah Berita
                    </a>
                </div>
            </div>

            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>

            <!-- Perangkat Desa -->
            <div class="space-y-1">
                <button @click="toggleMenu('perangkat')"
                    :class="['w-full flex items-center px-4 py-3 mx-2 my-1 rounded-lg text-gray-600 hover:bg-gray-50 transition-all duration-200', activeMenu === 'perangkat' ? 'bg-gray-50' : '']">
                    <div
                        :class="sidebarOpen ? 'ml-0 p-2 bg-yellow-100 rounded-lg' : '-ml-2.5 p-2 bg-yellow-100 rounded-lg'">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen"
                        class="ml-3 font-medium flex-1 truncate max-w-[160px] text-left">Perangkat Desa</span>
                    <svg x-show="sidebarOpen" class="w-4 h-4 ml-2 transition-transform duration-300 flex-shrink-0"
                        :class="{'rotate-90': activeMenu === 'perangkat'}" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div x-show="activeMenu === 'perangkat'" x-collapse
                    class="space-y-1 pl-14 overflow-hidden transition-all duration-300">
                    <a href="{{ route('perangkat.show') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('perangkat.show') ? 'text-yellow-600 font-medium' : 'text-gray-500' }}">
                        Daftar Perangkat
                    </a>
                    <a href="{{ route('perangkat.create') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('perangkat.create') ? 'text-yellow-600 font-medium' : 'text-gray-500' }}">
                        Tambah Perangkat
                    </a>
                </div>
            </div>

            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>

            <!-- Aduan Masyarakat -->
            <div class="space-y-1">
                <button @click="toggleMenu('aduan')"
                    :class="['w-full flex items-center px-4 py-3 mx-2 my-1 rounded-lg text-gray-600 hover:bg-gray-50 transition-all duration-200', activeMenu === 'aduan' ? 'bg-gray-50' : '']">
                    <div :class="sidebarOpen ? 'ml-0 p-2 bg-red-100 rounded-lg' : '-ml-2.5 p-2 bg-red-100 rounded-lg'">
                        <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen" class="ml-3 font-medium flex-1 truncate max-w-[160px] text-left">Aduan
                        Masyarakat</span>
                    <svg x-show="sidebarOpen" class="w-4 h-4 ml-2 transition-transform duration-300 flex-shrink-0"
                        :class="{'rotate-90': activeMenu === 'aduan'}" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div x-show="activeMenu === 'aduan'" x-collapse
                    class="space-y-1 pl-14 overflow-hidden transition-all duration-300">
                    <a href="{{ route('kontak.index') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('kontak.index') ? 'text-red-600 font-medium' : 'text-gray-500' }}">
                        Lihat Aduan
                    </a>
                    <a href="#"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('kontak.destroy') ? 'text-red-600 font-medium' : 'text-gray-500' }}"
                        onclick="event.preventDefault(); document.getElementById('destroy-kontak-form').submit();">
                        Hapus Aduan
                    </a>
                    <form id="destroy-kontak-form" action="{{ route('kontak.destroy', 1) }}" method="POST"
                        class="hidden">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>

            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>

            <!-- Galeri -->
            <div class="space-y-1">
                <button @click="toggleMenu('galeri')"
                    :class="['w-full flex items-center px-4 py-3 mx-2 my-1 rounded-lg text-gray-600 hover:bg-gray-50 transition-all duration-200', activeMenu === 'galeri' ? 'bg-gray-50' : '']">
                    <div
                        :class="sidebarOpen ? 'ml-0 p-2 bg-pink-100 rounded-lg' : '-ml-2.5 p-2 bg-pink-100 rounded-lg'">
                        <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen"
                        class="ml-3 font-medium flex-1 truncate max-w-[160px] text-left">Galeri</span>
                    <svg x-show="sidebarOpen" class="w-4 h-4 ml-2 transition-transform duration-300 flex-shrink-0"
                        :class="{'rotate-90': activeMenu === 'galeri'}" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div x-show="activeMenu === 'galeri'" x-collapse
                    class="space-y-1 pl-14 overflow-hidden transition-all duration-300">
                    <a href="{{ route('galeri.index') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('galeri.index') ? 'text-pink-600 font-medium' : 'text-gray-500' }}">
                        Lihat Galeri
                    </a>
                    <a href="{{ route('galeri.create') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('galeri.create') ? 'text-pink-600 font-medium' : 'text-gray-500' }}">
                        Tambah Konten
                    </a>
                </div>
            </div>

            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>

            <!-- Layanan -->
            <div class="space-y-1">
                <button @click="toggleMenu('layanan')"
                    :class="['w-full flex items-center px-4 py-3 mx-2 my-1 rounded-lg text-gray-600 hover:bg-gray-50 transition-all duration-200', activeMenu === 'layanan' ? 'bg-gray-50' : '']">
                    <div
                        :class="sidebarOpen ? 'ml-0 p-2 bg-indigo-100 rounded-lg' : '-ml-2.5 p-2 bg-indigo-100 rounded-lg'">
                        <svg class="w-5 h-5 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <span x-show="sidebarOpen"
                        class="ml-3 font-medium flex-1 truncate max-w-[160px] text-left">Layanan</span>
                    <svg x-show="sidebarOpen" class="w-4 h-4 ml-2 transition-transform duration-300 flex-shrink-0"
                        :class="{'rotate-90': activeMenu === 'layanan'}" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>

                <div x-show="activeMenu === 'layanan'" x-collapse
                    class="space-y-1 pl-14 overflow-hidden transition-all duration-300">
                    <a href="{{ route('pendidikan.index') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('pendidikan.*') ? 'text-indigo-600 font-medium' : 'text-gray-500' }}">
                        Pendidikan
                    </a>
                    <a href="{{ route('kesehatan.index') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('kesehatan.*') ? 'text-indigo-600 font-medium' : 'text-gray-500' }}">
                        Kesehatan
                    </a>
                    <a href="{{ route('umkm.index') }}"
                        class="block px-4 py-2 text-sm rounded-lg transition-colors duration-200 hover:bg-gray-50 truncate {{ request()->routeIs('umkm.*') ? 'text-indigo-600 font-medium' : 'text-gray-500' }}">
                        UMKM
                    </a>
                </div>
            </div>

            <!-- Separator -->
            <div class="border-b border-gray-100 mx-4 my-1"></div>
        </div>

        <!-- Fixed User Menu -->
        <div class="w-full border-t border-gray-200 p-4 bg-white">
            <div class="flex items-center space-x-3">
                <img class="h-10 w-10 rounded-full object-cover border border-gray-200"
                    src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=random"
                    alt="{{ Auth::user()->name }}">
                <div x-show="sidebarOpen" class="flex-1 transition-opacity duration-300">
                    <h3 class="text-sm font-medium text-gray-900 truncate max-w-[160px]">{{ Auth::user()->name }}</h3>
                    <p class="text-xs text-gray-500 truncate max-w-[160px]">{{ Auth::user()->email }}</p>
                </div>
            </div>

            <div x-show="sidebarOpen" class="mt-4 space-y-2 transition-all duration-300">
                <a href="{{ route('profile.edit') }}"
                    class="flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md transition-colors duration-200 truncate">
                    <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Profile
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center px-4 py-2 text-sm text-gray-600 hover:bg-gray-50 rounded-md transition-colors duration-200 truncate">
                        <svg class="w-4 h-4 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        Log Out
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div :class="{'ml-64': sidebarOpen, 'ml-16': !sidebarOpen}" class="flex-1 min-h-screen transition-all duration-300">
        <!-- Top Navigation -->
        <div class="bg-white border-b border-gray-200 h-16 flex items-center px-4 sticky top-0 z-40">
            <button @click="open = !open" class="text-gray-500 hover:text-gray-700 md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Page Content -->
        <main class="p-6 bg-gray-50 min-h-[calc(100vh-4rem)]">
            {{ $slot ?? '' }}
        </main>
    </div>
</nav>