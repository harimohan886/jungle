<script src="{{ asset('/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>
<!-- Include Fancybox JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>



<!-- Select2 JS CDN -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script> --}}

{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.has-dropdown');

        menuItems.forEach(item => {
            const toggleButton = item.querySelector('.dropdown-toggle-btn');
            const submenu = item.querySelector('.tp-submenu');

            if (toggleButton && submenu) {
                toggleButton.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent default anchor click behavior
                    submenu.classList.toggle('show');
                });
            }
        });
    });
</script> --}}
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.has-dropdown');

        menuItems.forEach(item => {
            const toggleButton = item.querySelector('.dropdown-toggle-btn');
            const submenu = item.querySelector('.tp-submenu');

            if (toggleButton && submenu) {
                toggleButton.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent default anchor click behavior
                    submenu.classList.toggle('show');
                    toggleButton.classList.toggle('rotate'); // Toggle the rotation class
                });
            }
        });
    });
</script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuItems = document.querySelectorAll('.has-dropdown');

        menuItems.forEach(item => {
            const toggleButton = item.querySelector('.dropdown-toggle-btn');
            const submenu = item.querySelector('.tp-submenu');

            if (toggleButton && submenu) {
                toggleButton.addEventListener('click', (e) => {
                    e.preventDefault(); // Prevent default anchor click behavior
                    submenu.classList.toggle('show');
                    toggleButton.classList.toggle('rotate'); // Toggle the rotation class
                });
            }
        });
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var mySwiper = new Swiper(".swiper-container", {
            direction: "horizontal", // or 'vertical'
            loop: true,
            centeredSlides: true,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            // Autoplay
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // Use slide or fade transition effect
            speed: 2000,
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11.1.0/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- Add jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Add Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1024: {
                    items: 3,
                },
                1060: {
                    items: 4,
                }
            },
        });
    });
</script>
