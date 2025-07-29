<x-layout>
        <x-slot name="header">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Profil Desa</h1>
        </x-slot>

        <div class="bg-white overflow-hidden shadow rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <div class="prose max-w-none">
                    <h2 class="text-2xl font-semibold text-gray-800">Selamat Datang di Profil Desa Kami</h2>
                    <p class="mt-4 text-gray-600">
                        Desa kami merupakan salah satu desa yang terletak di daerah yang subur dan asri. 
                        Dengan masyarakat yang ramah dan budaya yang kaya, kami berkomitmen untuk 
                        membangun desa yang maju dan sejahtera.
                    </p>
                    
                    <div class="mt-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                        <a href="{{ route('profil-desa.sejarah') }}" class="group block rounded-lg border border-gray-200 p-6 hover:bg-gray-50">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-indigo-600">Sejarah Desa</h3>
                            <p class="mt-2 text-sm text-gray-500">Pelajari sejarah terbentuknya desa kami</p>
                        </a>
                        
                        <a href="{{ route('profil-desa.visi-misi') }}" class="group block rounded-lg border border-gray-200 p-6 hover:bg-gray-50">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-indigo-600">Visi & Misi</h3>
                            <p class="mt-2 text-sm text-gray-500">Tujuan dan arah pembangunan desa kami</p>
                        </a>
                        
                        <a href="{{ route('profil-desa.struktur-organisasi') }}" class="group block rounded-lg border border-gray-200 p-6 hover:bg-gray-50">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-indigo-600">Struktur Organisasi</h3>
                            <p class="mt-2 text-sm text-gray-500">Struktur pemerintahan desa</p>
                        </a>
                        
                        <a href="{{ route('profil-desa.perangkat-desa') }}" class="group block rounded-lg border border-gray-200 p-6 hover:bg-gray-50">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-indigo-600">Perangkat Desa</h3>
                            <p class="mt-2 text-sm text-gray-500">Kenali para perangkat desa kami</p>
                        </a>
                        
                        <a href="{{ route('profil-desa.bumdes') }}" class="group block rounded-lg border border-gray-200 p-6 hover:bg-gray-50">
                            <h3 class="text-lg font-medium text-gray-900 group-hover:text-indigo-600">BUMDes</h3>
                            <p class="mt-2 text-sm text-gray-500">Badan Usaha Milik Desa</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-layout>