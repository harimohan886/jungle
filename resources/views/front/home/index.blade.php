@extends('front.layout.main')
@section('content')
    <main id="index-page">
        <div class="swiper swiper-scale-effect">
            <!-- Swiper -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="slide-01 swiper-slide-cover"></div>
                        <div class="slider-text-data" data-aos="zoom-in-right" data-aos-easing="linear"
                            data-aos-duration="2000">
                            <h2>
                                Slide 01 Lorem ipsum dolor sit amet .
                            </h2>
                            <p data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="1000">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.

                            </p>
                            <button class="button-24">explore more</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-02 swiper-slide-cover"></div>
                        <div class="slider-text-data" data-aos="zoom-in-right" data-aos-easing="linear"
                            data-aos-duration="2000">
                            <h2>
                                Slide 01 Lorem ipsum dolor sit amet .
                            </h2>
                            <p data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="1000">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.

                            </p>
                            <button class="button-24">explore more</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-03 swiper-slide-cover"></div>
                        <div class="slider-text-data" data-aos="zoom-in-right" data-aos-easing="linear"
                            data-aos-duration="10000">
                            <h2>
                                Slide 01 Lorem ipsum dolor sit amet .
                            </h2>
                            <p data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="1000">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.

                            </p>
                            <button class="button-24">explore more</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-04 swiper-slide-cover"></div>
                        <div class="slider-text-data" data-aos="zoom-in-right" data-aos-easing="linear"
                            data-aos-duration="6000">
                            <h2>
                                Slide 01 Lorem ipsum dolor sit amet .
                            </h2>
                            <p data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="1000">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.

                            </p>
                            <button class="button-24">explore more</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-05 swiper-slide-cover"></div>
                        <div class="slider-text-data" data-aos="zoom-in-right" data-aos-easing="linear"
                            data-aos-duration="8000">
                            <h2>
                                Slide 01 Lorem ipsum dolor sit amet .
                            </h2>
                            <p data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="1000">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.

                            </p>
                            <button class="button-24">explore more</button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-06 swiper-slide-cover"></div>
                        <div class="slider-text-data" data-aos="zoom-in-right" data-aos-easing="linear"
                            data-aos-duration="10000">
                            <h2>
                                Slide 01 Lorem ipsum dolor sit amet .
                            </h2>
                            <p data-aos="zoom-in-right" data-aos-easing="linear" data-aos-duration="1000">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.

                            </p>
                            <button class="button-24">explore more</button>
                        </div>
                    </div>

                </div>
                <!-- Add pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add navigation arrows -->

            </div>
        </div>
        {{-- <section class="data-img-banner">

        </section> --}}
        <section>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="main_heading">Indian Wild life Tour Packages</h2>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt officiis aspernatur at ipsam
                        accusamus
                        sed quas, alias voluptas reprehenderit possimus neque quidem, ab culpa veritatis excepturi eius
                        aliquam
                        velit, facere deleniti maxime? Incidunt laudantium praesentium illum non delectus minima modi eaque
                        commodi
                        amet maiores voluptatum ratione, dolores soluta eum necessitatibus voluptas, atque, accusantium
                        iusto
                        magnam
                        nobis omnis facere cupiditate sequi ut. Molestias pariatur vero nulla a consequuntur beatae quo
                        explicabo
                        reiciendis aperiam, perspiciatis earum mollitia aliquid blanditiis laborum sit consectetur accusamus
                        quos,
                        doloribus at eligendi impedit itaque rem fugiat esse! Ratione cum soluta quam veritatis dignissimos,
                        voluptates sequi! Culpa, quasi?
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit adipisci minima excepturi tempore
                        quos,
                        aperiam, unde nostrum animi totam magni, dolorum aspernatur soluta at nihil recusandae! Mollitia
                        commodi
                        unde repellendus aliquid. Perspiciatis animi necessitatibus cum iste, unde molestiae! Nesciunt,
                        tempora
                        et ab aut quidem consectetur aperiam fugit, consequuntur molestias ullam natus eius repudiandae
                        perspiciatis cum quisquam tenetur architecto eveniet? Earum, nulla laborum. Quae unde vitae neque
                        ducimus impedit, voluptas saepe laboriosam esse reprehenderit
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}" alt="" class="w-100">
                    </div>
                </div>
            </div>
        </section>



        {{-- <section> --}}
        <div class="main-1">
            <h1 class="main_heading text-center mb-3">Best Selling Wild Life Tour Packages</h1>

            <div class="owl-carousel owl-theme overflow-hidden ">
                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider1.jpg') }}" alt="Great Britain" />
                    <div class="overlay">
                        <span>Great Britain</span>
                        <div>
                            <h2> Jim Corbett National Park
                            </h2>
                            <p>12 Popular places</p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider2.jpg') }}" alt="Italy" />
                    <div class="overlay">
                        <span>Italy</span>
                        <div>
                            <h2> Gir National Park
                            </h2>
                            <p>10 Popular places</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="">
                        <img src="{{ asset('front/assets/img/slider/slider3.jpg') }}" alt="United Arab Emirates" />
                        <div class="overlay">
                            <span>jaipur</span>
                            <div>
                                <h2> Ranthambore National Park
                                </h2>
                                <p>10 Popular places</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider4.jpg') }}" alt="France" />
                    <div class="overlay">
                        <span>France</span>
                        <div>
                            <h2>Tadoba National Park</h2>
                            <p>12 Popular places</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider5.jpg') }}" alt="New Zealand" />
                    <div class="overlay">
                        <span>New Zealand</span>
                        <div>
                            <h2> Kaziranga National Park
                            </h2>
                            <p>12 Popular places</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt="Italy" />
                    <div class="overlay">
                        <span>Italy</span>
                        <div>
                            <h2> Pench National Park
                            </h2>
                            <p>12 Popular places</p>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt="Italy" />
                    <div class="overlay">
                        <span>Italy</span>
                        <div>
                            <h2> Jawai National Park

                            </h2>
                            <p>12 Popular places</p>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt="Italy" />
                    <div class="overlay">
                        <span>Italy</span>
                        <div>
                            <h2> Kanha National Park

                            </h2>
                            <p>12 Popular places</p>
                        </div>
                    </div>

                </div>
            </div>
            {{-- </section> --}}

            <section>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col mt-2">
                            <h2 class="main_heading text-center ">WildLife Packages By National Park</h2>
                            <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel atque
                                deleniti
                                impedit
                                eveniet eaque
                                adipisci iste quos consectetur, consequuntur labore.</p>

                            <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Gir</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Ranthambore</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact" type="button" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Corbett</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-tadoba-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-tadoba" type="button" role="tab"
                                        aria-controls="pills-tadoba" aria-selected="false">Tadoba</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-kaziranga-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-kaziranga" type="button" role="tab"
                                        aria-controls="pills-kaziranga" aria-selected="false">kaziranga</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-Pench-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-Pench" type="button" role="tab"
                                        aria-controls="pills-Pench" aria-selected="false">Pench</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-jawai-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-jawai" jawai type="button" role="tab"
                                        aria-controls="pills-jawai" aria-selected="false">jawai</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-Kanha-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-Kanha" jawai type="button" role="tab"
                                        aria-controls="pills-Kanha" aria-selected="false">Kanha</button>
                                </li>

                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider4.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider4.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider4.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider4.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tadoba" role="tabpanel"
                                    aria-labelledby="pills-tadoba-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-kaziranga" role="tabpanel"
                                    aria-labelledby="pills-kaziranga-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider5.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-Pench" role="tabpanel"
                                    aria-labelledby="pills-Pench-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-jawai" role="tabpanel"
                                    aria-labelledby="pills-jawai-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-Kanha" role="tabpanel"
                                    aria-labelledby="pills-Kanha-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
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
            </section>
            <section class="margin-data">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col mt-2">
                            <h2 class="main_heading text-center ">WildLife Tour Packages By Interest</h2>


                            <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link active" id="pills-home1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home1" type="button" role="tab"
                                        aria-controls="pills-home1" aria-selected="true">Tiger Safari</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-profile1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile1" type="button" role="tab"
                                        aria-controls="pills-profile1" aria-selected="false">Elephant Safari</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-contact1" type="button" role="tab"
                                        aria-controls="pills-contact1" aria-selected="false">Rihno Safari</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-tadoba1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-tadoba1" type="button" role="tab"
                                        aria-controls="pills-tadoba1" aria-selected="false">Lion Safari</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-kaziranga1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-kaziranga1" type="button" role="tab"
                                        aria-controls="pills-kaziranga1" aria-selected="false">Bird Watching</button>
                                </li>
                                <li class="nav-item mb-lg-0 mb-1" role="presentation">
                                    <button class="nav-link" id="pills-Pench1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-Pench1" type="button" role="t mb-lg-0 mb-1ab"
                                        aria-controls="pills-Pench1" aria-selected="false">Wildlife Photography</button>
                                </li>


                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home1" role="tabpanel"
                                    aria-labelledby="pills-home1-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile1" role="tabpanel"
                                    aria-labelledby="pills-profile1-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-contact1" role="tabpanel"
                                    aria-labelledby="pills-contact1-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-tadoba1" role="tabpanel"
                                    aria-labelledby="pills-tadoba1-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-kaziranga1" role="tabpanel"
                                    aria-labelledby="pills-kaziranga1-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-Pench1" role="tabpanel"
                                    aria-labelledby="pills-Pench1-tab">
                                    <div class="">
                                        <div class="row mt-4">

                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24 tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="tour-item tour-item--grid" data-plugin="matchHeight">
                                                    <div class="tour-item__thumbnail">
                                                        <a href="">
                                                            <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                                alt="The Dwarka Somnath Gir tour package">
                                                        </a>
                                                        <p class="tour-item__location"><i
                                                                class="fas fa-map-marker-alt mr-2"></i>&nbsp;Gujarat
                                                            Somnath and
                                                            Gir
                                                        </p>
                                                    </div>
                                                    <div class="tour-item__details">
                                                        <span class="tour-item__label">Featured</span>
                                                        <h3 class="tour-item__title "><a href="">The
                                                                Dwarka Somnath Gir tour package</a></h3>

                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div class="tour-item__price">
                                                                <span class="_retail">₹2,200</span>
                                                            </div>
                                                            <a class="button-24  tour-item__view-detail"
                                                                href="">Book Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-jawai1" role="tabpanel"
                                    aria-labelledby="pills-jawai1-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-Kanha1" role="tabpanel"
                                    aria-labelledby="pills-Kanha1-tab">
                                    <div class="">
                                        <div class="row mt-4">
                                            <div class="col-lg-3 col-md-6  col-sm-12">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6  col-sm-12">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6  col-sm-12">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6  col-sm-12">
                                                <div class="card">
                                                    <img src="{{ asset('/front/assets/img/slider/slider6.jpg') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <p class="card-text">Some quick example text to build on the
                                                            card
                                                            title
                                                            and
                                                            make up
                                                            the
                                                            bulk of the card's content.</p>
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
            </section>
            <section>
                <div class="container">
                    <div class="row  mt-sm-1 ">
                        <h2 class="main_heading text-center">Trending National Park In India</h2>
                        <div class="col-lg-12 ">

                            <div class="grid-container">
                                <div class="grid-item item2 "><img class="w-100 h-100"
                                        src="{{ asset('front/assets/img/slider/slider1.jpg') }}" alt=""></div>
                                <div class="grid-item item3 "><img class="w-100 h-100"
                                        src="{{ asset('front/assets/img/slider/slider2.jpg') }}" alt=""></div>
                                <div class="grid-item item4 "><img class="w-100 h-100"
                                        src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt=""></div>
                                <div class="grid-item item3 "><img class="w-100 h-100"
                                        src="{{ asset('front/assets/img/slider/slider4.jpg') }}" alt=""></div>
                                <div class="grid-item item4 "><img class="w-100 h-100"
                                        src="{{ asset('front/assets/img/slider/slider5.jpg') }}" alt=""></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="img-bg">
                <div class="container pb-4">
                    <h2 class="main_heading text-center pt-4">Best Time To Visit Indian National Park</h2>

                    <div class="d-flex align-items-start" id="second-tab-pen">
                        <div class="row ">

                            <div class="col-lg-3 col-md-5 col-sm-12">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">Gir National Park</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">Ranthambore National
                                        Park</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">Corbett National
                                        Park</button>

                                </div>
                            </div>
                            <div class="col-lg-9 col-md-7 col-sm-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing
                                        elit.
                                        Alias dolorum sapiente optio perferendis tempora fugit, aut eum iure reprehenderit.
                                        Voluptatibus
                                        perferendis repellendus, officiis ipsam animi optio, molestiae sint veniam numquam
                                        error,
                                        repudiandae quas ullam vitae nostrum ex accusamus labore iure vero rem dolor et.
                                        Dolores
                                        sapiente voluptate accusantium. Voluptatum rerum perspiciatis nam? Qui iusto nihil
                                        beatae,
                                        pariatur quisquam aut nemo ad maxime, deserunt magnam vel nulla! Alias libero saepe
                                        beatae
                                        culpa
                                        inventore? Assumenda corrupti minus eum ducimus omnis nobis adipisci, sit placeat
                                        quam,
                                        voluptatem iure, sint numquam reprehenderit! Labore officiis ex perspiciatis
                                        suscipit
                                        iusto
                                        fugit deleniti velit. Esse nisi eius ad perspiciatis voluptatem iusto nihil
                                        perferendis
                                        quibusdam cum rerum? Aliquid vel omnis eius nostrum quod ducimus modi repudiandae!
                                        Quidem
                                        voluptatum error et? Excepturi facere rem deleniti esse neque blanditiis a minus vel
                                        laboriosam.
                                        Repellat nemo, aliquam optio placeat distinctio? Non explicabo adipisci esse maxime
                                        minima
                                        debitis
                                        veniam quidem sequi cumque dolor voluptatibus voluptas eum qui soluta ullam,
                                        consequuntur ex
                                        fuga similique perferendis inventore incidunt vitae. Est perferendis similique
                                        blanditiis
                                        . Rem?</div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing
                                        elit.
                                        Molestiae quisquam corrupti, voluptas vel dolorum ipsam rem doloremque voluptate
                                        praesentium
                                        vero veniam qui alias architecto odit maiores accusamus harum est, eveniet quibusdam
                                        quos!
                                        Nemo
                                        eligendi recusandae voluptate distinctio, eaque totam voluptatum harum modi impedit,
                                        ut,
                                        eius
                                        quibusdam porro necessitatibus consequuntur. Accusamus temporibus ab reiciendis nemo
                                        dolores
                                        vero ducimus maxime animi quasi, molestias enim ex iste, nisi quis corporis
                                        voluptate
                                        cum
                                        quam.
                                        Est nostrum necessitatibus labore perferendis accusantium sapiente at hic! Ducimus
                                        illo
                                        blanditiis recusandae mollitia quidem dolor id, expedita minus molestiae enim animi
                                        praesentium
                                        voluptas soluta facere, beatae quaerat pariatur quos, a laborum. Numquam sed quis
                                        voluptates
                                        a.
                                        Velit dolorem molestiae laboriosam corporis illo id tempora minima labore repellat
                                        impedit!
                                        Eligendi sequi, assumenda, minus vitae labore explicabo accusantium a itaque illo
                                        molestias,
                                        corrupti nemo iste. Exercitationem fugiat, asperiores consectetur, dolore facilis
                                        fuga
                                        atque
                                        vero labore maxime nam nesciunt quas sed numquam, nobis dolorum. Vitae, quis cum?
                                        Eius
                                        nemo,
                                        adipisci voluptate, distinctio ducimus ut quos ipsum repudiandae harum incidunt quod
                                        repellendus
                                        earum perferendis, expedita similique iure! Velit ipsa veniam architecto fugit,
                                        distinctio
                                        modi
                                        dolor doloremque eum necessitatibus fugiat repudiandae, soluta deleniti! Delectus
                                        ipsam
                                        non
                                        laboriosam sequi rerum quia unde molestiae maiores eius?</div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing
                                        elit. Molestiae quisquam corrupti, voluptas vel dolorum ipsam rem doloremque
                                        voluptate
                                        praesentium vero veniam qui alias architecto odit maiores accusamus harum est,
                                        eveniet
                                        quibusdam
                                        quos! Nemo eligendi recusandae voluptate distinctio, eaque totam voluptatum harum
                                        modi
                                        impedit,
                                        ut, eius quibusdam porro necessitatibus consequuntur. Accusamus temporibus ab
                                        reiciendis
                                        nemo
                                        dolores vero ducimus maxime animi quasi, molestias enim ex iste, nisi quis corporis
                                        voluptate
                                        cum quam. Est nostrum necessitatibus labore perferendis accusantium sapiente at hic!
                                        Ducimus
                                        illo blanditiis recusandae mollitia quidem dolor id, expedita minus molestiae enim
                                        animi
                                        praesentium voluptas soluta facere, beatae quaerat pariatur quos, a laborum. Numquam
                                        sed
                                        quis
                                        voluptates a. Velit dolorem molestiae laboriosam corporis illo id tempora minima
                                        labore
                                        repellat
                                        impedit! Eligendi sequi, assumenda, minus vitae labore explicabo accusantium a
                                        itaque
                                        illo
                                        molestias, corrupti nemo iste. Exercitationem fugiat, asperiores consectetur, dolore
                                        facilis
                                        fuga atque vero labore maxime nam nesciunt quas sed numquam, nobis dolorum. Vitae,
                                        quis
                                        cum?
                                        Eius nemo, adipisci voluptate, distinctio ducimus ut quos ipsum repudiandae harum
                                        incidunt
                                        quod
                                        repellendus earum perferendis, expedita similique iure! Velit ipsa veniam architecto
                                        fugit,
                                        distinctio modi dolor doloremque eum necessitatibus fugiat repudiandae, soluta
                                        deleniti!
                                        Delectus ipsam non laboriosam sequi rerum quia unde molestiae maiores eius?</div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit, amet consectetur
                                        adipisicing
                                        elit. Molestiae quisquam corrupti, voluptas vel dolorum ipsam rem doloremque
                                        voluptate
                                        praesentium vero veniam qui alias architecto odit maiores accusamus harum est,
                                        eveniet
                                        quibusdam
                                        quos! Nemo eligendi recusandae voluptate distinctio, eaque totam voluptatum harum
                                        modi
                                        impedit,
                                        ut, eius quibusdam porro necessitatibus consequuntur. Accusamus temporibus ab
                                        reiciendis
                                        nemo
                                        dolores vero ducimus maxime animi quasi, molestias enim ex iste, nisi quis corporis
                                        voluptate
                                        cum quam. Est nostrum necessitatibus labore perferendis accusantium sapiente at hic!
                                        Ducimus
                                        illo blanditiis recusandae mollitia quidem dolor id, expedita minus molestiae enim
                                        animi
                                        praesentium voluptas soluta facere, beatae quaerat pariatur quos, a laborum. Numquam
                                        sed
                                        quis
                                        voluptates a. Velit dolorem molestiae laboriosam corporis illo id tempora minima
                                        labore
                                        repellat
                                        impedit! Eligendi sequi, assumenda, minus vitae labore explicabo accusantium a
                                        itaque
                                        illo
                                        molestias, corrupti nemo iste. Exercitationem fugiat, asperiores consectetur, dolore
                                        facilis
                                        fuga atque vero labore maxime nam nesciunt quas sed numquam, nobis dolorum. Vitae,
                                        quis
                                        cum?
                                        Eius nemo, adipisci voluptate, distinctio ducimus ut quos ipsum repudiandae harum
                                        incidunt
                                        quod
                                        repellendus earum perferendis, expedita similique iure! Velit ipsa veniam architecto
                                        fugit,
                                        distinctio modi dolor doloremque eum necessitatibus fugiat repudiandae, soluta
                                        deleniti!
                                        Delectus ipsam non laboriosam sequi rerum quia unde molestiae maiores eius?</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
            <section class="bg-img-js mt-0">
                <div class="container">
                    <div class="row mx-0 mx-lg-5 mt-0">
                        <h2 class="main_heading text-center pt-4">Remarkable Indian National Parks
                        </h2>

                        <div class="col-lg-12 pb-5">
                            <ul>
                                <li class="fw-bold">Indian National Parks offers adventure in the form of safari that
                                    brings people closer to
                                    nature. Every turn of the safari offers a thrilling sight of wild animals and a scenic
                                    look
                                    at different flora. From the majestic Bengal tigers of Ranthambore and Bandhavgarh to
                                    the
                                    one-horned rhinoceroses of Kaziranga, the National Parks of India offer different animal
                                    sights.
                                </li>
                                <br>
                                <li class="fw-bold">The incredible Indian National Parks are home to different kinds of
                                    animals
                                    and it's proof
                                    of India’s great habitat. People can enjoy the thrill of spotting Asiatic lions in Gir,
                                    the
                                    only place in the world where they roam freely, or the excitement of tracking leopards
                                    in
                                    Jawai. Each safari in the National Parks of India offers a diverse experience, whether
                                    you
                                    are roaming in the dense forests of Jim Corbett or navigating the rugged terrains of
                                    Tadoba,
                                    each safari is an experience to remember.
                                </li>
                                <br>
                                <li class="fw-bold">
                                    Satpura National Park’s natural flowering beauty will make nature lovers fall in love
                                    with
                                    them, while the lush landscapes of Panna and Sariska will give peace to their souls. In
                                    parks like Kanha and Pench, you’ll get the chance to discover the landscapes that
                                    inspired
                                    the famous Rudyard Kipling’s The Jungle Book. While exploring the national parks, you
                                    will
                                    not only explore India’s natural beauty but you'll also learn about the importance of
                                    these
                                    national parks in wildlife conservation.


                                </li>
                                <br>
                                <li class="fw-bold">
                                    People can get a chance to explore India’s biodiversity by enjoying a safari in these
                                    parks.
                                    The National Parks of India promotes tourism in the form of different safari rides so
                                    that
                                    people can enjoy sightings and learn about the importance of the conservation of these
                                    plants and animals. The Forest Department of India allows people to go on rides and
                                    explore
                                    the natural beauty of remarkable Indian National Parks.


                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <div class="row">
                        <h2 class="main_heading text-center">Indian Wild Exploration
                        </h2>
                        <div class="col-lg-12 d-flex">
                            <img src="{{ asset('front/assets/img/lion-icon.png') }}" alt="" height="45px"
                                width="45px" class="me-2 my-2">
                            <p>The Indian National Parks offer wildlife exploration chances by permitting different types of
                                safari to enter these parks. The National Parks are reserved areas and no one can enter them
                                without permission. These parks attract tourists from all over the World and they come here
                                to
                                see the different wild animals and nature lovers come here to find peace in lush greenery.
                                Whoever wants to experience or explore the wild areas of Indian National Park has to get
                                permission from the authorities.
                            </p>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <img src="{{ asset('front/assets/img/lion-icon.png') }}" alt="" height="45px"
                                width="45px" class="me-2 my-2">
                            <p>Permits are given to the public in the form of permission to enter the park. People cannot
                                enter
                                the park in their vehicles. The forest department of India has given permission to certain
                                safaris to enter the park. If you wanna enjoy sightings of wild animals, and birds or you
                                wanna
                                see the natural beauty of these areas then you have to book a safari to enter the park.

                            </p>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <img src="{{ asset('front/assets/img/lion-icon.png') }}" alt="" height="45px"
                                width="45px" class="me-2 my-2">
                            <p>When people book a safari, then a permit is given to them. After showing the permit to the
                                forest
                                office, one can enter these national parks of India. The safari rides are adventurous and
                                people
                                can see the wild animals by going on these rides. One can enjoy a jeep, canter, or elephant
                                safari in these National Parks. Every national park has a different terrain and allows
                                different
                                types of safaris to enter inside. Travellers can book these safaris online from Jungle
                                Safari
                                India.

                            </p>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <img src="{{ asset('front/assets/img/lion-icon.png') }}" alt="" height="45px"
                                width="45px" class="me-2 my-2">
                            <p>While roaming inside the park on safari, people can see a majestic tiger or a playful
                                leopard.
                                They can also spot animals playing near water bodies during the summer. Safaris are
                                adventurous
                                rides that will leave you breathless! National Parks like Ranthambore, Jim Corbett, and
                                Bandhavgarh are not just parks—they’re gateways to a world where nature reigns supreme.
                            </p>
                        </div>
                        <div class="col-lg-12 d-flex">
                            <img src="{{ asset('front/assets/img/lion-icon.png') }}" alt="" height="45px"
                                width="45px" class="me-2 my-2">
                            <p>Whether you’re a nature lover, a photographer, a wildlife enthusiast, or just someone looking
                                for
                                a unique experience, Indian wildlife safaris are a must. But here’s a little insider tip:
                                make
                                sure to book your safari well in advance. Trust me, you don’t want to be the one stuck in a
                                long
                                line or, even worse, miss out on the chance to experience the wild just because there were
                                no
                                seats left. So, plan ahead and book your safaris early from Jungle Safari India.
                            </p>
                        </div>
                    </div>
                </div>

            </section>
            <section>
                <div class="container-fluid ">
                    <div class="row  jungle-boxs-1 pt-3">
                        <h2 class=" text-center text-color-main pb-2">Why Jungle Safari India

                        </h2>
                        <div class="col-lg-5 ">
                            <img src="{{ asset('front/assets/img/slider/slider3.jpg') }}" alt=""
                                height="350px" class=" img-on-mb">
                        </div>
                        <div class="col-lg-7 py-3 text-light pe-lg-5 pe-sm-0 ">
                            <p>Jungle Safari India is a leading Wildlife Tour Company and people can book safaris for
                                various
                                parks from our websites. We are travel agents and assist people in booking safaris for the
                                National Park of India. You can book jeep, canter, elephant and other safaris through our
                                website that provides an easy booking service.

                            </p>
                            <p>We are the best in this industry and assure you that you will enjoy the safaris booked by us
                                a
                                lot. The guides that we provide during safaris have good knowledge of the park. We provide
                                knowledgeable guides in every safari booked by our website and the drivers in our safaris
                                are
                                well trained by the forest department and know the routes of the park inside out. You can
                                enjoy
                                your safari to the fullest if you book it from our website.
                            </p>
                            <p>
                                We have an easy safari booking platform and people can make online bookings from our
                                website. We
                                provide an online booking platform so that travellers can book their safaris from their
                                homes
                                and avoid standing in long queues. Book your safari now and enjoy the sights of different
                                wildlife.

                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="img-bg2">
                <div class="container pb-2">
                    <h2 class="main_heading text-center pt-lg-3 pt-sm-1 ">Our Latest Travel Story</h2>
                    <div class="row">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="blog-card style3" style="border: 1px solid #b9b3b3">
                                <div class="blog-img">
                                    <a href="blog-details.html" class="image-link">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('front/assets/img/slider/slider2.jpg') }}"
                                                alt="blog image" width="100%" height="270px">
                                            <div class="overlay-blogs"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-content px-3 pb-2">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar-days"></i>&nbsp;16 March
                                            2023</a>
                                        <a href="blog-details.html">&emsp;<i class="far fa-comments"></i>&nbsp;2
                                            Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Common financial
                                            strategies for
                                            businesses
                                            budgeting</a></h3>
                                    <p class="blog-text">Business consulting services can benefit your company
                                        by providing
                                        specialized</p>
                                    <button class="btn btn-success">
                                        <a href="blog-details.html" class="link-btn-style2"><i
                                                class="fas fa-plus-circle me-1"></i>Read More</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="blog-card style3" style="border: 1px solid #b9b3b3">
                                <div class="blog-img">
                                    <a href="blog-details.html" class="image-link">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}"
                                                alt="blog image" width="100%" height="270px">
                                            <div class="overlay-blogs"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-content px-3 pb-2">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar-days"></i>&nbsp;16 March
                                            2023</a>
                                        <a href="blog-details.html">&emsp;<i class="far fa-comments"></i>&nbsp;2
                                            Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Common financial
                                            strategies for
                                            businesses
                                            budgeting</a></h3>
                                    <p class="blog-text">Business consulting services can benefit your company
                                        by providing
                                        specialized</p>
                                    <button class="btn btn-success">
                                        <a href="blog-details.html" class="link-btn-style2"><i
                                                class="fas fa-plus-circle me-1"></i>Read More</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ">
                            <div class="blog-card style3" style="border: 1px solid #b9b3b3">
                                <div class="blog-img">
                                    <a href="blog-details.html" class="image-link">
                                        <div class="image-wrapper">
                                            <img src="{{ asset('front/assets/img/slider/slider4.jpg') }}"
                                                alt="blog image" width="100%" height="270px">
                                            <div class="overlay-blogs"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="blog-content px-3 pb-2">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-calendar-days"></i>&nbsp;16
                                            March 2023</a>
                                        <a href="blog-details.html">&emsp;<i class="far fa-comments"></i>&nbsp;2
                                            Comments</a>
                                    </div>
                                    <h3 class="box-title"><a href="blog-details.html">Common financial
                                            strategies for
                                            businesses
                                            budgeting</a></h3>
                                    <p class="blog-text">Business consulting services can benefit your company
                                        by providing
                                        specialized</p>
                                    <button class="btn btn-success">
                                        <a href="blog-details.html" class="link-btn-style2"><i
                                                class="fas fa-plus-circle me-1"></i>Read More</a>
                                    </button>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </section>
    </main>
    @push('scripts')
    @endpush
@endsection
