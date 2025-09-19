<?php

use Livewire\Volt\Component;

new class extends Component {}; ?>

<!-- Timeline Section -->
<section class="font-syne bg-white py-16">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-12 text-center">
            <h2 class="font-marmelad text-3xl font-bold text-gray-900 sm:text-4xl lg:text-5xl">
                Nunia’s Timelines
            </h2>
            <p class="font-quicksand mt-4 text-gray-600 sm:text-lg">
                The silent witness of our journey in sustainable farming and community empowerment
            </p>
        </div>

        <!-- Timeline Container -->
        <div class="flex space-x-12 overflow-x-auto pb-6">

            <!-- Timeline Item -->
            <div class="relative min-w-[250px] max-w-xs flex-1 border-l-2 border-gray-300 pl-6">
                <h3 class="text-xl font-bold text-gray-900">2015</h3>
                <p class="font-quicksand mt-2 text-gray-600">
                    The land of Nunia Integrated Farm was initiated with the vision of
                    building a sustainable farming ecosystem.
                </p>
                <img src="{{ asset('images/timeline-2015.jpg') }}" alt="Timeline 2015"
                    class="mt-4 h-40 w-full rounded-lg object-cover shadow-md" />
            </div>

            <!-- Timeline Item -->
            <div class="relative min-w-[250px] max-w-xs flex-1 border-l-2 border-gray-300 pl-6">
                <h3 class="text-xl font-bold text-gray-900">2018</h3>
                <p class="font-quicksand mt-2 text-gray-600">
                    Expansion to organic farming and aquaculture,
                    welcoming first visitors to the farm.
                </p>
                <img src="{{ asset('images/timeline-2018.jpg') }}" alt="Timeline 2018"
                    class="mt-4 h-40 w-full rounded-lg object-cover shadow-md" />
            </div>

            <!-- Timeline Item -->
            <div class="relative min-w-[250px] max-w-xs flex-1 border-l-2 border-gray-300 pl-6">
                <h3 class="text-xl font-bold text-gray-900">2023</h3>
                <p class="font-quicksand mt-2 text-gray-600">
                    Nunia became an integrated destination for farming,
                    training, and sustainable agritourism.
                </p>
                <img src="{{ asset('images/timeline-2023.jpg') }}" alt="Timeline 2023"
                    class="mt-4 h-40 w-full rounded-lg object-cover shadow-md" />
            </div>

        </div>
    </div>
</section>
