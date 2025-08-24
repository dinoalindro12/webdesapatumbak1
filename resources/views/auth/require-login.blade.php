<x-layout title="Login Required">
    <div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 bg-white p-8 rounded-lg shadow-md">
            <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                    Akses Terbatas
                </h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    {{ $message }}
                </p>
            </div>

            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ url('/') }}"
                    class="w-1/2 flex justify-center py-2 px-4 border border-gray-300 rounded-md text-gray-700 bg-white hover:bg-gray-50">
                    Kembali ke Beranda
                </a>
                <a href="{{ route('login', ['redirect' => $route]) }}"
                    class="w-1/2 flex justify-center py-2 px-4 border border-transparent rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                    Login
                </a>
            </div>
        </div>
    </div>
</x-layout>