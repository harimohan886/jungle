@extends('front.layout.main')
@section('content')
    <style>
        ul {
            list-style-type: square;
        }

        .modal-header {
            display: flex;
            justify-content: center !important;
            background: var(--tp-theme-1);
            color: #fff;
            padding: 10px !important;
        }
    </style>
    <main id="packagedetails">
        <section>
            <div class="container">
                <div class="row">
                    <h1 class="main_heading">Apply For Job
                    </h1>
                    <div class="col-lg-12">
                        <p class="fw-semibold"><i>Get an opportunity to work with an enthusiastic and energetic team
                                along with
                                a great
                                opportunity to learn and earn. Get ready to be a part of the fastest-growing wildlife tour
                                company.</i>
                        </p>
                        <div class="flora-widget mt-2">
                            <h4 class=" card_data_title "> Open Positions
                            </h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">

                                <div class="card card-2 text-center mt-4 aos-init  cms-tech" data-aos="fade-up"
                                    data-aos-duration="500">
                                    <span class="pt-0 mt-0   text-end px-2 pb-3 "><b>Exp
                                            :</b> 3 yr</span>
                                    <div class="card__top">
                                        <img alt="Shopify" src="{{ asset('front/assets/img/jobs/icon1.png') }}"
                                            class="img-fluid mb-3 p-0 m-0">
                                    </div>
                                    <div class="card__body pt-0 pb-3 ">
                                        <h4 class="text-color fs-5">Travel Sales Consultant</h4>
                                        <div class="d-flex justify-content-evenly">
                                            <p class="p-0 m-0"><b>Start :</b><br>20-22-2024</p>
                                            <p class="p-0 m-0"><b>End :</b><br>20-22-2025</p>
                                        </div>
                                        <button class="button-24 fw-semibold btn-line-hgt py-2 mt-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal6">apply</button>

                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-6 col-sm-12">

                                <div class="card card-2 text-center mt-4 aos-init  cms-tech" data-aos="fade-up"
                                    data-aos-duration="500">
                                    <span class="pt-0 mt-0   text-end px-2 pb-3 "><b>Exp
                                            :</b> 3 yr</span>
                                    <div class="card__top">
                                        <img alt="Shopify" src="{{ asset('front/assets/img/jobs/icon3.png') }}"
                                            class="img-fluid mb-3 p-0 m-0">
                                    </div>
                                    <div class="card__body pt-0 pb-3 ">
                                        <h4 class="text-color fs-5"> Telesales Executive
                                        </h4>
                                        <div class="d-flex justify-content-evenly">
                                            <p class="p-0 m-0"><b>Start :</b><br>20-22-2024</p>
                                            <p class="p-0 m-0"><b>End :</b><br>20-22-2025</p>
                                        </div>
                                        <button class="button-24 fw-semibold btn-line-hgt py-2 mt-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal6">apply</button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">

                                <div class="card card-2 text-center mt-4 aos-init  cms-tech" data-aos="fade-up"
                                    data-aos-duration="500">
                                    <span class="pt-0 mt-0   text-end px-2 pb-3 "><b>Exp
                                            :</b> 3 yr</span>
                                    <div class="card__top">
                                        <img alt="Shopify" src="{{ asset('front/assets/img/jobs/icon1.png') }}"
                                            class="img-fluid mb-3 p-0 m-0">
                                    </div>
                                    <div class="card__body pt-0 pb-3 ">
                                        <h4 class="text-color fs-5">Travel Sales Consultant</h4>
                                        <div class="d-flex justify-content-evenly">
                                            <p class="p-0 m-0"><b>Start :</b><br>20-22-2024</p>
                                            <p class="p-0 m-0"><b>End :</b><br>20-22-2025</p>
                                        </div>
                                        <button class="button-24 fw-semibold btn-line-hgt py-2 mt-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal6">apply</button>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">

                                <div class="card card-2 text-center mt-4 aos-init  cms-tech" data-aos="fade-up"
                                    data-aos-duration="500">
                                    <span class="pt-0 mt-0   text-end px-2 pb-3 "><b>Exp
                                            :</b> 3 yr</span>
                                    <div class="card__top">
                                        <img alt="Shopify" src="{{ asset('front/assets/img/jobs/icon2.png') }}"
                                            class="img-fluid mb-3 p-0 m-0">
                                    </div>
                                    <div class="card__body pt-0 pb-3 ">
                                        <h4 class="text-color fs-5">Travel Agent (Outbound Process)</h4>
                                        <div class="d-flex justify-content-evenly">
                                            <p class="p-0 m-0"><b>Start :</b><br>20-22-2024</p>
                                            <p class="p-0 m-0"><b>End :</b><br>20-22-2025</p>
                                        </div>
                                        <button class="button-24 fw-semibold btn-line-hgt py-2 mt-3" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal6">apply</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="flora-widget ">
                            <h4 class=" card_data_title  mt-3"> Responsibilities:

                            </h4>
                            <ul class="ps-4">
                                <li> Understand the travel requirements of the guests and suggest to them the best
                                    packages.
                                </li>
                                <li> Should make Jungle Safari/ Hotels and Resorts bookings.</li>
                                <li> Will be responsible for designing itineraries in an intelligent manner.</li>
                                <li> Will be required to negotiate and close the sales.</li>
                                <li> Should be a team player and work towards the direction of the team goals.</li>
                                <li> From time to time research the market and gain intelligence for a particular
                                    destination.</li>
                                <li> Maintain a record of the leads assigned and the responses collected.</li>
                                <li> Advise the customer about the destination related to climate, culture, road
                                    conditions,
                                    etc.</li>
                                <li> Assist with changes to travel arrangements and bookings where required.</li>
                                <li> Achieve monthly targets which may vary from month to month.</li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="flora-widget ">
                            <h4 class=" card_data_title  mt-4">Requirements:


                            </h4>
                            <ul class="ps-4">
                                <li> A minimum of 6 months of experience in sales is a must(in any industry).</li>
                                <li> Experience with the Travel/Tourism industry will be an advantage.</li>
                                <li> Should have excellent convincing skills and communication skills(English or Hindi).
                                </li>
                                <li> Interested to work with Outbound Domestic Process</li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-white pkg-filter">
                    <div class="modal-header">
                        <h5 class="modal-title p-0" id="exampleModalLabel">Travel Sales Consultant</h5>

                        {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                    </div>
                    <div class="d-flex justify-content-around">
                        <p class="p-0 m-0"><b>Start :</b>20-22-2024</p>
                        <p class="p-0 m-0"><b>End :</b>20-22-2025</p>
                    </div>
                    <hr>
                    <div class="modal-body">
                        <div class="row ">

                            <div class="col-lg-12 mb-1">
                                <label for="" class="fw-semibold">Name<span class="estrik">&nbsp;*</span></label>
                                <input type="text" class="form-control custom-placeholder mb-0"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                            </div>

                            <div class="col-lg-12 mb-1">
                                <label for="" class="fw-semibold">Email<span
                                        class="estrik">&nbsp;*</span></label>

                                <input type="Email" class="form-control custom-placeholder  mb-0"
                                    id="exampleInputPassword1" placeholder="Enter Email    ">
                            </div>

                            <div class="col-lg-12 mb-1">
                                <label for="" class="fw-semibold">Mobile Number<span
                                        class="estrik">&nbsp;*</span></label>

                                <input type="text" class="form-control custom-placeholder  mb-0"
                                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Number">
                            </div>
                            <div class="col-lg-12 mb-1">
                                <label for="" class="fw-semibold">Eexperience<span
                                        class="estrik">&nbsp;*</span></label>

                                <input type="text" class="form-control custom-placeholder  mb-0"
                                    id="exampleInputPassword1" placeholder="Enter Your Experience">
                            </div>
                            <div class="col-lg-12 mb-1">
                                <label for="" class="fw-semibold">Resume<span
                                        class="estrik">&nbsp;*</span></label>

                                <input type="file" class="form-control custom-placeholder  mb-0"
                                    id="exampleInputPassword1" placeholder="   ">
                            </div>
                            <div class="col-lg-12 ">
                                <label for="" class="fw-semibold">Message<span
                                        class="estrik">&nbsp;*</span></label>

                                <textarea type="text" class="form-control custom-placeholder  mb-0" rows="3" id="exampleInputPassword1"
                                    placeholder=" Enter Your message here.... "></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer px-2 pt-0 mt-0">
                        <button type="button" class="btn btn-danger py-1" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success py-1">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
