<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'OFITEC | Servicios de Construcción y Oficina Técnica' }}</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans bg-light">
    <x-layout.navigation />
    
    <main>
        {{ $slot }}
    </main>
    
    <x-layout.footer />
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
                    if (category === 'all' || card.getAttribute('data-category') === category) {
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
</body>
</html>