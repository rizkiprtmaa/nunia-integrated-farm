<?php

use Livewire\Volt\Component;

new class extends Component {
    public $featuredArticle = [
        'id' => 1,
        'title' => 'Sustainable Organic Farming: The Future of Agriculture',
        'excerpt' => 'Discover how sustainable organic farming practices are revolutionizing agriculture. Learn about natural pest control, soil health improvement, and eco-friendly farming techniques that benefit both farmers and the environment.',
        'image' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=800&h=400&fit=crop',
        'date' => '2025-01-15',
        'slug' => 'sustainable-organic-farming',
    ];

    public $articles = [
        [
            'id' => 2,
            'title' => 'Modern Livestock Management Techniques',
            'excerpt' => 'Innovative approaches to livestock care that ensure animal welfare while maintaining productivity and sustainability.',
            'image' => 'https://images.unsplash.com/photo-1530587191325-3db32d826c18?w=200&h=200&fit=crop',
            'date' => '2025-01-10',
            'slug' => 'modern-livestock-management',
        ],
        [
            'id' => 3,
            'title' => 'Integrated Farm Tourism: A New Revenue Stream',
            'excerpt' => 'How agritourism can provide additional income for farmers while educating visitors about sustainable agriculture.',
            'image' => 'https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?w=200&h=200&fit=crop',
            'date' => '2025-01-05',
            'slug' => 'integrated-farm-tourism',
        ],
        [
            'id' => 4,
            'title' => 'Natural Pest Control Solutions',
            'excerpt' => 'Effective organic methods to protect crops from pests without harmful chemicals, ensuring healthy produce.',
            'image' => 'https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=200&h=200&fit=crop',
            'date' => '2025-01-01',
            'slug' => 'natural-pest-control',
        ],
    ];
}; ?>

<div>
    <!-- Highlight Articles Section -->
    <section class="bg-white py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <h2 class="font-marmelad mb-8 text-2xl font-bold text-[#416910] sm:text-3xl">
                Highlight Article
            </h2>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">

                <!-- Left Column: Featured Article -->
                <div class="space-y-4">
                    <!-- Featured Article Image -->
                    <div class="overflow-hidden rounded-lg">
                        <img src="{{ $featuredArticle['image'] }}" alt="{{ $featuredArticle['title'] }}"
                            class="h-64 w-full object-cover transition-transform duration-300 hover:scale-105 sm:h-80">
                    </div>

                    <!-- Featured Article Content -->
                    <div>
                        <!-- Title -->
                        <h3 class="font-marmelad mb-3 text-xl font-bold text-gray-800 sm:text-2xl">
                            {{ $featuredArticle['title'] }}
                        </h3>

                        <!-- Excerpt -->
                        <p class="font-quicksand mb-4 text-sm leading-relaxed text-gray-600 sm:text-base">
                            {{ $featuredArticle['excerpt'] }}
                        </p>

                        <!-- CTA Link -->
                        <a href="/articles/{{ $featuredArticle['slug'] }}"
                            class="font-medium text-[#416910] transition-colors duration-200 hover:underline">
                            Read More →
                        </a>
                    </div>
                </div>

                <!-- Right Column: Article List -->
                <div class="space-y-6">
                    @foreach ($articles as $article)
                        <article class="flex gap-4">
                            <!-- Thumbnail -->
                            <div class="flex-shrink-0">
                                <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}"
                                    class="h-24 w-24 rounded-lg object-cover transition-transform duration-300 hover:scale-105 sm:h-28 sm:w-28">
                            </div>

                            <!-- Content -->
                            <div class="min-w-0 flex-1">
                                <!-- Title -->
                                <h4
                                    class="font-marmelad mb-2 line-clamp-2 text-base font-bold text-gray-800 sm:text-lg">
                                    <a href="/articles/{{ $article['slug'] }}"
                                        class="transition-colors duration-200 hover:text-[#416910]">
                                        {{ $article['title'] }}
                                    </a>
                                </h4>

                                <!-- Excerpt -->
                                <p class="font-quicksand line-clamp-2 text-sm leading-relaxed text-gray-600">
                                    {{ $article['excerpt'] }}
                                </p>

                                <!-- Date -->
                                <time class="mt-2 block text-xs text-gray-400" datetime="{{ $article['date'] }}">
                                    {{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}
                                </time>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- View All Articles Button -->
            <div class="mt-12 text-center">
                <a href="/articles"
                    class="inline-flex items-center gap-2 rounded-full border-2 border-[#416910] px-8 py-3 font-medium text-[#416910] transition-all duration-200 hover:bg-[#416910] hover:text-white">
                    <span>View All Articles</span>
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>
