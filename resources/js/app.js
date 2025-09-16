import Alpine from "alpinejs";
import Swiper from "swiper";
import {
    Navigation,
    Pagination,
    Autoplay,
    EffectFade,
    FreeMode,
    Thumbs,
} from "swiper/modules";
import L from "leaflet";
import "leaflet/dist/leaflet.css";

// Import Swiper styles
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import "swiper/css/effect-fade";
import "swiper/css/free-mode";
import "swiper/css/thumbs";

window.Alpine = Alpine;
Alpine.start();

document.addEventListener("DOMContentLoaded", () => {
    // Hero Swiper Initialization
    const heroSwiper = new Swiper(".hero-swiper", {
        modules: [Navigation, Pagination, Autoplay, EffectFade],
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    // Events Swiper Initialization
    // Initialize thumbnail swiper first
    const eventsThumbs = new Swiper(".events-thumbs-swiper", {
        modules: [FreeMode, Navigation, Thumbs],
        direction: "vertical",
        slidesPerView: 4,
        spaceBetween: 8,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            640: {
                slidesPerView: 4,
                spaceBetween: 8,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });

    // Initialize main events swiper
    const eventsSwiper = new Swiper(".events-swiper", {
        modules: [Navigation, Autoplay, EffectFade, Thumbs],
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        speed: 1000,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".events-swiper .swiper-button-next",
            prevEl: ".events-swiper .swiper-button-prev",
        },
        thumbs: {
            swiper: eventsThumbs,
        },
    });

    // About Gallery Mobile Swiper Initialization
    const aboutGallerySwiper = new Swiper(".about-gallery-swiper", {
        modules: [Pagination, Autoplay],
        loop: true,
        spaceBetween: 16,
        slidesPerView: 1,
        speed: 800,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".about-gallery-swiper .swiper-pagination",
            clickable: true,
            bulletClass: "swiper-pagination-bullet",
            bulletActiveClass: "swiper-pagination-bullet-active",
            renderBullet: function (index, className) {
                return (
                    '<span class="' +
                    className +
                    ' w-2 h-2 rounded-full bg-gray-300 cursor-pointer transition-colors duration-300"></span>'
                );
            },
        },
    });

    // Custom pagination styling for About Gallery
    const aboutPaginationBullets = document.querySelectorAll(
        ".about-gallery-swiper .swiper-pagination-bullet"
    );
    aboutPaginationBullets.forEach((bullet) => {
        bullet.addEventListener("click", function () {
            // Remove active class from all bullets
            aboutPaginationBullets.forEach((b) => {
                b.classList.remove("bg-[#416910]");
                b.classList.add("bg-gray-300");
            });
            // Add active class to clicked bullet
            this.classList.remove("bg-gray-300");
            this.classList.add("bg-[#416910]");
        });
    });
});

// Fix default icon path issue (important for Laravel + Vite)
delete L.Icon.Default.prototype._getIconUrl;

L.Icon.Default.mergeOptions({
    iconRetinaUrl:
        "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png",
    iconUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png",
    shadowUrl: "https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png",
});

window.L = L;

document.addEventListener("DOMContentLoaded", () => {
    const map = L.map("nuniaMap").setView([-7.3507, 108.2376], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    }).addTo(map);

    L.marker([-7.3507, 108.2376])
        .addTo(map)
        .bindPopup("<b>Nunia Integrated Farm</b><br>Ciamis, Jawa Barat.")
        .openPopup();

    // Testimoni Swiper Initialization
    const testimoniSwiper = new Swiper(".testimoni-swiper", {
        modules: [Navigation, Pagination, Autoplay],
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,
        speed: 800,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
        breakpoints: {
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 32,
            },
        },
        on: {
            slideChange: function () {
                // Update custom pagination
                const currentSlide = document.querySelector(
                    ".swiper-pagination-current"
                );
                if (currentSlide) {
                    currentSlide.textContent = this.realIndex + 1;
                }
            },
            init: function () {
                // Initialize custom pagination
                const currentSlide = document.querySelector(
                    ".swiper-pagination-current"
                );
                if (currentSlide) {
                    currentSlide.textContent = this.realIndex + 1;
                }
            },
        },
    });
});
