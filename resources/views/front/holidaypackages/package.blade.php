@extends('front.layout.main')
@section('content')
    <main id="destination">

        <section>
            <h1 class="main_heading text-center fw-semibold">Gir National Park holiday Package</h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>Want to spend a good tour of <b>Gir National Park ?</b> Well, we have a variety of Gir tour
                            packages that
                            are made by experts who travel a lot and know what is needed in a package. We want the best
                            for
                            our customers and because of that an experienced team of travellers has made these packages.
                            Our
                            packages include a stay at nice accommodation, tasty food and also the main thing, a safari
                            in
                            Gir National Park. Check our packages and choose the one that suits your budget and travel
                            thinking. No matter which package you choose, you will surely enjoy a nice time in Gir.
                        </p>
                        <span class="data-hide3" style="display: none;">
                            <p>Check out our tour packages that are all about
                                making your trip adventurous and memorable. Our
                                team has made those packages to make sure that our guests are satisfied. The hotel options
                                that
                                we provide in our packages are the best in the area and the food that is offered in those
                                accommodations is very delicious.

                            </p>
                            <p>Furthermore, we provide thrilling safari rides in our tour packages and they are the star of
                                our
                                packages. The safaris we offer in our packages will be led by trained guides who know the
                                flora
                                and fauna of the area well. With knowledgeable drivers and guides, you can spot Asiatic
                                Lions
                                along with other animals while enjoying the thrilling safari ride in Gir National Park. In
                                our
                                packages, you can also go on a Kankai Temple ride so that you will be able to explore the
                                holy
                                and scenic side of this wild park.

                            </p>
                            <p>With all the essentials that are given in our tour packages, we have tried to add everything
                                that
                                is needed in a package. But, here’s what makes us stand out from the rest, these packages
                                are
                                customizable. Yes, you can get these packages customized according to your needs after
                                talking
                                with us. Apart from this, we can also provide a pickup and drop service from the nearest
                                railway
                                or airport on your arrival. Check out our packages and enjoy a fun, thrilling, and
                                adventurous
                                trip in Gir.
                            </p>
                        </span>
                        <a class="fw-bold tg-btn p-1 " href="#" onclick="toggleHiddenContent1(event)">
                            Read more +
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 pkg-filter order-lg-1 order-2">
                        <form action="" method="GET">
                            <label class='line-after '><span class="text-color">Filter</span></label>

                            @csrf
                            <div class="filtercategory">
                                <div class="filtercategory px-2">
                                    <h3 class="pb-2">Price Range</h3>
                                    @php
                                        $minPrice = isset($_GET['min_price']) ? $_GET['min_price'] : 1000;
                                        $maxPrice = isset($_GET['max_price']) ? $_GET['max_price'] : 50000;
                                        $selectedRatings = isset($_GET['rating']) ? $_GET['rating'] : [];
                                    @endphp
                                    <div class="wrapper w-75">
                                        <div class="slider mt-3">
                                            <div class="progress"></div>
                                        </div>
                                        <div class="range-input mb-3">
                                            <input type="range" class="range-min" min="1000" max="50000"
                                                value="{{ $minPrice }}" step="100">
                                            <input type="range" class="range-max" min="1000" max="50000"
                                                value="{{ $maxPrice }}" step="100">
                                        </div>
                                        <div class="price-input my-3">
                                            <div class="field">
                                                <span class="fw-bolder text-dark" style="font-size: 15px;">Min</span>
                                                <input type="number" class="input-min" name="min_price"
                                                    value="{{ $minPrice }}">
                                            </div>
                                            <div class="separator fw-bold text-dark">-</div>
                                            <div class="field">
                                                <span class="fw-bolder text-dark" style="font-size: 15px;">Max</span>
                                                <input type="number" class="input-max" name="max_price"
                                                    value="{{ $maxPrice }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filtercategory px-2">
                                <h3>Filter By Rating</h3>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rating[]" value="5">
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <span>5 rating</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rating[]" value="4">
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <span>4 rating</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rating[]" value="3">
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <span>3 rating</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rating[]" value="2">
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <span>2 rating</span>
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="rating[]" value="1">
                                        <svg class="svg-inline--fa fa-star checked" aria-hidden="true" focusable="false"
                                            data-prefix="fas" data-icon="star" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                            <path fill="currentColor"
                                                d="M316.7 17.8l65.43 132.4l146.4 21.29c26.27 3.796 36.79 36.09 17.75 54.59l-105.9 102.1l25.05 145.5c4.508 26.31-23.23 45.9-46.49 33.7L288 439.6l-130.9 68.7C133.8 520.5 106.1 500.9 110.6 474.6l25.05-145.5L29.72 226.1c-19.03-18.5-8.516-50.79 17.75-54.59l146.4-21.29l65.43-132.4C271.1-6.083 305-5.786 316.7 17.8z">
                                            </path>
                                        </svg><!-- <span class="fa fa-star checked"></span> Font Awesome fontawesome.com -->
                                        <span>1 rating</span>
                                    </label>
                                </div>
                            </div>
                            <div class="filtercategory px-2">
                                <h3>Filter Package By Duration</h3>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="duration[]" value="1 week">
                                        <span>(1-7) Days</span>
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="duration[]" value="2 weeks">
                                        <span>(8-15) Days</span>
                                    </label>
                                </div>

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="duration[]" value="extra week">
                                        <span>(+15) Days</span>
                                    </label>
                                </div>
                            </div>
                            <div class="filtercategory px-2 ">
                                <h3>Filter Package By Destination</h3>


                                <select class="js-select2" multiple="multiple">
                                    <option value="O1" data-badge="">Option1</option>
                                    <option value="O2" data-badge="">Option2</option>
                                    <option value="O3" data-badge="">Option3</option>
                                    <option value="O4" data-badge="">Option4</option>
                                    <option value="O5" data-badge="">Option5</option>
                                    <option value="O6" data-badge="">Option6</option>
                                    <option value="O7" data-badge="">Option7</option>
                                </select>


                            </div>
                            <div class="filtercategory px-2 mt-1 pt-1">
                                <h3>Filter Package By Themes</h3>


                                <select class="js-select21 " multiple="multiple">
                                    <option value="O1" data-badge="">Option1</option>
                                    <option value="O2" data-badge="">Option2</option>
                                    <option value="O3" data-badge="">Option3</option>
                                    <option value="O4" data-badge="">Option4</option>
                                    <option value="O5" data-badge="">Option5</option>
                                    <option value="O6" data-badge="">Option6</option>
                                    <option value="O7" data-badge="">Option7</option>
                                </select>

                            </div>
                            {{-- <div class="filtercategory px-2">
                                <h3>Filter Package By Destination</h3>


                                <select class="js-select2" multiple="multiple">
                                    <option value="O1" data-badge="">Option1</option>
                                    <option value="O2" data-badge="">Option2</option>
                                    <option value="O3" data-badge="">Option3</option>
                                    <option value="O4" data-badge="">Option4</option>
                                    <option value="O5" data-badge="">Option5</option>
                                    <option value="O6" data-badge="">Option6</option>
                                    <option value="O7" data-badge="">Option7</option>
                                </select>


                            </div>
                            <div class="filtercategory px-2 mt-1 pt-1">
                                <h3>Filter Package By Themes</h3>


                                <select class="js-select21 " multiple="multiple">
                                    <option value="O1" data-badge="">Option1</option>
                                    <option value="O2" data-badge="">Option2</option>
                                    <option value="O3" data-badge="">Option3</option>
                                    <option value="O4" data-badge="">Option4</option>
                                    <option value="O5" data-badge="">Option5</option>
                                    <option value="O6" data-badge="">Option6</option>
                                    <option value="O7" data-badge="">Option7</option>
                                </select>

                            </div> --}}
                            <div class="row mt-3 mb-3">
                                <div class="col-6">
                                    <button class="btn filter-btn-apply">Apply filter</button>
                                </div>
                                <div class="col-6">
                                    <a href="" class="btn btn-outline-danger filter-btn-clear ms-5">Clear
                                        Filter</a>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="col-lg-8 order-lg-2 order-1 px-4">
                        <div class="row pkg-filter-1 mb-3">
                            <div class="col-lg-4 col-md-4 p-0 position-relative">
                                <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt=""
                                    height="250px" width="100%">
                                <p class=" text-light position-absolute tag-pkg px-2"><i
                                        class="fa-solid fa-star"></i>&nbsp<i class="fa-solid fa-star"></i>&nbsp;<i
                                        class="fa-solid fa-star"></i>&nbsp;<i class="fa-solid fa-star"></i>&nbsp;<i ;
                                        class="fa-solid fa-star"></i></p>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <h4 class="mt-1 mb-0 text-color-h4">The Dwarka Somnath Gir tour package </h4>


                                <p class="mt-1 para-text mb-sm-3 mb-md-1 mb-lg-3">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Corrupti
                                    minima
                                    vitae fugiat
                                    id
                                    alias praesentium! vitae fugiat
                                    id
                                    alias praesentium!</p>
                                <div class="row  d-flex justify-content-center align-item-center">
                                    <div class="col-lg-12 d-flex justify-content-center ">
                                        <div class="col-lg-3 col-md-3  col-sm-2 text-center">
                                            <img src="{{ asset('front/assets/img/package/Hotel png.png') }}"
                                                alt="" height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Nightstay at resort</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-2  text-center"><img
                                                src="{{ asset('front/assets/img/package/car-PNG.png') }}" alt=""
                                                height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Adventure activities</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-2  text-center"><img
                                                src="{{ asset('front/assets/img/package/Meal.png') }}" alt=""
                                                height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Meals</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3  col-sm-2 text-center"><img
                                                src="{{ asset('front/assets/img/package/Drink.png') }}" alt=""
                                                height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Welcome Drink</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-sm-3 mt-md-1 mt-lg-0">
                                    <div class="col-lg-6  col-sm-6 text-center">
                                        <div class=" pakcg-head">
                                            <h4 class="package-text-rupees">
                                                <span class="fw-semibold fs-2">₹&nbsp;4000<span
                                                        style="font-size:23px">/</span>-</span>
                                                <span><del class="para-text" style="color:rgb(96, 94, 94)">₹4080
                                                        <span style="font-size:17px">/</span></del></span>
                                            </h4>
                                            <article class="text-size ">
                                                Exact prices may vary based on avilablity
                                            </article>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6  d-flex mt-4  col-sm-6 justify-content-center  mb-lg-2 mb-md-2 mb-3">
                                        <div class="mx-2">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="button-25 fw-semibold">
                                                Enquiry Now
                                            </a>
                                        </div>
                                        <div class=" mx-2">
                                            <a href="{{ route('packagedetail') }}" class="button-24 fw-semibold">
                                                Book Now

                                            </a>

                                            <!-- HTML !-->
                                            {{-- <button role="button">Button 24</button> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row pkg-filter-1 mb-3">
                            <div class="col-lg-4 col-md-4 p-0 position-relative">
                                <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt=""
                                    height="250px" width="100%">
                                <p class=" text-light position-absolute tag-pkg px-2"><i
                                        class="fa-solid fa-star"></i>&nbsp<i class="fa-solid fa-star"></i>&nbsp;<i
                                        class="fa-solid fa-star"></i>&nbsp;<i class="fa-solid fa-star"></i>&nbsp;<i ;
                                        class="fa-solid fa-star"></i></p>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <h4 class="mt-1 mb-0 text-color-h4">The Dwarka Somnath Gir tour package </h4>


                                <p class="mt-1 para-text mb-sm-3 mb-md-1 mb-lg-3">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                    Corrupti
                                    minima
                                    vitae fugiat
                                    id
                                    alias praesentium! vitae fugiat
                                    id
                                    alias praesentium!</p>
                                <div class="row  d-flex justify-content-center align-item-center">
                                    <div class="col-lg-12 d-flex justify-content-center ">
                                        <div class="col-lg-3 col-md-3  col-sm-2 text-center">
                                            <img src="{{ asset('front/assets/img/package/Hotel png.png') }}"
                                                alt="" height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Nightstay at resort</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-2  text-center"><img
                                                src="{{ asset('front/assets/img/package/car-PNG.png') }}" alt=""
                                                height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Adventure activities</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-2  text-center"><img
                                                src="{{ asset('front/assets/img/package/Meal.png') }}" alt=""
                                                height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Meals</p>
                                        </div>
                                        <div class="col-lg-3 col-md-3  col-sm-2 text-center"><img
                                                src="{{ asset('front/assets/img/package/Drink.png') }}" alt=""
                                                height="30px" width="30px">
                                            <p class="text-size mb-1 mb-lg-3">Welcome Drink</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-sm-3 mt-md-1 mt-lg-0">
                                    <div class="col-lg-6  col-sm-6 text-center">
                                        <div class=" pakcg-head">
                                            <h4 class="package-text-rupees">
                                                <span class="fw-semibold fs-2">₹&nbsp;4000<span
                                                        style="font-size:23px">/</span>-</span>
                                                <span><del class="para-text" style="color:rgb(96, 94, 94)">₹4080
                                                        <span style="font-size:17px">/</span></del></span>
                                            </h4>
                                            <article class="text-size ">
                                                Exact prices may vary based on avilablity
                                            </article>
                                        </div>
                                    </div>
                                    <div
                                        class="col-lg-6  d-flex mt-4  col-sm-6 justify-content-center  mb-lg-2 mb-md-2 mb-3">
                                        <div class="mx-2">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                class="button-25 fw-semibold">
                                                Enquiry Now
                                            </a>
                                        </div>
                                        <div class=" mx-2">
                                            <a href="{{ route('packagedetail') }}" class="button-24 fw-semibold">
                                                Book Now

                                            </a>

                                            <!-- HTML !-->
                                            {{-- <button role="button">Button 24</button> --}}

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </section>

    </main>
    @push('scripts')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".js-select2").select2({
                    closeOnSelect: false,
                    placeholder: "Select Destinations",
                    allowClear: true,
                    tags: true,
                });
            });
            $(document).ready(function() {
                $(".js-select21").select2({
                    closeOnSelect: false,
                    placeholder: "Select Themes",
                    allowClear: true,
                    tags: true,
                });
            });
        </script>
    @endpush
@endsection
