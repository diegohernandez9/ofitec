<button id="back-to-top" class="fixed bottom-6 right-6 bg-primary text-white w-12 hover:bg-slate-800 h-12 rounded-full flex items-center justify-center shadow-lg opacity-0 invisible transition-all duration-300">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>