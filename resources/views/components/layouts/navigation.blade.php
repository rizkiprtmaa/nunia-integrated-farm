<div>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700&display=swap" rel="stylesheet">

    <nav class="sticky top-0 z-50 bg-white py-3 shadow-sm" style="font-family: 'Syne', sans-serif;"
        x-data="{ mobileMenuOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <!-- Left side: Logo -->
                <div class="flex-shrink-0">
                    <x-app-logo />
                </div>

                <!-- Center: Desktop Navigation Menu -->
                <div class="hidden space-x-8 md:flex">
                    <a href="#about"
                        class="px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-[#416910]">
                        About & Experience
                    </a>
                    <a href="#programs"
                        class="px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-[#416910]">
                        Program & Products
                    </a>
                    <a href="#promo"
                        class="px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-[#416910]">
                        Informasi Promo
                    </a>
                    <a href="#article"
                        class="px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-[#416910]">
                        Article
                    </a>
                    <a href="#gallery"
                        class="px-3 py-2 text-sm font-medium text-gray-700 transition-colors duration-200 hover:text-[#416910]">
                        Gallery & Testimoni
                    </a>
                </div>

                <!-- Right side: Contact Us Button -->
                <div class="hidden md:flex">
                    <a href="#contact"
                        class="rounded-full bg-[#416910] px-6 py-2 text-sm font-medium text-white transition-colors duration-200 hover:bg-[#335207]">
                        Contact Us
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="text-gray-700 transition-colors duration-200 hover:text-[#416910] focus:text-[#416910] focus:outline-none"
                        aria-label="Toggle mobile menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2"
            class="border-t border-gray-200 bg-[#EFEFEF] md:hidden">
            <div class="space-y-1 px-2 pb-3 pt-2">
                <a href="#about"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-100 hover:text-[#416910]">
                    About & Experience
                </a>
                <a href="#programs"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-100 hover:text-[#416910]">
                    Program & Products
                </a>
                <a href="#promo"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-100 hover:text-[#416910]">
                    Informasi Promo
                </a>
                <a href="#article"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-100 hover:text-[#416910]">
                    Article
                </a>
                <a href="#gallery"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-700 transition-colors duration-200 hover:bg-gray-100 hover:text-[#416910]">
                    Gallery & Testimoni
                </a>
                <div class="pt-2">
                    <a href="#contact"
                        class="mx-3 block rounded-full bg-[#416910] px-6 py-2 text-center text-base font-medium text-white transition-colors duration-200 hover:bg-[#335207]">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </nav>
</div>
