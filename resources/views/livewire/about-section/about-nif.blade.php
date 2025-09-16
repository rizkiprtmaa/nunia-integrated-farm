<?php

use Livewire\Volt\Component;

new class extends Component {}; ?>

<!-- About NIF Header Section -->
<section class="font-syne relative bg-white py-16">
    <div class="mx-auto grid max-w-7xl grid-cols-1 items-center gap-8 px-6 lg:grid-cols-5 lg:px-8">

        <!-- Left Content -->
        <div class="col-span-2 flex h-full flex-col justify-between space-y-6">
            <!-- Heading -->
            <h2
                class="font-marmelad text-nowrap pt-3 text-4xl font-bold tracking-wider text-[#416910] sm:text-4xl lg:text-5xl">
                Get to Know Us Better
            </h2>

            <!-- Subheading -->
            <p class="font-quicksand max-w-xl pt-8 text-base text-gray-600 sm:text-lg">
                Explore our mission, vision, and the values that shape our approach
                to delivering our product.
            </p>

            <!-- Small Images -->

            <div class="mt-6 grid grid-cols-2 gap-4">
                <img src="{{ asset('images/about-hero-1.png') }}" alt="About Hero 1"
                    class="h-55 w-full rounded-3xl object-cover shadow-md" />
                <img src="{{ asset('images/about-hero-2.png') }}" alt="About Hero 2"
                    class="h-55 ms-2 w-full rounded-3xl object-cover shadow-md" />
            </div>
        </div>

        <!-- Right Image -->
        <div class="col-span-3 flex justify-center lg:justify-end">
            <img src="{{ asset('images/about-hero.png') }}" alt="About Hero Main" class="w-200 h-auto lg:h-[500px]" />
        </div>

    </div>
</section>
