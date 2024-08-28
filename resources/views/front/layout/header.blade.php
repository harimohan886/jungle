<header>

    <div class="main-header d-none d-xl-block d-lg-block"
        style="position: fixed; top:0px; Z-index:999 ; width:100%; background:var(--tp-theme-1);">
        <!-- Desktop Header -->
        <div class="tp-header__top tp-header__he pt-20 pb-20 p-relative ">
            <div class="tp-header-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-3">
                            <div class="main-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('front/assets/img/JSI-Logo.png') }}"
                                        height="60" width="auto" alt="Logo"></a>

                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-9 ">
                            <div class="tp-header ">
                                <div class="tp-header__right d-flex justify-content-end">
                                    <!-- Contacts -->
                                    <div class="tp-header__contact mr-30">
                                        <div class="d-flex align-items-center">
                                            <span class="tp-header__icon"><i class="fa-regular fa-clock"></i></span>
                                            <div class="tp-header__icon-info ml-20">
                                                <label>Sunday Closed</label>
                                                <span>Mon - Sat 9.00 - 18.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-header__contact mr-30">
                                        <div class="d-flex align-items-center">
                                            <span class="tp-header__icon"><i
                                                    class="fa-solid fa-envelope-open"></i></span>
                                            <div class="tp-header__icon-info ml-20">
                                                <label>Email</label>
                                                <span><a
                                                        href="mailto:contact@junglesafariindia.in">contact@junglesafariindia.in</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tp-header__contact">
                                        <div class="d-flex align-items-center">
                                            <span class="tp-header__icon"><i class="fa-solid fa-phone"></i></span>
                                            <div class="tp-header__icon-info ml-20">
                                                <label>Call Us</label>
                                                <span><a href="tel:+91-9971717045">+91-9971717045</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tp-header">
            <div id="header-sticky" class="header-bottom black-bg d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-lg-10">
                            <div class="tp-header__main-menu main-menu">
                                <nav class="tp-main-menu-content">
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>

                                        <li class="has-dropdown"><a href="#">Destinations&nbsp;<i
                                                    class="fa-solid fa-angle-down"></i></a>
                                            <ul class="tp-submenu">
                                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="">Jim
                                                        Corbett National Park </a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto"
                                                        href="{{ route('destination') }}">Gir
                                                        National Park </a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="shop.html">Kaziranga
                                                        National Park </a>
                                                </li>
                                                <hr>

                                                <li class="m-0 p-0"><a class="pt-0 px-auto"
                                                        href="team-details.html">Ranthambore National Park</a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto"
                                                        href="testimonial.html">Tadoba National Park </a>
                                                </li>


                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Holiday Packages&nbsp;<i
                                                    class="fa-solid fa-angle-down"></i></a>
                                            <ul class="tp-submenu">
                                                <li class="m-0 p-0"><a class="pt-0 px-auto"
                                                        href="{{ route('package') }}">Gir
                                                        National Park Holiday Packages</a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="">Jim
                                                        Corbett Holiday Packages </a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="shop.html">Kaziranga
                                                        Holiday Packages </a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto"
                                                        href="team-details.html">Ranthambore Holiday Packages </a>
                                                </li>
                                                <hr>
                                                <li class="m-0 p-0"><a class="pt-0 px-auto"
                                                        href="testimonial.html">Tadoba Holiday Packages </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="has-dropdown"><a href="#">Safari&nbsp;<i
                                                    class="fa-solid fa-angle-down"></i></a>
                                            <ul class="tp-submenu">
                                                <li><a href="{{ route('girsafaripage') }}">Gir Safari Page</a></li>
                                                <hr>
                                                <li><a href="{{ route('jimcorbettsafaripage') }}">Jim
                                                        Corbett Safari Page</a></li>
                                                <hr>
                                                <li><a href="{{ route('kazirangasafaripage') }}">Kaziranga Safari
                                                        Page</a></li>
                                                <hr>
                                                <li><a href="{{ route('ranthanboresafaripage') }}">Ranthambore Safari
                                                        Page</a>
                                                </li>
                                                <hr>
                                                <li><a href="{{ route('tadobasafaripage') }}">Tadoba Safari Page</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown "><a href="{{ route('paynow') }}">Pay Now</a>

                                        </li>
                                        <li class="has-dropdown"><a href="{{ route('about') }}">About </a>

                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        {{-- <li><a href="contact.html">Blogs</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-2" style="overflow: hidden;">
                            <div class="tp-header__right text-end d-flex align-items-center justify-content-end">
                                {{-- <div class="search-img f-left mr-30">
                                    <button class="search-open-btn">
                                        <i class="flaticon-loupe"></i>
                                    </button>
                                </div> --}}

                                <button type="button" class="tp-header__btn tp-btn " data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Plan &nbsp;My
                                    &nbsp;Holidays
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-header d-xl-none d-lg-none pt-20 pb-20">
        <div class="container  ">
            <div id="topbar" class=" fixed-top">

                <div class="container d-flex align-items-center justify-content-center topbar-on-mobile"
                    style="background-color: var(--tp-theme-1);">

                    <div class=" phone-icon">

                        <a href="tel:7289842772" class="color-mob">
                            &nbsp;+91-9971717045 &nbsp;| &nbsp; +91-9354516643
                            &nbsp; </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 ">
                    <div class="main-logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('front/assets/img/JSI-Logo.png') }}"
                                height="60" width="auto" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile__menu d-flex align-items-center justify-content-end">
                        {{-- <button class="search-open-btn mr-30 d-none d-sm-block">
                            <i class="flaticon-loupe"></i>
                        </button> --}}
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight"><a class="tp-menu-bar" href="javascript:void(0)"><i
                                    class="fa-solid fa-bars"></i></a></button>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Offcanvas right</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="tp-main-menu-mobile">
                <nav class="tp-main-menu-content">
                    <ul>
                        <li class="has-dropdown"><a href="index.html" class="">HOME<button
                                    class="dropdown-toggle-btn"><i class="fa-solid fa-angle-right"></i></button></a>
                            <div class="tp-submenu submenu has-homemenu" style="display: none;">
                                <div class="row gx-6 row-cols-1 row-cols-md-2 row-cols-xl-3">
                                    <div class="col homemenu">
                                        <div class="homemenu-thumb mb-15">
                                            <img src="assets/img/menu/home-1.jpg" alt="">
                                            <div class="homemenu-btn">
                                                <a class="tp-menu-btn" href="index.html">View Demo</a>
                                            </div>
                                        </div>
                                        <div class="homemenu-content text-center">
                                            <h4 class="homemenu-title">
                                                <a href="index.html">Home 01</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col homemenu">
                                        <div class="homemenu-thumb mb-15">
                                            <img src="assets/img/menu/home-2.jpg" alt="">
                                            <div class="homemenu-btn">
                                                <a class="tp-menu-btn" href="index-2.html">View Demo</a>
                                            </div>
                                        </div>
                                        <div class="homemenu-content text-center">
                                            <h4 class="homemenu-title">
                                                <a href="index-2.html">Home 02</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="col homemenu">
                                        <div class="homemenu-thumb mb-15">
                                            <img src="assets/img/menu/home-3.jpg" alt="">
                                            <div class="homemenu-btn">
                                                <a class="tp-menu-btn" href="index-3.html">View Demo</a>
                                            </div>
                                        </div>
                                        <div class="homemenu-content text-center">
                                            <h4 class="homemenu-title">
                                                <a href="index-3.html">Home 03</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown dropdown-opened"><a href="index.html" class="">PAGES<button
                                    class="dropdown-toggle-btn"><i class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu" style="display: none;">
                                <li><a href="about.html">About</a></li>
                                <li><a href="team.html">Team</a></li>
                                <li><a href="team-details.html">Team Details</a></li>
                                <li><a href="testimonial.html">Testimonial</a></li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-details.html">Shop-details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="services.html">SERVICES<button
                                    class="dropdown-toggle-btn"><i class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu">
                                <li><a href="services.html">Service</a></li>
                                <li><a href="services-details.html">Service Details</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="project.html">PROJECTS<button
                                    class="dropdown-toggle-btn"><i class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu">
                                <li><a href="project.html">Project</a></li>
                                <li><a href="project-details.html">Project Details</a></li>
                            </ul>
                        </li>
                        <li class="has-dropdown"><a href="our-blog.html">NEWS<button class="dropdown-toggle-btn"><i
                                        class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div> --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel"><a href="{{ route('home') }}"><img
                        src="{{ asset('front/assets/img/JSI-Logo.png') }}" class="height-logo" width="auto"
                        alt="Logo"></a></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="tp-main-menu-mobile">
                <nav class="tp-main-menu-content">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>

                        <li class="has-dropdown" id="homeMenu">
                            <a href="#" class="">Destinations<button class="dropdown-toggle-btn"><i
                                        class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu">
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="">Jim
                                        Corbett National Park </a>
                                </li>

                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="{{ route('destination') }}">Gir
                                        National Park </a>
                                </li>
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="shop.html">Kaziranga
                                        National Park </a>
                                </li>

                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="team-details.html">Ranthambore
                                        National Park</a>
                                </li>
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="testimonial.html">Tadoba National
                                        Park </a>
                                </li>

                            </ul>
                        </li>
                        <li class="has-dropdown" id="pagesMenu">
                            <a href="#" class="">Holiday Packages<button class="dropdown-toggle-btn"><i
                                        class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu">

                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="{{ route('package') }}">Gir
                                        National Park Holiday Packages</a>
                                </li>
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="">Jim
                                        Corbett Holiday Packages </a>
                                </li>
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="shop.html">Kaziranga
                                        Holiday Packages </a>
                                </li>
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="team-details.html">Ranthambore
                                        Holiday Packages </a>
                                </li>
                                <li class="m-0 p-0"><a class="pt-0 px-auto" href="testimonial.html">Tadoba Holiday
                                        Packages </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown" id="pagesMenu">
                            <a href="#" class="">Safari<button class="dropdown-toggle-btn"><i
                                        class="fa-solid fa-angle-right"></i></button></a>
                            <ul class="tp-submenu">

                                <li><a href="{{ route('girsafaripage') }}">Gir Safari Page</a></li>
                                <li><a href="{{ route('jimcorbettsafaripage') }}">Jim
                                        Corbett Safari Page</a></li>
                                <li><a href="{{ route('kazirangasafaripage') }}">Kaziranga Safari
                                        Page</a></li>
                                <li><a href="{{ route('ranthanboresafaripage') }}">Ranthambore Safari
                                        Page</a>
                                </li>
                                <li><a href="{{ route('tadobasafaripage') }}">Tadoba Safari Page</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-dropdown "><a href="{{ route('paynow') }}">Pay Now</a>

                        </li>
                        <li class="has-dropdown"><a href="{{ route('about') }}">About </a>

                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <!-- Other menu items -->
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header pb-0 bg-white">
                <div class="flora-widget">

                    <h5 class=" text-dark card_data_title">Enquiry Now</h5>
                </div>
                <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal"
                    aria-label="Close"><i class="fa-solid fa-square-xmark position-relative "></i></button>
            </div>
            <form action="" class="enquiry-form">
                <div class="modal-body">
                    <div class="row mb-1">

                        <div class="col-lg-12 mb-1">

                            <input type="text" class="form-control custom-placeholder" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Name">
                        </div>
                        <div class="row mb-1 d-flex">
                            <div class="col-lg-6  col-md-6 col-sm-12  mb-1 mb-md-0">
                                <input type="date" class="form-control custom-placeholder" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Select Travel Date">
                            </div>
                            <div class="col-lg-6  col-md-6 col-sm-12 mb-2 mb-md-0">

                                <select name="" id="" placeholder="Select Destination">
                                    <option value="1">Select Destination</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-1">

                            <input type="Email" class="form-control custom-placeholder" id="exampleInputPassword1"
                                placeholder="Enter Email    ">
                        </div>

                        <div class="col-lg-12 mb-1">

                            <input type="text" class="form-control custom-placeholder" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Number">
                        </div>
                        <div class="col-lg-12 mb-1">

                            <input type="text" class="form-control custom-placeholder" id="exampleInputPassword1"
                                placeholder="Enter country   ">
                        </div>
                        <div class="col-lg-12 ">

                            <textarea type="text" class="form-control custom-placeholder" rows="4" id="exampleInputPassword1"
                                placeholder="Post Your Query  "></textarea>
                        </div>
                    </div>
                    <div class="modal-footer mt-0 pt-0">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
