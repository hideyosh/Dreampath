<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body>
    <nav class="flex items-center justify-between px-6 py-6 shadow-md sm:px-8 sm:py-4 lg:px-12 lg:py-4" aria-label="Global">
        <div class="flex items-center lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <img class="h-15 w-auto" src="{{ asset('images/DreamPath.png') }}" alt="logo">
            </a>
            <h1 class="hidden text-transparent bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text sm:inline sm:ms-5 sm:font-bold sm:text-2xl">Dream<span class="text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">Path</span> </h1>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-base/6 font-semibold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">Product</a>
            <a href="#" class="text-base/6 font-semibold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">Features</a>
            <a href="#" class="text-base/6 font-semibold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">Marketplace</a>
            <a href="#" class="text-base/6 font-semibold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">Company</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ route('login') }}" class="inline-block text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-sm hover:shadow-lg transition-shadow duration-300 font-medium rounded-full text-base px-9 py-3 text-center">
                Masuk
            </a>
        </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    {{-- <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
            </div>
            <div class="py-6">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
            </div>
            </div>
        </div>
        </div>
    </div> --}}
    <div class="px-6 sm:px-12 py-17">
        <div class="grid grid-cols-1 sm:grid-cols-2">
            <div>
               <h1 class="text-base sm:text-3xl font-bold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text max-w-lg">
                    Konsultasi Karir yang Tepat untuk Masa Depan Cerah
                </h1>
                <p class="font-normal text-sm sm:text-base max-w-lg my-4">
                    Berkonsultasi di DreamPath akan membantumu untuk menentukan karir dan jurusan yang tepat sesuai dengan minat dan potensimu
                </p>
                <a href="{{ route('login') }}" class="inline-block text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-sm hover:shadow-lg transition-shadow duration-300 font-medium rounded-[20px] text-sm sm:text-base px-5 py-2 sm:px-9 sm:py-3 text-center">
                    Mulai Konsultasi Sekarang
                </a>
            </div>
            <div class="hidden sm:block rounded border-2 bg-blue-200"></div>
        </div>
    </div>

    <div class="px-6 sm:px-12">
        <div class="bg-[#F2F8FF] rounded-2xl px-6 py-32 sm:px-12 sm:grid grid-cols-2 shadow-sm">
            <div class="hidden sm:inline-block">
                <img src="" alt="" class="rounded-full border-2 w-3/12 h-8/12">
            </div>
            <div>
                <h1 class="text-base sm:text-3xl font-bold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text max-w-lg">
                    Mentor Profesional dan Berpengalaman
                </h1>
                <p class="font-normal text-sm sm:text-base max-w-lg sm:max-w-sm my-4">
                    DreamPath memiliki mentor profesional dari akademisi yang siap membantu kamu
                </p>
                <a href="{{ route('login') }}" class="inline-block text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-sm hover:shadow-lg transition-shadow duration-300 font-medium rounded-[20px] text-sm sm:text-base px-5 py-2 sm:px-9 sm:py-3 text-center">
                    Temukan Mentor Sekarang
                </a>
             </div>
        </div>
    </div>

    <div class="px-6 sm:px-12 py-16">
        <div class="flex flex-col items-center justify-center">
            <h1 class="text-base sm:text-3xl font-bold text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">
                Pilihan Utama Konsultasi Karir
            </h1>
            <p class="font-normal text-sm sm:text-base max-w-lg text-center mt-4 mb-10">
                Beberapa alasan mengapa konsultasi di DreamPath menjadi pilihan utama dalam konsultasi karir dan jurusan
            </p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-7 sm:gap-3">
            <div class="border-2 rounded-xl border-purple-600 p-12 mx-10 text-center shadow-md hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/DreamPath.png') }}" class="size-36 mx-auto mb-4 " alt="">
                <h2 class="text-lg font-semibold tracking-wide text-[#1D164C]">Konsultasi eksklusif dengan waktu yang fleksibel</h2>
                <hr class="border-t-2 border-purple-500 my-6">
                <p class="text-base font-normal text-[#4E4E4E]">Nikmati layanan konsultasi eksklusif  dengan waktu yang fleksibel sesuai kebutuhan kamu</p>
            </div>
            <div class="border-2 rounded-xl border-purple-600 p-12 mx-10 text-center shadow-md hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/DreamPath.png') }}" class="size-36 mx-auto mb-4" alt="">
                <h2 class="text-lg font-semibold tracking-wide text-[#1D164C]">Bebas Memilih Mentor Sesuai Kebutuhan Kamu</h2>
                <hr class="border-t-2 border-purple-500 my-6">
                <p class="text-base font-normal text-[#4E4E4E]">Temukan mentor terbaik yang sesuai dengan kebutuhan dan minatmu.</p>
            </div>
            <div class="border-2 rounded-xl border-purple-600 p-12 mx-10 text-center shadow-md hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/DreamPath.png') }}" class="size-36 mx-auto mb-4" alt="">
                <h2 class="text-lg font-semibold tracking-wide text-[#1D164C]">Mentor yang Profesional dan Memahami Peluang Lapangan Pekerjaan</h2>
                <hr class="border-t-2 border-purple-500 my-6">
                <p class="text-base font-normal text-[#4E4E4E]">Belajar langsung dari mentor profesional yang memiliki keahlian di bidangnya dan pemahaman mendalam tentang peluang karier di dunia kerja.</p>
            </div>
        </div>
    </div>
    <footer>
        <div class="px-6 sm:px-12 py-16 bg-[#F2F8FF]">
            <div class="grid grid-rows-1">
                <div class="grid grid-cols-5 border-b-2 pb-12 border-purple-500">
                    <div class="col-span-2">
                        <div class="flex items-center">
                            <a href="#" class="-m-1.5 p-1.5">
                                <img class="h-15 w-auto" src="{{ asset('images/DreamPath.png') }}" alt="logo">
                            </a>
                            <h1 class="hidden text-transparent bg-gradient-to-r from-pink-500 to-purple-500 bg-clip-text sm:inline sm:ms-5 sm:font-bold sm:text-2xl">Dream<span class="text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text">Path</span></h1>
                        </div>
                        <p class="font-normal text-base max-w-md">DreamPath adalah platform penyedia konsultasi untuk  kebutuhan perencanaan karier.</p>
                        <div class="flex"></div>
                    </div>
                    <div class="flex-row items-center">
                        <h1 class="font-bold text-lg text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text mb-1.5">Kontak Kami</h1>
                        <a href="#" class="block text-[#1D164C] font-medium text-base mb-1.5 hover:underline">+62 877 2894 410</a>
                        <a href="#" class="block text-[#1D164C] font-medium text-base mb-1.5 hover:underline">dreampath@gmail.com</a>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-lg text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text mb-1.5">Tentang DreamPath</h1>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">Tentang DreamPath</p>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">Syarat dan Ketentuan</p>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">Kebijakan Privasi</p>
                    </div>
                    <div class="">
                        <h1 class="font-bold text-lg text-transparent bg-gradient-to-r from-purple-600 to-blue-500 bg-clip-text mb-1.5">Sosial</h1>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">Instagram</p>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">Twitter</p>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">LinkedIn</p>
                        <p class="text-[#1D164C] font-medium text-base mb-1.5">Facebook</p>
                    </div>
                </div>
                <div class="text-center pt-10">
                    <h1>© Copyright 2025 DreamPath. All Rights Reserved.</h1>
                </div>
            </div>
        </div>
    </footer>

  </body>
</html>
