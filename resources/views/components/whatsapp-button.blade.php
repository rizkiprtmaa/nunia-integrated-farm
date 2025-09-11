<div x-data="{ open: false }" class="fixed bottom-6 right-6 z-50">
    <!-- Floating Button -->
    <button @click="open = !open"
        class="flex h-14 w-14 items-center justify-center rounded-full bg-[#25D366] shadow-lg transition-transform hover:scale-110">
        <svg viewBox="0 0 48 48" class="h-7 w-7" id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
            fill="#ffffff" stroke="#ffffff">
            <g id="SVGRepo_bgCarrier" stroke-width="1"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #ffffff;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                        }
                    </style>
                </defs>
                <path class="cls-1"
                    d="M24,2.5A21.52,21.52,0,0,0,5.15,34.36L2.5,45.5l11.14-2.65A21.5,21.5,0,1,0,24,2.5ZM13.25,12.27h5.86a1,1,0,0,1,1,1,10.4,10.4,0,0,0,.66,3.91,1.93,1.93,0,0,1-.66,2.44l-2.05,2a18.6,18.6,0,0,0,3.52,4.79A18.6,18.6,0,0,0,26.35,30l2-2.05c1-1,1.46-1,2.44-.66a10.4,10.4,0,0,0,3.91.66,1.05,1.05,0,0,1,1,1v5.86a1.05,1.05,0,0,1-1,1,23.68,23.68,0,0,1-15.64-6.84,23.6,23.6,0,0,1-6.84-15.64A1.07,1.07,0,0,1,13.25,12.27Z">
                </path>
            </g>
        </svg>
    </button>

    <!-- Popup -->
    <div x-show="open" x-transition
        class="absolute bottom-20 right-0 w-72 rounded-xl border border-gray-200 bg-white shadow-lg">
        <div class="p-4">
            <h3 class="mb-2 font-bold text-gray-800">Mulai Obrolan</h3>
            <p class="mb-4 text-sm text-gray-600">Konsultasikan kebutuhan Anda lewat WhatsApp</p>
            <a href="https://wa.me/6281234567890?text=Halo%20Nunia%20Farm!" target="_blank"
                class="flex items-center gap-3 rounded-lg bg-[#25D366] px-4 py-2 font-medium text-white transition hover:bg-[#20b955]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>

                Hubungi Kami
            </a>
        </div>
    </div>
</div>
