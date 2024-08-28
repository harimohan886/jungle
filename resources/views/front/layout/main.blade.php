<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Jungle Safari India</title>

    <meta name="title" content="">
    <meta name="description" content="">


    <link rel="stylesheet" href="{{ asset('/front/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/front/assets/vendor/glightbox/css/glightbox.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}">
    <!-- Google Fonts -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/swiper@11.1.0/swiper-bundle.min.css" rel="stylesheet" />
    <!-- Vendor CSS Files -->

    <link href="{{ asset('/front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@flaticon/flaticon@latest/css/flaticon.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Add Owl Carousel CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- Include Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <!-- checkbox  CSS -->

    {{--
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css"
  /> --}}

    {{-- <link
    href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css"
    rel="stylesheet"
  /> --}}



<body>
    @include('front.layout.topbar')
    @include('front.layout.header')
    @yield('content')
    @include('front.layout.footer')




    @include('front.layout.footerScript')

    @stack('scripts')
    {{--
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script> --}}
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var header = document.querySelector('.main-header');

            var scrollThreshold = 0; // Adjust this value as needed

            // Initial styles for the header
            // Add scroll event listener
            window.addEventListener('scroll', function() {
                if (window.scrollY > scrollThreshold) {
                    header.style.backgroundColor = 'white'; // Change background color when scrolled
                    header.style.position = 'fixed';
                    header.style.top = '0';
                    header.style.width = '100%';
                    header.style.zIndex = '1000'; // Ensures the header stays above other content


                } else {
                    header.style.backgroundColor = 'white'; // Reset background color


                }
            });
        });
    </script> --}}
</body>

</html>
