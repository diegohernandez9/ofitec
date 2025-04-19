import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

AOS.init({
    duration: 1000,  
    once: true,       
    offset: 50,
    mirror: false,
  });
  

Swiper.use([Navigation, Pagination]);


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


const faqToggles = document.querySelectorAll('.faq-toggle');
        
faqToggles.forEach(toggle => {
    toggle.addEventListener('click', () => {
        const targetId = toggle.getAttribute('data-target');
        const content = document.getElementById(targetId);
        
      
        content.classList.toggle('hidden');
        
        
        const icon = toggle.querySelector('i');
        icon.classList.toggle('rotate-180');
    });
});

