<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'OFITEC | Servicios de Construcción y Oficina Técnica' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">


    <meta name="description" content="{{ $description ?? 'Servicios de Construcción y Oficina Técnica' }}">
    <meta name="author" content="{{ $author ?? 'OFITEC' }}">


    <meta property="og:url" content="https://ofitec-master-hblhru.laravel.cloud/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="OFITEC | Servicios de Construcción y Oficina Técnica">
    <meta property="og:description" content="">
    <meta property="og:image" content="{{ asset('img/logo.webp') }}">



    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ofitec">
    <meta name="twitter:title" content="{{ $title ?? 'OFITEC | Servicios de Construcción y Oficina Técnica' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Servicios de Construcción y Oficina Técnica' }}">
    <meta name="twitter:image" content="{{ asset('img/logo.webp') }}">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-light overflow-x-hidden">
    <x-layout.navigation />
    
    <main>
        {{ $slot }}
    </main>
    
    <x-layout.footer/>
    <x-ui.back-to-top />
    
    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
                    const menuToggle = document.getElementById('menu-toggle');
                    const mobileMenu = document.getElementById('mobile-menu');

                    menuToggle.addEventListener('click', () => {
                        mobileMenu.classList.toggle('hidden');
                    });

                    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                        anchor.addEventListener('click', function(e) {
                            e.preventDefault();

                            const targetId = this.getAttribute('href');
                            const targetElement = document.querySelector(targetId);

                            if (targetElement) {
                                window.scrollTo({
                                    top: targetElement.offsetTop - 80,
                                    behavior: 'smooth'
                                });

                                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                                    mobileMenu.classList.add('hidden');
                                }
                            }
                        });
                    });
                });

                const categoryButtons = document.querySelectorAll('.category-btn');
                const projectCards = document.querySelectorAll('.project-card');
                const noResultsMessage = document.getElementById('no-results'); 

                categoryButtons.forEach(button => {
                button.addEventListener('click', () => {
                
                categoryButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-primary', 'text-white');
                    btn.classList.add('bg-white', 'text-primary');
                });
                
            
                button.classList.add('active', 'bg-primary', 'text-white');
                button.classList.remove('bg-white', 'text-primary');
                
                const category = button.getAttribute('data-category');
                let found = false;
                
            
                projectCards.forEach(card => {
                const cardCategories = card.getAttribute('data-category')?.split(' ') || [];

                    if (category === 'all' || cardCategories.includes(category)) {
                card.style.display = 'block';
                found = true;
            } else {
                card.style.display = 'none';
            }
                });
                
                
                if (found) {
                    noResultsMessage.style.display = 'none'; 
                } else {
                    noResultsMessage.style.display = 'block'; 
                }
            });
        });

    </script>

<script>
    document.getElementById('contact-form').addEventListener('submit', function(e) {
      const prefix = document.getElementById('phonePrefix').value;
      const number = document.getElementById('phoneNumber').value.trim();
      document.getElementById('fullPhone').value = prefix + number;
    });
  </script>
</body>
</html>