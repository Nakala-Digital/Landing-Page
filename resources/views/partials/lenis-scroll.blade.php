<style>
    html.lenis, html.lenis body {
      height: auto;
    }
    .lenis.lenis-smooth {
      scroll-behavior: auto !important;
    }
    .lenis.lenis-smooth [data-lenis-prevent] {
      overscroll-behavior: contain;
    }
    .lenis.lenis-stopped {
      overflow: hidden;
    }
    .lenis.lenis-smooth iframe {
      pointer-events: none;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/lenis@1.1.18/dist/lenis.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Inisialisasi Lenis Scroll //
        const lenis = new Lenis({
            duration: 1.5,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            smoothWheel: true,
            wheelMultiplier: 1,
            touchMultiplier: 1.5,
        });

        // Integrasi Request Animasi Frame //
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Mengubah tinggi header saat user melakukan scroll //
        lenis.on('scroll', ({
            scroll
        }) => {
            const header = document.querySelector('header.fixed');
            if (header) {
                if (scroll > 20) {
                    header.classList.add('h-16');
                    header.classList.remove('h-20');
                } else {
                    header.classList.remove('h-16');
                    header.classList.add('h-20');
                }
            }
        });

        // Anchor Link Smooth Scrolling //
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const href = anchor.getAttribute('href');
                if (href === '#' || !href) return;
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    lenis.scrollTo(target, {
                        offset: -80,
                        duration: 1.5
                    });
                }
            });
        });
    });
</script>
