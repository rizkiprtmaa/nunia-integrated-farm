<?php

use Livewire\Volt\Component;

new class extends Component {
    public $events = [
        [
            'id' => 1,
            'title' => 'Organic Farming Workshop',
            'date' => 'January 15, 2025',
            'image' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=800&h=600&fit=crop',
            'thumbnail' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=150&h=150&fit=crop',
        ],
        [
            'id' => 2,
            'title' => 'Sustainable Agriculture Seminar',
            'date' => 'February 20, 2025',
            'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=800&h=600&fit=crop',
            'thumbnail' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=150&h=150&fit=crop',
        ],
        [
            'id' => 3,
            'title' => 'Farm Tourism Event',
            'date' => 'March 10, 2025',
            'image' => 'https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?w=800&h=600&fit=crop',
            'thumbnail' => 'https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?w=150&h=150&fit=crop',
        ],
        [
            'id' => 4,
            'title' => 'Livestock Management Training',
            'date' => 'April 25, 2025',
            'image' => 'https://images.unsplash.com/photo-1530587191325-3db32d826c18?w=800&h=600&fit=crop',
            'thumbnail' => 'https://images.unsplash.com/photo-1530587191325-3db32d826c18?w=150&h=150&fit=crop',
        ],
    ];
}; ?>

<div>
    <!-- Location and Events Section -->
    <section class="bg-gray-50 py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Responsive Grid Container -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-12">

                <!-- Left Column: Map Location -->
                <div class="space-y-6">
                    <!-- Header -->
                    <h2 class="font-marmelad text-xl text-[#416910] sm:text-2xl lg:text-3xl">
                        Check Our Location
                    </h2>

                    <!-- Map Component -->
                    <div class="h-[400px] overflow-hidden rounded-xl shadow-lg sm:h-[500px] lg:h-[600px]">
                        <x-map />
                    </div>
                </div>

                <!-- Right Column: Monthly Events Slider -->
                <div class="space-y-6">
                    <!-- Header -->
                    <h2 class="font-marmelad text-xl text-[#416910] sm:text-2xl lg:text-3xl">
                        Monthly Event
                    </h2>

                    <!-- Events Swiper Container -->
                    <div class="relative h-[400px] sm:h-[500px] lg:h-[600px]">
                        <!-- Main Swiper for Events -->
                        <div class="swiper events-swiper h-full overflow-hidden rounded-xl shadow-lg">
                            <div class="swiper-wrapper">
                                @foreach ($events as $event)
                                    <div class="swiper-slide relative">
                                        <!-- Event Image -->
                                        <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}"
                                            class="h-full w-full object-cover">

                                        <!-- Event Info Overlay -->
                                        <div
                                            class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent p-6">
                                            <h3 class="mb-2 text-lg font-bold text-white sm:text-xl">
                                                {{ $event['title'] }}</h3>
                                            <p class="text-sm text-white/90 sm:text-base">{{ $event['date'] }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>

                        <!-- Thumbnail Navigation -->
                        <div class="absolute right-4 top-1/2 z-20 -translate-y-1/2 transform">
                            <div class="swiper events-thumbs-swiper h-64 w-16">
                                <div class="swiper-wrapper flex-col">
                                    @foreach ($events as $index => $event)
                                        <div
                                            class="swiper-slide mb-2 !h-14 !w-14 cursor-pointer overflow-hidden rounded-lg border-2 border-transparent transition-all duration-200 hover:border-[#416910]">
                                            <img src="{{ $event['thumbnail'] }}" alt="{{ $event['title'] }}"
                                                class="h-full w-full object-cover">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
