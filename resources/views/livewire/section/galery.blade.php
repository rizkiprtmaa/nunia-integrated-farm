<?php

use Livewire\Volt\Component;

new class extends Component {
    public $galleryItems = [
        [
            'src' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=800&h=600&fit=crop&crop=center',
            'alt' => 'Nunia Farm Landscape View',
            'category' => 'Farm',
            'size' => 'large', // Takes 2 columns
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1560493676-04071c5f467b?w=400&h=600&fit=crop&crop=center',
            'alt' => 'Fresh Organic Vegetables',
            'category' => 'Produk',
            'size' => 'tall', // Takes 1 column, 2 rows
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=400&h=300&fit=crop&crop=center',
            'alt' => 'Harvest Season Activity',
            'category' => 'Kegiatan',
            'size' => 'medium',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1595273670150-bd0c3c392e46?w=400&h=300&fit=crop&crop=center',
            'alt' => 'Community Workshop',
            'category' => 'Kegiatan',
            'size' => 'medium',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=600&h=400&fit=crop&crop=center',
            'alt' => 'Farm Equipment and Tools',
            'category' => 'Farm',
            'size' => 'wide', // Takes 2 columns, 1 row
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=300&fit=crop&crop=center',
            'alt' => 'Organic Product Display',
            'category' => 'Produk',
            'size' => 'medium',
        ],
        [
            'src' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?w=400&h=300&fit=crop&crop=center',
            'alt' => 'Tourism Activities at Nunia',
            'category' => 'Wisata',
            'size' => 'medium',
        ],
    ];

    public function render(): mixed
    {
        return view('livewire.section.galery');
    }
}; ?>

<section class="bg-white py-12 sm:py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-12 text-center">
            <h2 class="font-marmelad mb-4 text-2xl font-bold text-[#416910] sm:text-3xl">
                Gallery
            </h2>
            <p class="font-quicksand mx-auto mb-8 max-w-2xl text-sm text-gray-600 sm:text-base">
                Dokumentasi kegiatan, produk, dan wisata Nunia
            </p>
        </div>

        <!-- Gallery Grid with Varied Sizes -->
        <div class="grid auto-rows-[200px] grid-cols-2 gap-4 md:grid-cols-4">
            @foreach ($galleryItems as $index => $item)
                @php
                    $gridClasses = '';
                    switch ($item['size']) {
                        case 'large':
                            $gridClasses = 'col-span-2 row-span-2';
                            break;
                        case 'wide':
                            $gridClasses = 'col-span-2 row-span-1';
                            break;
                        case 'tall':
                            $gridClasses = 'col-span-1 row-span-2';
                            break;
                        default:
                            $gridClasses = 'col-span-1 row-span-1';
                    }
                @endphp

                <div class="{{ $gridClasses }} group cursor-pointer">
                    <div
                        class="relative h-full w-full transform overflow-hidden rounded-lg transition-transform duration-300 group-hover:scale-105">
                        <img src="{{ $item['src'] }}" alt="{{ $item['alt'] }}" class="h-full w-full object-cover"
                            loading="lazy">

                        <!-- Gradient Overlay -->
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        </div>

                        <!-- Category Label -->
                        <div class="absolute bottom-0 left-0 right-0 mb-6 p-4">
                            <div
                                class="translate-y-full transform transition-transform duration-300 group-hover:translate-y-0">
                                <span
                                    class="font-marmelad inline-block rounded-full bg-[#416910] px-3 py-1 text-xs font-medium text-white">
                                    {{ $item['category'] }}
                                </span>
                            </div>
                        </div>

                        <!-- Zoom Icon -->
                        <div
                            class="absolute right-4 top-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                            <div
                                class="flex h-8 w-8 items-center justify-center rounded-full bg-white/20 backdrop-blur-sm">
                                <svg class="h-4 w-4 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Load More Button (Optional) -->
        <div class="mt-12 text-center">
            <button
                class="font-marmelad rounded-lg bg-[#416910] px-8 py-3 font-medium text-white transition-colors duration-300 hover:bg-green-700">
                Lihat Lebih Banyak
            </button>
        </div>
    </div>
</section>
