@extends('front.layout.main')
@section('content')
    <style>
        .form-control {
            display: block;
            width: 100%;
            padding: 0.475rem .75rem;
            border-radius: 0;
        }

        .btn {
            --bs-btn-border-radius: 0 !important;
        }

        .estrik {
            color: red;
        }

        ul {
            list-style: circle;

        }

        li::marker {
            color: green;
            font-size: 20px !important;
        }
    </style>
    <main id="packagedetails">
        <section class=" mt-0">
            <div class="container-fluid">

                <div class="row overflow-hidden">
                    <div class="col-lg-4 p-0">
                        <a class="gallery-lightbox" data-fancybox="gallery"
                            href="{{ asset('/front/assets/img/slider/slider2.jpg') }}"
                            data-caption="Description of slider image 2">
                            <img class="img d-none  d-lg-block" src="{{ asset('/front/assets/img/slider/slider2.jpg') }}"
                                alt="Description of slider image 2">
                        </a>
                    </div>
                    <div class="col-lg-4 p-0">
                        <a class="gallery-lightbox" data-fancybox="gallery"
                            href="{{ asset('/front/assets/img/slider/slider1.jpg') }}"
                            data-caption="Description of slider image 1">
                            <img class="img d-none d-lg-block" src="{{ asset('/front/assets/img/slider/slider1.jpg') }}"
                                alt="Description of slider image 1">
                        </a>
                    </div>
                    <div class="col-lg-4 p-0">
                        <a class="gallery-lightbox" data-fancybox="gallery"
                            href="{{ asset('/front/assets/img/slider/slider4.jpg') }}"
                            data-caption="Description of slider image 4">
                            <img class="img" src="{{ asset('/front/assets/img/slider/slider4.jpg') }}"
                                alt="Description of slider image 4">
                        </a>
                    </div>
                </div>


                <div class="row full-line-data">
                    <div class="col-lg-10">
                        <p class="text-light fs-6 fw-semibold  p-1 ps-0 ps-lg-5 m-0"><a href="{{ route('home') }}"
                                class="text-light">Home</a>&nbsp;<i class="fa-solid fa-angle-right  fs-6"></i>&nbsp;The
                            Dwarka Somnath Gir tour package</p>
                    </div>
                </div>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="text-color">The Dwarka Somnath Gir tour package</h3>
                        <p class="m-0 p-0"><i class="fa-solid fa-location-dot"></i>&nbsp; Gujarat Somnath and Gir</p>
                        <div class="row  mt-3 py-4"
                            style="box-shadow: rgba(14, 20, 37, 0.12) 0px 1px 3px 0px, rgba(14, 20, 37, 0.12) 0px 1px 8px 0px !important;}">
                            <div class="col-lg-4 col-md-4 col-sm-12  d-flex   justify-content-center border-ryt "
                                id="mb-xs-5">
                                <i class="fa-solid fa-tags icon-text"></i>
                                <span>
                                    <h6 class="fw-bold">Type</h6>
                                    <p class="p-0 m-0">Family Trip</p>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  d-flex justify-content-center border-ryt"
                                id="mb-xs-5">
                                <i class="fa-solid fa-calendar-days icon-text"></i>
                                <span>
                                    <h6 class="fw-bold">Duration</h6>
                                    <p class="p-0 m-0">5 nights and 6 days</p>
                                </span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12  d-flex justify-content-center" id="mb-xs-5">
                                <i class="fa-solid fa-people-group icon-text"></i>
                                <span>
                                    <h6 class="fw-bold">Group Size</h6>
                                    <p class="p-0 m-0">2 people</p>
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <h4 class="text-color">Description</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae sunt distinctio dicta
                                    deserunt est impedit, enim nostrum tempora quo voluptatem, nesciunt facilis, doloremque
                                    quaerat cum voluptatum incidunt velit quia porro itaque aspernatur magnam similique odit
                                    aliquid maxime. Nesciunt ex numquam tempora rem eveniet perferendis odio quasi, quae at
                                    inventore, dolores praesentium quam officiis nobis exercitationem molestiae a, eos fuga.
                                    Voluptates, quo aliquam laborum sed eos minima debitis saepe illo velit quod? Laudantium
                                    doloremque dicta officiis illo nihil a dolorum consequatur. Laboriosam aspernatur
                                    voluptate aut consequatur corrupti, tempora amet facilis totam accusamus, quod possimus
                                    dolorem perferendis praesentium. Quidem reiciendis cumque odit.</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h4 class="text-color">Highlight</h4>
                            <div class="col-lg-12 ps-5">
                                <ul type="circle ">
                                    <li>Leisure walk at Mall Road / Ridge Road.</li>
                                    <li>Kinnauri style Bhimakali temple, Sarahan.</li>
                                    <li>Explore Kamru Fort and Kamakhya Devi temple in Sangla.</li>
                                    <li>Buddhist Hu-Bu-Lan-Khar Gompa in Kalpa.</li>
                                    <li>Leisure time in Tabo.</li>
                                    <li>Dhankar and Tabo Monasteries, enroute Kaza from Tabo.</li>
                                    <li>Sakya Tangyud Monastery, an ancient Gompa in Kaza.</li>
                                    <li>Day's visit to Ki Kibber.</li>
                                    <li>Lovely views during ride on the Kunzum Pass.</li>
                                    <li>Night stay on the banks of the scenic Chandra Tal.</li>
                                    <li>Bike ride on the high-altitude Rohtang Pass.</li>
                                    <li>Scenic views during bike rides.</li>
                                    <li>Stay in camps.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <h4 class="text-color">Itinerary</h4>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Accordion Item #1
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the first item's accordion body.</strong> It is shown by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <strong>This is the third item's accordion body.</strong> It is hidden by
                                                default, until the collapse plugin adds the appropriate classes that we use
                                                to style each element. These classes control the overall appearance, as well
                                                as the showing and hiding via CSS transitions. You can modify any of this
                                                with custom CSS or overriding our default variables. It's also worth noting
                                                that just about any HTML can go within the <code>.accordion-body</code>,
                                                though the transition does limit overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mt-4 mb-3">
                            <h4 class="text-color">Includes&nbsp;/&nbsp;Excludes</h4>
                            <div class="col-lg-6 include">
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Accommodation</div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Private Cab</div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Breakfasts &amp; Dinners
                                </div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Welcome Drink On Arrival
                                </div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Private Transport</div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Tip or gratuity</div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Parking fees</div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Landing &amp; facility
                                    fees
                                </div>
                                <div class="item"><i class="fa-solid fa-check pe-2"></i>Entry or admission fee
                                </div>
                            </div>
                            <div class="col-lg-6 include">
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Accommodation</div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Private Cab</div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Breakfasts &amp; Dinners
                                </div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Welcome Drink On Arrival
                                </div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Private Transport</div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Tip or gratuity</div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Parking fees</div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Landing &amp; facility
                                    fees
                                </div>
                                <div class="item"><i class="fa-solid fa-xmark pe-2"></i>Entry or admission fee
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <h4 class="text-color">Policies</h4>
                                <p class="bg-data">Customers can cancel this Tour before 5 day(s).</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 d-none d-sm-block mt-md-4">

                        <div class="text-color bg-primary-color p-2 fs-3"><span
                                class="fs-5">Price&nbsp;</span>₹&nbsp;2,200

                        </div>
                        <form class="p-4  pt-3 pkgdetail-form">
                            <div class="mb-1">
                                <label for="" class="form-label fw-semibold">Full Name<span
                                        class="estrik">&nbsp;*</span></label>
                                <input type="text" class="form-control" placeholder="enter name">
                            </div>
                            <div class="mb-1">
                                <label for="" class="form-label fw-semibold">Phone
                                    Number<span class="estrik">&nbsp;*</span></label>
                                <input type="text" class="form-control" placeholder="enter number">
                            </div>
                            <div class="mb-1">
                                <label for="exampleInputEmail1" class="form-label fw-semibold">Email<span
                                        class="estrik">&nbsp;*</span></label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="enter email">
                            </div>

                            <div class="mb-1">
                                <label for="" class="form-label fw-semibold">Address<span
                                        class="estrik">&nbsp;*</span></label>
                                <textarea type="text" class="form-control" placeholder="enter Address" rows="3"></textarea>
                            </div>
                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary  w-100 p-2">SUBMIT REQUEST</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <h4 class="text-color">Tour On Map
                    </h4>
                    <div class="col-lg-12">
                        <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Gujarat%20Somnath%20and%20Gir+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                    href="https://www.gps.ie/">gps vehicle tracker</a></iframe></div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 ">
                        <form id="review-form" action="index.html" method="post" class="review-form-div p-4">
                            <h4 class="text-color">Write Your Review</h4>
                            <div id="rating">
                                <svg class="starpkg" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                    xml:space="preserve" style="fill: #f39c12;">
                                    <polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                    </polygon>
                                </svg>
                                <svg class="starpkg" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                    xml:space="preserve" style="fill: #f39c12;">
                                    <polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                    </polygon>
                                </svg>
                                <svg class="starpkg" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                    xml:space="preserve" style="fill: #f39c12;">
                                    <polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                    </polygon>
                                </svg>
                                <svg class="starpkg" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                    xml:space="preserve" style="fill: #f39c12;">
                                    <polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                    </polygon>
                                </svg>
                                <svg class="starpkg" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px"
                                    xml:space="preserve" style="fill: #808080;">
                                    <polygon
                                        points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566">
                                    </polygon>
                                </svg>
                            </div>

                            <div class="form-group">
                                <label class="control-label fw-semibold" for="review">Your Review:</label>
                                <textarea class="form-control" rows="5" placeholder="Your Reivew" name="review" id="review"></textarea>
                                <span id="reviewInfo" class="help-block pull-right">
                                </span>
                                <label for="name" class="fw-semibold">Name:</label>
                                <input class="form-control" type="text" placeholder="Name" name="name"
                                    id="name" value="">
                            </div>
                            <div class="form-group">
                                <label for="city" class="fw-semibold">City:</label>
                                <input class="form-control" type="text" placeholder="City" name="city"
                                    id="city" value="">
                            </div>
                            <div class="form-group">
                                <label for="email" class="fw-semibold">Email:</label>
                                <input class="form-control" type="text" placeholder="Email" name="email"
                                    id="email" value="">
                            </div>
                            <a href="#" id="submit" class="btn btn-primary">Submit</a>
                            <input id="submitForm" type="submit" style="display:none;">

                        </form>
                        <h4 class="mt-4 text-color">Read what others have said about us:</h4>
                        <div id="review-container">
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <div class="container mt-5 p-0 button-on-mob">
            <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#exampleModal12"
                id="check-availablity">
                Check Available
            </button>
            <style>
                .modal-header {

                    border-top-left-radius: 0 !important;
                    border-top-right-radius: 0 !important;
                }
            </style>
            <!-- Modal -->
            <div class="modal fade mt-3" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="col-lg-12 bg-white">

                            <div class="text-color bg-primary-color p-2 fs-3 modal-header"><span><span
                                        class="fs-5">Price&nbsp;</span>₹&nbsp;2,200
                                </span>
                                <button type="button" class="btn-close fs-6 ps-5" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form class="p-4  pt-3 pkgdetail-form ">
                                <div class="mb-1">
                                    <label for="" class="form-label fw-semibold">Full Name<span
                                            class="estrik">&nbsp;*</span></label>
                                    <input type="text" class="form-control" placeholder="enter name">
                                </div>
                                <div class="mb-1">
                                    <label for="" class="form-label fw-semibold">Phone
                                        Number<span class="estrik">&nbsp;*</span></label>
                                    <input type="text" class="form-control" placeholder="enter name">
                                </div>
                                <div class="mb-1">
                                    <label for="exampleInputEmail1" class="form-label fw-semibold">Email<span
                                            class="estrik">&nbsp;*</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="enter email">
                                </div>

                                <div class="mb-1">
                                    <label for="" class="form-label fw-semibold">Address<span
                                            class="estrik">&nbsp;*</span></label>
                                    <textarea type="text" class="form-control" placeholder="enter name" rows="3"></textarea>
                                </div>
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-primary  w-100 p-2">SUBMIT REQUEST</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
