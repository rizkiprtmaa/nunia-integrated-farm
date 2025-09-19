<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        // Sample promotion data - replace with actual data from database
        $highlightPromo = [
            'id' => 1,
            'title' => 'Paket Wisata Edukasi Keluarga',
            'description' => 'Nikmati pengalaman belajar yang menyenangkan bersama keluarga di Nunia Integrated Farm. Paket ini termasuk tour kebun, workshop berkebun organik, dan makan siang dengan menu farm-to-table.',
            'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'original_price' => 250000,
            'discounted_price' => 199000,
            'discount_percentage' => 20,
            'valid_until' => '2024-04-30',
            'category' => 'Agritourism',
        ];

        $promos = [
            [
                'id' => 2,
                'title' => 'Paket Sayuran Organik Mingguan',
                'description' => 'Dapatkan sayuran segar organik setiap minggu langsung dari kebun kami. Paket berisi 5kg sayuran campuran berkualitas tinggi.',
                'image' => 'https://images.unsplash.com/photo-1540420773420-3366772f4999?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'original_price' => 150000,
                'discounted_price' => 120000,
                'discount_percentage' => 20,
                'badge' => 'Diskon 20%',
                'valid_until' => '2024-05-15',
                'category' => 'Produk Organik',
            ],
            [
                'id' => 3,
                'title' => 'Workshop Berkebun untuk Pemula',
                'description' => 'Belajar teknik berkebun organik dari ahli kami. Termasuk bibit, alat berkebun dasar, dan panduan lengkap untuk memulai kebun di rumah.',
                'image' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'original_price' => 300000,
                'discounted_price' => 225000,
                'discount_percentage' => 25,
                'badge' => 'Diskon 25%',
                'valid_until' => '2024-04-20',
                'category' => 'Workshop',
            ],
            [
                'id' => 4,
                'title' => 'Paket Kompos Organik Premium',
                'description' => 'Kompos organik berkualitas tinggi untuk meningkatkan kesuburan tanah. Terbuat dari bahan organik pilihan yang telah difermentasi sempurna.',
                'image' => 'https://images.unsplash.com/photo-1586771107445-d3ca888129ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'original_price' => 80000,
                'discounted_price' => 64000,
                'discount_percentage' => 20,
                'badge' => 'Diskon 20%',
                'valid_until' => '2024-06-30',
                'category' => 'Pupuk Organik',
            ],
            [
                'id' => 5,
                'title' => 'Paket Benih Sayuran Organik',
                'description' => 'Koleksi lengkap benih sayuran organik bersertifikat. Cocok untuk memulai kebun sayur di rumah dengan hasil panen yang berkualitas.',
                'image' => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'original_price' => 100000,
                'discounted_price' => 75000,
                'discount_percentage' => 25,
                'badge' => 'Diskon 25%',
                'valid_until' => '2024-05-31',
                'category' => 'Benih',
            ],
            [
                'id' => 6,
                'title' => 'Program Edukasi Sekolah',
                'description' => 'Program edukasi khusus untuk sekolah dengan pembelajaran interaktif tentang pertanian berkelanjutan dan pentingnya pangan organik.',
                'image' => 'https://images.unsplash.com/photo-1497486751825-1233686d5d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'original_price' => 500000,
                'discounted_price' => 375000,
                'discount_percentage' => 25,
                'badge' => 'Diskon 25%',
                'valid_until' => '2024-07-31',
                'category' => 'Edukasi',
            ],
            [
                'id' => 7,
                'title' => 'Konsultasi Berkebun Online',
                'description' => 'Konsultasi personal dengan ahli pertanian kami melalui video call. Dapatkan solusi untuk masalah berkebun dan panduan khusus untuk tanaman Anda.',
                'image' => 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'original_price' => 200000,
                'discounted_price' => 150000,
                'discount_percentage' => 25,
                'badge' => 'Diskon 25%',
                'valid_until' => '2024-12-31',
                'category' => 'Konsultasi',
            ],
        ];

        return [
            'highlightPromo' => $highlightPromo,
            'promos' => $promos,
        ];
    }

    public function redirectToWhatsApp($promoTitle)
    {
        $message = 'Halo! Saya tertarik dengan promo: ' . $promoTitle . '. Bisa berikan informasi lebih lanjut?';
        $whatsappNumber = '6281234567890'; // Replace with actual WhatsApp number
        $url = 'https://wa.me/' . $whatsappNumber . '?text=' . urlencode($message);

        return redirect()->away($url);
    }
}; ?>

