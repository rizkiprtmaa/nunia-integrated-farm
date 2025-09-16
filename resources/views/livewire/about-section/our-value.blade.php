<?php

use Livewire\Volt\Component;

new class extends Component {
    public $values = [
        [
            'icon' => 'integration',
            'title' => 'Sistem Integrasi Pertanian dan Peternakan',
            'description' => 'Mengembangkan sistem pertanian terpadu yang menggabungkan budidaya tanaman dan peternakan untuk menciptakan ekosistem yang berkelanjutan dan saling menguntungkan.',
        ],
        [
            'icon' => 'organic',
            'title' => 'Pertanian organik (bebas bahan kimia)',
            'description' => 'Berkomitmen penuh pada metode pertanian organik tanpa penggunaan pestisida atau pupuk kimia, menghasilkan produk yang aman dan sehat untuk konsumen.',
        ],
        [
            'icon' => 'local-wisdom',
            'title' => 'Kearifan lokal',
            'description' => 'Menghormati dan menerapkan pengetahuan tradisional masyarakat setempat dalam praktik pertanian, melestarikan budaya sambil berinovasi untuk masa depan.',
        ],
    ];

    public function getIconSvg($iconType)
    {
        $icons = [
            'integration' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-blocks-icon lucide-blocks"><path d="M10 22V7a1 1 0 0 0-1-1H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-5a1 1 0 0 0-1-1H2"/><rect x="14" y="2" width="8" height="8" rx="1"/></svg>',
            'organic' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-leaf-icon lucide-leaf"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/><path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/></svg>',
            'local-wisdom' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tree-palm-icon lucide-tree-palm"><path d="M13 8c0-2.76-2.46-5-5.5-5S2 5.24 2 8h2l1-1 1 1h4"/><path d="M13 7.14A5.82 5.82 0 0 1 16.5 6c3.04 0 5.5 2.24 5.5 5h-3l-1-1-1 1h-3"/><path d="M5.89 9.71c-2.15 2.15-2.3 5.47-.35 7.43l4.24-4.25.7-.7.71-.71 2.12-2.12c-1.95-1.96-5.27-1.8-7.42.35"/><path d="M11 15.5c.5 2.5-.17 4.5-1 6.5h4c2-5.5-.5-12-1-14"/></svg>',
        ];

        return $icons[$iconType] ?? $icons['integration'];
    }
}; ?>

<section class="bg-gray-50 py-12 sm:py-16 lg:py-20">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="mb-12 text-center">
            <p class="font-marmelad mb-2 text-sm uppercase tracking-wider text-gray-600">
                Our Value
            </p>
            <h2 class="font-marmelad mb-12 text-2xl font-bold text-gray-900 sm:text-3xl lg:text-4xl">
                Ekosistem Alam selalu Kami Jaga
            </h2>
        </div>

        <!-- Values Grid -->
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($values as $value)
                <div class="rounded-xl bg-white p-6 shadow-md transition duration-300 hover:scale-105 hover:shadow-lg">
                    <!-- Icon -->
                    <div class="mb-4 flex items-start">
                        <div class="rounded-lg bg-green-100 p-2">
                            <div class="text-[#416910]">
                                {!! $this->getIconSvg($value['icon']) !!}
                            </div>
                        </div>
                    </div>

                    <!-- Title -->
                    <h3 class="font-marmelad mb-2 mt-4 text-lg font-bold text-gray-800">
                        {{ $value['title'] }}
                    </h3>

                    <!-- Description -->
                    <p class="font-quicksand mt-2 text-sm leading-relaxed text-gray-600">
                        {{ $value['description'] }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
