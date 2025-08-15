<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-gray-50 to-blue-50">
        <!-- Enhanced Back Button -->
        <a href="{{ url('/') }}" class="absolute top-6 left-6 p-3 rounded-full bg-white/80 backdrop-blur-sm shadow-sm hover:shadow transition-all duration-300 group">
            <svg class="w-5 h-5 text-gray-600 group-hover:text-blue-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span class="sr-only">Kembali</span>
        </a>

        <!-- Minimalist Logo
        <div class="mb-10 mt-6">
            <a href="{{ url('/') }}" class="flex items-center justify-center">
                <x-application-logo class="w-14 h-14 text-blue-600" />
            </a>
        </div> -->

        <!-- Elevated Card -->
        <div class="w-full sm:max-w-md px-6 py-10 bg-white/95 backdrop-blur-sm rounded-2xl shadow-xl border border-gray-100">
            <x-auth-session-status class="mb-6 text-sm p-3 bg-blue-50 rounded-lg" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h1 class="text-2xl font-sans font-medium text-gray-800 mb-8 text-center">Masuk ke Admin Panel</h1>

                <!-- Email/Username Field -->
                <div class="mb-6">
                    <x-input-label for="user_cred" :value="__('Email atau Username')" class="mb-2 font-medium text-gray-700" />
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <x-text-input 
                            id="user_cred" 
                            class="block w-full pl-10 border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 rounded-xl py-3 shadow-sm transition duration-200"
                            type="text" 
                            name="user_cred" 
                            :value="old('user_cred')" 
                            required 
                            autofocus 
                            autocomplete="username"
                            placeholder="Masukkan email atau username"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('user_cred')" class="mt-2 text-red-600 text-sm" />
                </div>

                <!-- Password Field -->
                <div class="mb-6">
                    <div class="flex justify-between items-center mb-2">
                        <x-input-label for="password" :value="__('Password')" class="font-medium text-gray-700" />
                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-500 hover:text-blue-700 transition duration-200 font-medium" href="{{ route('password.request') }}">
                                {{ __('Lupa password?') }}
                            </a>
                        @endif
                    </div>
                    
                    <div class="relative">
                        <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        <x-text-input 
                            id="password" 
                            class="block w-full pl-10 border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 rounded-xl py-3 shadow-sm transition duration-200"
                            type="password"
                            name="password"
                            required 
                            autocomplete="current-password"
                            placeholder="••••••••"
                        />
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center mb-8">
                    <input 
                        id="remember_me" 
                        type="checkbox" 
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring-2 focus:ring-blue-100 focus:ring-opacity-50 transition duration-200"
                        name="remember"
                    >
                    <label for="remember_me" class="ml-3 text-sm text-gray-600">
                        {{ __('Ingat saya') }}
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="flex flex-col space-y-6">
                    <x-primary-button class="w-full py-3.5 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 focus:ring-2 focus:ring-blue-100 rounded-xl shadow-sm transition-all duration-300 transform hover:-translate-y-0.5">
                        {{ __('Masuk') }}
                        <svg class="ml-2 -mr-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                    </x-primary-button>
                    
                    <div class="text-center text-sm text-gray-600 pt-4">
                        Belum punya akun? 
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:text-blue-800 transition duration-200 ml-1">
                                {{ __('Daftar') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Footer -->
        <div class="mt-10 text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</x-guest-layout>