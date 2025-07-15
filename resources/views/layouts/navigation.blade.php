<nav x-data="{ open: false, beritaOpen: false, perangkatOpen: false, aduanOpen: false , suratOpen: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex items-center space-x-8">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links - Desktop -->
                <div class="hidden sm:flex sm:items-center sm:space-x-8">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="py-2">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <!-- Dropdown Berita -->
                    <div class="relative h-full flex items-center">
                        <button 
                            @click="beritaOpen = !beritaOpen; perangkatOpen = false; aduanOpen = false"
                            class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none h-full
                                   {{ request()->routeIs('berita.*') ? 'border-indigo-500 text-gray-900 dark:text-gray-100 focus:border-indigo-700' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700' }}"
                        >
                            {{ __('Berita') }}
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'transform rotate-180': beritaOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div 
                            x-show="beritaOpen"
                            @click.away="beritaOpen = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute top-full left-0 z-10 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg origin-top-left ring-1 ring-black ring-opacity-5 focus:outline-none"
                        >
                            <div class="py-1">
                                <x-dropdown-link :href="route('berita.index')">
                                    {{ __('Daftar Berita') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('berita.create')">
                                    {{ __('Tambah Berita') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="#">
                                    {{ __('Detail Berita') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                    <!-- Menu Perangkat Desa -->
                    <div class="relative h-full flex items-center">
                        <button 
                            @click="perangkatOpen = !perangkatOpen; beritaOpen = false; aduanOpen = false"
                            class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none h-full
                                   {{ request()->routeIs('berita.*') ? 'border-indigo-500 text-gray-900 dark:text-gray-100 focus:border-indigo-700' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700' }}"
                        >
                            {{ __('Perangkat Desa') }}
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'transform rotate-180': perangkatOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div 
                            x-show="perangkatOpen"
                            @click.away="perangkatOpen = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute top-full left-0 z-10 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg origin-top-left ring-1 ring-black ring-opacity-5 focus:outline-none"
                        >
                            <div class="py-1">
                                <x-dropdown-link :href="route('berita.index')">
                                    {{ __('Daftar Perangkat') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('berita.create')">
                                    {{ __('Tambah Perangkat') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="#">
                                    {{ __('Detail Perangkat') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                    <!-- Dropdown Aduan Masyarakat -->
                    <div class="relative h-full flex items-center">
                        <button 
                            @click="aduanOpen = !aduanOpen; beritaOpen = false; perangkatOpen = false"
                            class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none h-full
                                   {{ request()->routeIs('kontak.*') ? 'border-indigo-500 text-gray-900 dark:text-gray-100 focus:border-indigo-700' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700' }}"
                        >
                            {{ __('Aduan Masyarakat') }}
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'transform rotate-180': aduanOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div 
                            x-show="aduanOpen"
                            @click.away="aduanOpen = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute top-full left-0 z-10 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg origin-top-left ring-1 ring-black ring-opacity-5 focus:outline-none"
                        >
                            <div class="py-1">
                                <x-dropdown-link :href="route('kontak.index')">
                                    {{ __('Lihat Aduan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('kontak.destroy', 1)" onclick="event.preventDefault(); document.getElementById('destroy-kontak-form').submit();">
                                    {{ __('Hapus Aduan') }}
                                </x-dropdown-link>
                                <form id="destroy-kontak-form" action="{{ route('kontak.destroy', 1) }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Dropdown Surat Menyurat --}}
                    <div class="relative h-full flex items-center">
                        <button 
                            @click="suratOpen = !suratOpen; beritaOpen = false; perangkatOpen = false; aduanOpen = false"
                            class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium leading-5 transition duration-150 ease-in-out focus:outline-none h-full
                                {{ request()->routeIs('surat.*') ? 'border-indigo-500 text-gray-900 dark:text-gray-100 focus:border-indigo-700' : 'border-transparent text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300 dark:hover:border-gray-700 focus:text-gray-700 dark:focus:text-gray-300 focus:border-gray-300 dark:focus:border-gray-700' }}"
                        >
                            {{ __('Surat Menyurat') }}
                            <svg class="ml-1 h-4 w-4 transition-transform duration-200" :class="{ 'transform rotate-180': suratOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div 
                            x-show="suratOpen"
                            @click.away="suratOpen = false"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 scale-95"
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="opacity-100 scale-100"
                            x-transition:leave-end="opacity-0 scale-95"
                            class="absolute top-full left-0 z-10 mt-2 w-48 bg-white dark:bg-gray-800 rounded-md shadow-lg origin-top-left ring-1 ring-black ring-opacity-5 focus:outline-none"
                        >
                            <div class="py-1">
                                <x-dropdown-link :href="route('surat-menyurat.index')">
                                    {{ __('Daftar Surat') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('surat-menyurat.show', 1)">
                                    {{ __('Lihat surat') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <!-- Menu Berita Mobile -->
            <div class="px-4">
                <button 
                    @click="beritaOpen = !beritaOpen; perangkatOpen = false"
                    class="w-full flex justify-between items-center px-3 py-2 text-base font-medium rounded-md transition duration-150 ease-in-out
                           {{ request()->routeIs('berita.*') ? 'bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100' : 'text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }}"
                >
                    <span>{{ __('Berita') }}</span>
                    <svg class="h-4 w-4 transition-transform duration-200" :class="{ 'transform rotate-180': beritaOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="beritaOpen" class="pl-4 space-y-1">
                    <x-responsive-nav-link :href="route('berita.index')" :active="request()->routeIs('berita.index')" class="pl-4">
                        {{ __('Daftar Berita') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('berita.create')" :active="request()->routeIs('berita.create')" class="pl-4">
                        {{ __('Tambah Berita') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#" class="pl-4">
                        {{ __('Detail Berita') }}
                    </x-responsive-nav-link>
                </div>
            </div>
            
            <!-- Menu Perangkat Desa Mobile -->
            <div class="px-4">
                <button 
                    @click="perangkatOpen = !perangkatOpen; beritaOpen = false"
                    class="w-full flex justify-between items-center px-3 py-2 text-base font-medium rounded-md transition duration-150 ease-in-out
                           {{ request()->routeIs('berita.*') ? 'bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100' : 'text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }}"
                >
                    <span>{{ __('Perangkat Desa') }}</span>
                    <svg class="h-4 w-4 transition-transform duration-200" :class="{ 'transform rotate-180': perangkatOpen }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="perangkatOpen" class="pl-4 space-y-1">
                    <x-responsive-nav-link :href="route('berita.index')" :active="request()->routeIs('berita.index')" class="pl-4">
                        {{ __('Daftar Perangkat') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('berita.create')" :active="request()->routeIs('berita.create')" class="pl-4">
                        {{ __('Tambah Perangkat') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link href="#" class="pl-4">
                        {{ __('Detail Perangkat') }}
                    </x-responsive-nav-link>
                </div>
            </div>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>