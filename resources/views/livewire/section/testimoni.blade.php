<?php

use Livewire\Volt\Component;

new class extends Component {
    public $testimonials = [
        [
            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
            'name' => 'Sarah Wulandari',
            'instansi' => 'Kepala Sekolah SDIT Al-Hikmah Jakarta',
            'text' => 'Wisata edukasi ke Nunia Farm sangat menginspirasi siswa-siswi kami. Mereka belajar langsung tentang pertanian organik dan pentingnya menjaga lingkungan. Program ini sangat mendukung kurikulum pendidikan karakter berbasis alam.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
            'name' => 'Dr. Budi Santoso',
            'instansi' => 'Dosen Fakultas Pertanian UNPAD',
            'text' => 'Sebagai akademisi, saya sangat mengapresiasi praktik pertanian berkelanjutan yang diterapkan di Nunia Farm. Metode yang digunakan bisa menjadi contoh untuk pengembangan pertanian organik di Indonesia.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
            'name' => 'Siti Nurhaliza',
            'instansi' => 'Ketua Kelompok Tani Desa Sukamaju',
            'text' => 'Pelatihan pertanian organik di Nunia sangat praktis dan mudah dipahami. Sekarang kelompok tani kami sudah mulai menerapkan metode organik dan hasilnya sangat memuaskan. Terima kasih Nunia Farm!',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
            'name' => 'Ahmad Hidayat',
            'instansi' => 'Pengurus Masjid Al-Ikhlas Ciamis',
            'text' => 'Layanan aqiqah dari Nunia Farm sangat profesional dan amanah. Daging kambing organiknya berkualitas tinggi dan proses penyembelihannya sesuai syariat. Sangat recommended untuk acara keagamaan.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=100&h=100&fit=crop&crop=face',
            'name' => 'Prof. Dewi Sartika',
            'instansi' => 'Universitas Galuh Ciamis',
            'text' => 'Kerjasama dengan Nunia Farm dalam program KKN mahasiswa sangat bermanfaat. Mahasiswa mendapat pengalaman langsung tentang agribisnis berkelanjutan dan community development yang sangat aplikatif.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100&h=100&fit=crop&crop=face',
            'name' => 'Chef Rina Marlina',
            'instansi' => 'Executive Chef Hotel Santika Cirebon',
            'text' => 'Kualitas sayuran organik dari Nunia Farm luar biasa segar dan natural. Rasa autentiknya sangat mendukung kreasi kuliner premium kami. Konsistensi kualitas dan pengiriman selalu tepat waktu.',
        ],
    ];

    public function render(): mixed
    {
        return view('livewire.section.testimoni');
    }
}; ?>

<section class="bg-white py-12 sm:py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-12 text-center">
            <h2 class="font-marmelad mb-4 text-2xl font-bold text-[#416910] sm:text-3xl">
                Apa Kata Mereka
            </h2>
            <p class="font-quicksand mx-auto mb-8 max-w-2xl text-sm text-gray-600 sm:text-base">
                Cerita pengalaman pelanggan tentang Wisata, Produk, dan Layanan Nunia
            </p>
        </div>

        <!-- Testimonials Swiper -->
        <div class="swiper testimoni-swiper">
            <div class="swiper-wrapper">
                @foreach ($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="flex h-80 flex-col rounded-3xl bg-[#416910] p-6 shadow-md">
                            <!-- Header Area -->
                            <div class="mb-4 flex items-start">
                                <!-- Avatar -->
                                <div class="mr-4 h-14 w-14 flex-shrink-0 overflow-hidden rounded-full">
                                    <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}"
                                        class="h-full w-full object-cover" loading="lazy">
                                </div>

                                <!-- Name and Institution -->
                                <div class="flex-grow">
                                    <h4 class="font-marmelad mb-1 text-lg font-bold text-white">
                                        {{ $testimonial['name'] }}
                                    </h4>
                                    <p class="font-quicksand text-sm italic text-gray-300">
                                        {{ $testimonial['instansi'] }}
                                    </p>
                                </div>
                            </div>

                            <!-- Content Area -->
                            <div class="mt-4 flex-grow">
                                <p class="font-quicksand text-xs leading-relaxed text-gray-100 sm:text-base">
                                    "{{ $testimonial['text'] }}"
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Navigation Controls -->
        <div class="mt-8 flex items-center justify-center space-x-4">
            <!-- Previous Button -->
            <button
                class="swiper-button-prev-custom flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition-colors duration-300 hover:bg-white/20">
                <svg class="text-primary h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Pagination Fraction -->
            <div class="flex items-center">
                <span class="swiper-pagination-current font-marmelad text-lg font-bold text-[#416910]">1</span>
                <span class="mx-2 text-gray-400">/</span>
                <span
                    class="swiper-pagination-total font-marmelad text-lg font-bold text-gray-400">{{ count($testimonials) }}</span>
            </div>

            <!-- Next Button -->
            <button
                class="swiper-button-next-custom flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition-colors duration-300 hover:bg-white/20">
                <svg class="text-primary h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</section>
