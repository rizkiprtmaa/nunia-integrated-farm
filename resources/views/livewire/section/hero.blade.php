<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <!-- Hero Section with Swiper Background -->
    <section class="relative min-h-screen overflow-hidden" style="font-family: 'Syne', sans-serif;">
        <!-- Announcement Bar -->
        <x-announcement-bar />

        <!-- Swiper Container -->
        <div class="hero-swiper swiper absolute inset-0 h-full w-full">
            <div class="swiper-wrapper" data-swiper-autoplay="2000">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1920&h=1080&fit=crop"
                        alt="Farm landscape" class="h-[60vh] w-full object-cover sm:h-screen">
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?w=1920&h=1080&fit=crop"
                        alt="Green fields" class="h-[60vh] w-full object-cover sm:h-screen">
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=1920&h=1080&fit=crop"
                        alt="Agriculture" class="h-[60vh] w-full object-cover sm:h-screen">
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <img src="https://images.unsplash.com/photo-1530587191325-3db32d826c18?w=1920&h=1080&fit=crop"
                        alt="Organic farming" class="h-[60vh] w-full object-cover sm:h-screen">
                </div>
            </div>

        </div>

        <!-- Dark Gradient Overlay -->
        <div class="absolute inset-0 z-10 bg-gradient-to-b from-black/40 via-black/45 to-black/50"></div>

        <!-- Hero Content -->
        <div class="absolute inset-0 z-20 flex flex-col items-center justify-center px-4 sm:px-6 lg:px-8">
            <!-- Header Text -->
            <h1
                class="font-marmelad mb-6 text-center text-xl font-bold leading-tight text-white sm:text-4xl lg:text-xl xl:text-4xl">
                Tenang dan Nyaman <br />Dengan Sistem Pertanian Nunia
            </h1>

            <!-- Subheader Text -->
            <p
                class="font-quicksand mx-auto mb-12 max-w-3xl text-center text-sm font-extralight leading-relaxed text-white sm:text-xl lg:text-base">
                Sistem Pertanian Nunia adalah sebuah tata kelola dalam pertanian dan peternakan dengan menggunakan
                bahan-bahan alami. Sehingga semua produk yang dihasilkan merupakan produk alami dan sehat.
            </p>

            <!-- Service Cards Grid -->
            <div class="mx-auto grid max-w-6xl grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-5">
                <!-- Qurban Card -->
                <div
                    class="rounded-xl bg-white p-4 text-center shadow-md transition-transform duration-300 hover:scale-105 sm:p-6">
                    <!-- Icon/Image Placeholder -->
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center sm:h-16 sm:w-16">
                        <img src="{{ asset('images/card-qurban.png') }}" alt="">
                    </div>

                    <!-- Title -->
                    <h3 class="font-marmelad mb-3 text-xs font-bold text-gray-800 sm:text-base">Qurban</h3>

                    <!-- CTA Button -->
                    <button
                        class="w-full cursor-pointer rounded-full border-2 border-[#416910] px-3 py-2 text-xs font-medium text-[#416910] transition-colors duration-200 hover:bg-[#416910] hover:text-white sm:px-4 sm:text-sm">
                        Lihat Detail
                    </button>
                </div>

                <!-- Aqiqah Card -->
                <div
                    class="rounded-xl bg-white p-4 text-center shadow-md transition-transform duration-300 hover:scale-105 sm:p-6">
                    <!-- Icon/Image Placeholder -->
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center sm:h-16 sm:w-16">
                        <img src="{{ asset('images/card-aqiqah.svg') }}" alt="">
                    </div>

                    <!-- Title -->
                    <h3 class="font-marmelad mb-3 text-xs font-bold text-gray-800 sm:text-base">Aqiqah</h3>

                    <!-- CTA Button -->
                    <button
                        class="w-full cursor-pointer rounded-full border-2 border-[#416910] px-3 py-2 text-xs font-medium text-[#416910] transition-colors duration-200 hover:bg-[#416910] hover:text-white sm:px-4 sm:text-sm">
                        Lihat Detail
                    </button>
                </div>

                <!-- Wisata Card -->
                <div
                    class="rounded-xl bg-white p-4 text-center shadow-md transition-transform duration-300 hover:scale-105 sm:p-6">
                    <!-- Icon/Image Placeholder -->
                    <div class="h-15 w-15 mx-auto mb-4 flex items-center justify-center sm:h-16 sm:w-16">
                        <img src="{{ asset('images/card-wisata.svg') }}" alt="">
                    </div>

                    <!-- Title -->
                    <h3 class="font-marmelad mb-3 text-xs font-bold text-gray-800 sm:text-base">Wisata</h3>

                    <!-- CTA Button -->
                    <button
                        class="w-full cursor-pointer rounded-full border-2 border-[#416910] px-3 py-2 text-xs font-medium text-[#416910] transition-colors duration-200 hover:bg-[#416910] hover:text-white sm:px-4 sm:text-sm">
                        Lihat Detail
                    </button>
                </div>

                <!-- Produk Card -->
                <div
                    class="rounded-xl bg-white p-4 text-center shadow-md transition-transform duration-300 hover:scale-105 sm:p-6">
                    <!-- Icon/Image Placeholder -->
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center sm:h-16 sm:w-16">
                        <img src="{{ asset('images/card-produk.svg') }}" alt="">
                    </div>

                    <!-- Title -->
                    <h3 class="font-marmelad mb-3 text-xs font-bold text-gray-800 sm:text-base">Produk</h3>

                    <!-- CTA Button -->
                    <button
                        class="w-full cursor-pointer rounded-full border-2 border-[#416910] px-3 py-2 text-xs font-medium text-[#416910] transition-colors duration-200 hover:bg-[#416910] hover:text-white sm:px-4 sm:text-sm">
                        Pilih Produk
                    </button>
                </div>

                <!-- Nunia Class Card -->
                <div
                    class="col-span-2 rounded-xl bg-white p-4 text-center shadow-md transition-transform duration-300 hover:scale-105 sm:p-6 lg:col-span-1">
                    <!-- Icon/Image Placeholder -->
                    <div class="mx-auto mb-4 flex h-12 w-12 items-center justify-center sm:h-16 sm:w-16">
                        <img src="{{ asset('images/card-nunia-class.png') }}" alt="">
                    </div>

                    <!-- Title -->
                    <h3 class="font-marmelad mb-3 text-xs font-bold text-gray-800 sm:text-base">Nunia Class</h3>

                    <!-- CTA Button -->
                    <button
                        class="w-full cursor-pointer rounded-full border-2 border-[#416910] px-3 py-2 text-xs font-medium text-[#416910] transition-colors duration-200 hover:bg-[#416910] hover:text-white sm:px-4 sm:text-sm">
                        Ikuti Kelas
                    </button>
                </div>
            </div>
        </div>
    </section>
</div>
