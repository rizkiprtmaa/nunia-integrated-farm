<?php

use Livewire\Volt\Component;

new class extends Component {
    public function render(): mixed
    {
        return view('livewire.about-section.story-history');
    }
}; ?>

<div>
    <!-- Story & History Section -->
    <section class="font-syne relative bg-[#F5F2E9] py-20">
        <div class="mx-auto grid max-w-7xl grid-cols-1 gap-12 px-6 lg:grid-cols-2 lg:gap-16 lg:px-8">

            <!-- Left: Video -->
            <div class="flex items-center justify-center">
                <video controls preload="none" poster="{{ asset('images/story-thumbnail.png') }}"
                    class="aspect-video w-full rounded-2xl object-cover shadow-lg">
                    <source src="{{ asset('videos/story.mov') }}" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video>
            </div>

            <!-- Right: Text -->
            <div class="flex flex-col justify-center space-y-6">
                <span class="font-quicksand text-sm uppercase tracking-wide text-gray-700">About</span>

                <h2 class="font-marmelad text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl lg:text-5xl">
                    Story & History
                </h2>

                <p class="font-quicksand text-base leading-relaxed text-gray-700 sm:text-lg">
                    During a walk in Plumbon Village, Tawangmangu, Central Java, we came across
                    an abandoned factory complex – a citronella distillery established in 1963.
                    Intrigued by its unusual façade, we decided to dig deeper into its history.
                </p>

                <p class="font-quicksand text-base leading-relaxed text-gray-700 sm:text-lg">
                    The distillery, once intended to be the biggest in Asia, became a silent witness
                    of Indonesia’s essential oil industry. With over 30,000 plants for essential oils,
                    Indonesia was a magnet for global production and development.
                </p>
            </div>
        </div>
    </section>
</div>
