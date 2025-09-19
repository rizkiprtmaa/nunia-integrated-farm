<?php

use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $search = '';

    public function with(): array
    {
        // Sample articles data - replace with actual data from database
        $articles = [
            [
                'id' => 1,
                'title' => 'Sustainable Organic Farming Practices for Modern Agriculture',
                'excerpt' => 'Discover how sustainable organic farming practices are revolutionizing agriculture. Learn about natural pest control, soil health improvement, and eco-friendly farming techniques that benefit both farmers and the environment.',
                'category' => 'Organic Farming',
                'date' => '2024-03-15',
                'thumbnail' => 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'slug' => 'sustainable-organic-farming-practices',
            ],
            [
                'id' => 2,
                'title' => 'Smart Irrigation Systems: Technology Meets Agriculture',
                'excerpt' => 'Explore how smart irrigation systems are helping farmers optimize water usage, reduce costs, and improve crop yields through precision agriculture technology.',
                'category' => 'Technology',
                'date' => '2024-03-12',
                'thumbnail' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'slug' => 'smart-irrigation-systems',
            ],
            [
                'id' => 3,
                'title' => 'Agritourism: Creating Additional Revenue Streams',
                'excerpt' => 'Learn how agritourism can provide additional income for farmers while educating visitors about sustainable agriculture and farm-to-table practices.',
                'category' => 'Business',
                'date' => '2024-03-10',
                'thumbnail' => 'https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'slug' => 'agritourism-revenue-streams',
            ],
            [
                'id' => 4,
                'title' => 'Composting 101: Turn Waste into Gold for Your Garden',
                'excerpt' => 'Master the art of composting to create nutrient-rich soil amendments. This comprehensive guide covers everything from bin setup to troubleshooting common issues.',
                'category' => 'Sustainability',
                'date' => '2024-03-08',
                'thumbnail' => 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'slug' => 'composting-guide',
            ],
            [
                'id' => 5,
                'title' => 'Hydroponic Farming: Growing Without Soil',
                'excerpt' => 'Discover the benefits of hydroponic farming systems and how they can increase yields while using less water and space than traditional farming methods.',
                'category' => 'Innovation',
                'date' => '2024-03-05',
                'thumbnail' => 'https://images.unsplash.com/photo-1530836369250-ef72a3f5cda8?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'slug' => 'hydroponic-farming',
            ],
            [
                'id' => 6,
                'title' => 'Pest Management Without Chemicals',
                'excerpt' => 'Explore natural and biological pest control methods that protect your crops without harmful chemicals, promoting a healthier ecosystem.',
                'category' => 'Organic Farming',
                'date' => '2024-03-02',
                'thumbnail' => 'https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                'slug' => 'natural-pest-management',
            ],
        ];

        // Filter articles based on search query
        if (!empty($this->search)) {
            $articles = array_filter($articles, function ($article) {
                return stripos($article['title'], $this->search) !== false || stripos($article['excerpt'], $this->search) !== false || stripos($article['category'], $this->search) !== false;
            });
        }

        return [
            'articles' => $articles,
        ];
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
}; ?>

<div>
    <!-- Articles Section -->
    <section class="bg-white py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <!-- Header Section -->
            <div class="mb-10 flex items-center justify-between">
                <!-- Page Title -->
                <div>
                    <h1 class="font-marmelad text-2xl font-bold text-gray-900 sm:text-3xl">
                        Articles
                    </h1>
                </div>

                <!-- Search Input -->
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" wire:model.live="search" placeholder="Search articles..."
                        class="block w-full max-w-64 rounded-lg border border-gray-300 py-2 pl-10 pr-4 focus:border-[#416910] focus:ring-[#416910] sm:text-sm" />
                </div>
            </div>

            <!-- Articles Grid -->
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($articles as $article)
                    <article class="group">
                        <div
                            class="flex flex-col overflow-hidden rounded-xl bg-white shadow-md transition-transform duration-300 hover:scale-105">
                            <!-- Thumbnail -->
                            <div class="h-48 w-full overflow-hidden">
                                <img src="{{ $article['thumbnail'] }}" alt="{{ $article['title'] }}"
                                    class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110" />
                            </div>

                            <!-- Card Body -->
                            <div class="flex flex-1 flex-col p-6">
                                <!-- Category & Date -->
                                <div class="mb-2">
                                    <span class="font-quicksand text-sm uppercase tracking-wide text-gray-500">
                                        {{ $article['category'] }} •
                                        {{ \Carbon\Carbon::parse($article['date'])->format('M d, Y') }}
                                    </span>
                                </div>

                                <!-- Title -->
                                <h2 class="font-marmelad mb-2 line-clamp-2 text-lg font-bold text-gray-800 sm:text-xl">
                                    {{ $article['title'] }}
                                </h2>

                                <!-- Excerpt -->
                                <p class="font-quicksand mb-4 line-clamp-3 flex-1 text-sm text-gray-600">
                                    {{ $article['excerpt'] }}
                                </p>

                                <!-- Read More Link -->
                                <div class="mt-auto">
                                    <a href="#"
                                        class="font-medium text-[#416910] transition-colors duration-200 hover:underline">
                                        Read More →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- No Results Message -->
            @if (empty($articles))
                <div class="py-12 text-center">
                    <div class="mx-auto max-w-md">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.863 0-5.29 1.58-6.572 3.927C5.5 18.972 5.738 19 6 19h12c.262 0 .5-.028.572-.073-.863-1.347-2.709-2.927-5.572-2.927z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No articles found</h3>
                        <p class="mt-1 text-sm text-gray-500">Try adjusting your search to find what you're looking for.
                        </p>
                    </div>
                </div>
            @endif

            <!-- Pagination Section -->
            <div class="mt-12">
                <nav class="flex justify-center" aria-label="Pagination">
                    <div class="flex space-x-2">
                        <!-- Previous Button -->
                        <button
                            class="relative inline-flex items-center rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-500 transition-colors duration-200 hover:bg-gray-300"
                            disabled>
                            Previous
                        </button>

                        <!-- Page Numbers -->
                        <button
                            class="relative inline-flex items-center rounded-lg bg-[#416910] px-4 py-2 text-sm font-medium text-white">
                            1
                        </button>
                        <button
                            class="relative inline-flex items-center rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-300">
                            2
                        </button>
                        <button
                            class="relative inline-flex items-center rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-300">
                            3
                        </button>

                        <!-- Next Button -->
                        <button
                            class="relative inline-flex items-center rounded-lg bg-gray-200 px-4 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-300">
                            Next
                        </button>
                    </div>
                </nav>
            </div>

        </div>
    </section>
</div>