<div>
    <!-- Promotion Section -->
    <section class="bg-white py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Hero Section -->
            <div class="mb-16 text-center">
                <h1 class="font-marmelad mb-4 text-3xl font-bold text-gray-900 sm:text-4xl">
                    Informasi Promo
                </h1>
                <p class="font-quicksand mx-auto max-w-2xl text-base text-gray-600 sm:text-lg">
                    Dapatkan promo dan paket spesial dari Nunia Integrated Farm
                </p>
            </div>

            <!-- Highlight Promo -->
            @if ($highlightPromo)
                <div class="mb-16">
                    <div class="grid grid-cols-1 gap-8 overflow-hidden rounded-xl bg-white shadow-lg lg:grid-cols-2">
                        <!-- Promo Image -->
                        <div class="relative">
                            <img src="{{ $highlightPromo['image'] }}" alt="{{ $highlightPromo['title'] }}"
                                class="h-64 w-full object-cover lg:h-full" />
                            <div class="absolute left-4 top-4">
                                <span
                                    class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-sm font-medium text-red-800">
                                    Hemat {{ $highlightPromo['discount_percentage'] }}%
                                </span>
                            </div>
                        </div>

                        <!-- Promo Details -->
                        <div class="flex flex-col justify-center p-8">
                            <h2 class="font-marmelad mb-4 text-2xl font-bold text-gray-900">
                                {{ $highlightPromo['title'] }}
                            </h2>
                            <p class="font-quicksand mb-6 text-gray-600">
                                {{ $highlightPromo['description'] }}
                            </p>

                            <!-- Price -->
                            <div class="mb-6">
                                <div class="flex items-center space-x-3">
                                    <span class="font-marmelad text-3xl font-bold text-[#416910]">
                                        Rp {{ number_format($highlightPromo['discounted_price'], 0, ',', '.') }}
                                    </span>
                                    <span class="font-quicksand text-lg text-gray-400 line-through">
                                        Rp {{ number_format($highlightPromo['original_price'], 0, ',', '.') }}
                                    </span>
                                </div>
                                <p class="font-quicksand mt-1 text-sm text-gray-500">
                                    Berlaku hingga
                                    {{ \Carbon\Carbon::parse($highlightPromo['valid_until'])->format('d M Y') }}
                                </p>
                            </div>

                            <!-- CTA Button -->
                            <button wire:click="redirectToWhatsApp('{{ $highlightPromo['title'] }}')"
                                class="inline-flex items-center justify-center rounded-full bg-[#416910] px-6 py-3 text-base font-medium text-white transition-colors duration-200 hover:bg-[#335207]">
                                <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                </svg>
                                Pesan via WhatsApp
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Promo Grid -->
            <div class="mb-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($promos as $promo)
                    <div class="group">
                        <div
                            class="flex flex-col overflow-hidden rounded-xl bg-white shadow-md transition-transform duration-300 hover:scale-105">
                            <!-- Promo Image -->
                            <div class="relative h-48 w-full overflow-hidden">
                                <img src="{{ $promo['image'] }}" alt="{{ $promo['title'] }}"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110" />
                                @if ($promo['badge'])
                                    <div class="absolute left-3 top-3">
                                        <span
                                            class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-1 text-xs font-medium text-yellow-700">
                                            {{ $promo['badge'] }}
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <!-- Card Body -->
                            <div class="flex flex-1 flex-col p-6">
                                <!-- Title -->
                                <h3 class="font-marmelad mb-2 line-clamp-2 text-lg font-bold text-gray-800 sm:text-xl">
                                    {{ $promo['title'] }}
                                </h3>

                                <!-- Category & Valid Until -->
                                <div class="mb-2">
                                    <span class="font-quicksand text-sm text-gray-500">
                                        {{ $promo['category'] }} • Berlaku hingga
                                        {{ \Carbon\Carbon::parse($promo['valid_until'])->format('d M Y') }}
                                    </span>
                                </div>

                                <!-- Description -->
                                <p class="font-quicksand mb-4 line-clamp-3 flex-1 text-sm text-gray-600">
                                    {{ $promo['description'] }}
                                </p>

                                <!-- Price -->
                                <div class="mb-4">
                                    <div class="flex items-center space-x-2">
                                        <span class="font-marmelad text-xl font-bold text-[#416910]">
                                            Rp {{ number_format($promo['discounted_price'], 0, ',', '.') }}
                                        </span>
                                        <span class="font-quicksand text-sm text-gray-400 line-through">
                                            Rp {{ number_format($promo['original_price'], 0, ',', '.') }}
                                        </span>
                                    </div>
                                </div>

                                <!-- CTA Button -->
                                <button wire:click="redirectToWhatsApp('{{ $promo['title'] }}')"
                                    class="inline-flex w-full items-center justify-center rounded-lg bg-[#416910] px-4 py-2 text-sm font-medium text-white transition-colors duration-200 hover:bg-[#335207]">
                                    <svg class="mr-2 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                                    </svg>
                                    Pesan via WhatsApp
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- CTA Bottom Banner -->
            <div class="rounded-2xl bg-[#F5F9F6] p-8 text-center sm:p-12">
                <h2 class="font-marmelad mb-6 text-xl font-bold text-gray-900 sm:text-2xl">
                    Jangan lewatkan promo terbaik dari Nunia
                </h2>
                <a href="https://wa.me/6281234567890?text=Halo! Saya ingin mengetahui informasi lebih lanjut tentang promo yang tersedia."
                    target="_blank"
                    class="inline-flex items-center justify-center rounded-full bg-[#416910] px-6 py-3 text-base font-medium text-white transition-colors duration-200 hover:bg-[#335207]">
                    <svg class="mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.087" />
                    </svg>
                    Hubungi Kami via WhatsApp
                </a>
            </div>

        </div>
    </section>
</div>
