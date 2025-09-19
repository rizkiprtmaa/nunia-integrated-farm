<?php

use Livewire\Volt\Component;

new class extends Component {
    public $testimonials = [
        [
            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
            'name' => 'Sarah Wulandari',
            'instansi' => 'Kepala Sekolah SDIT Al-Hikmah Jakarta',
            'text' => 'Wisata edukasi ke Nunia Farm sangat menginspirasi siswa-siswi kami. Mereka belajar langsung tentang pertanian organik dan pentingnya menjaga lingkungan.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face',
            'name' => 'Dr. Budi Santoso',
            'instansi' => 'Dosen Fakultas Pertanian UNPAD',
            'text' => 'Sebagai akademisi, saya sangat mengapresiasi praktik pertanian berkelanjutan yang diterapkan di Nunia Farm.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face',
            'name' => 'Siti Nurhaliza',
            'instansi' => 'Ketua Kelompok Tani Desa Sukamaju',
            'text' => 'Pelatihan pertanian organik di Nunia sangat praktis dan mudah dipahami. Hasilnya sangat memuaskan.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop&crop=face',
            'name' => 'Ahmad Hidayat',
            'instansi' => 'Pengurus Masjid Al-Ikhlas Ciamis',
            'text' => 'Layanan aqiqah dari Nunia Farm sangat profesional dan amanah. Daging kambing organiknya berkualitas tinggi.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?w=100&h=100&fit=crop&crop=face',
            'name' => 'Prof. Dewi Sartika',
            'instansi' => 'Universitas Galuh Ciamis',
            'text' => 'Kerjasama dengan Nunia Farm dalam program KKN mahasiswa sangat bermanfaat untuk pengalaman agribisnis.',
        ],
        [
            'avatar' => 'https://images.unsplash.com/photo-1517841905240-472988babdf9?w=100&h=100&fit=crop&crop=face',
            'name' => 'Chef Rina Marlina',
            'instansi' => 'Executive Chef Hotel Santika Cirebon',
            'text' => 'Kualitas sayuran organik dari Nunia Farm luar biasa segar dan natural. Sangat mendukung kreasi kuliner premium.',
        ],
    ];

    public function render(): mixed
    {
        return view('livewire.galery-testimoni-section.testimonial');
    }
}; ?>

<div>
    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-white py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Header Section -->
            <div class="mb-12 text-center">
                <span class="font-quicksand text-sm font-medium uppercase tracking-wide text-[#416910]">
                    Testimonial
                </span>
                <h2 class="font-marmelad mb-4 mt-2 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Apa Kata Mereka Tentang Nunia
                </h2>
                <p class="font-quicksand mx-auto max-w-2xl text-lg text-gray-600">
                    Dengarkan pengalaman langsung dari pelanggan, mitra, dan peserta program kami yang telah merasakan
                    manfaat dari Nunia Integrated Farm.
                </p>
            </div>

            <!-- First Row - Left to Right -->
            <div class="mb-8">
                <div class="swiper testimoni-swiper-top" style="overflow: hidden;">
                    <div class="swiper-wrapper">
                        @foreach ($testimonials as $testimonial)
                            <div class="swiper-slide">
                                <div
                                    class="flex h-80 flex-col rounded-3xl bg-[#416910] p-6 shadow-md transition-all duration-300 hover:scale-105 hover:shadow-lg">
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
                                        <p class="font-quicksand text-sm leading-relaxed text-gray-100">
                                            "{{ $testimonial['text'] }}"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Second Row - Right to Left -->
            <div>
                <div class="swiper testimoni-swiper-bottom" style="overflow: hidden;">
                    <div class="swiper-wrapper">
                        @foreach (array_reverse($testimonials) as $testimonial)
                            <div class="swiper-slide">
                                <div
                                    class="flex h-80 flex-col rounded-3xl bg-[#416910] p-6 shadow-md transition-all duration-300 hover:scale-105 hover:shadow-lg">
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
                                        <p class="font-quicksand text-sm leading-relaxed text-gray-100">
                                            "{{ $testimonial['text'] }}"
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
