import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

// Registrar módulos
Swiper.use([Navigation, Pagination]);

// Inicializar Swiper cuando se cargue el DOM
document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.constructionServicesSwiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.construction-next',
            prevEl: '.construction-prev',
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 4,
            },
        },
    });
});

AOS.init({
  duration: 1000,   // duración de las animaciones en ms
  once: true,       // animar solo una vez al entrar
});


