@extends('front.layout.main')
@section('content')
    <main id="packagedetails">
        {{-- <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="contact-sec-two sec-title pb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="main_heading">Contact Us</h1>

                    <div class="col-lg-4 col-md-5 career d-lg-block pr-0">
                        <div class="right-sec">
                            <div class="right-sec-content text-light">
                                {{-- <h2 class="text-white ">Reach Us</h2> --}}
                                <h4 class="text-white fs-5 fw-semibold"><i
                                        class="fa fa-envelope pr-3"></i>&nbsp;contact@junglesafariindia.in</h4>
                                <h4 class="text-white fs-5 fw-semibold"><i class="fa fa-mobile pr-3"></i>&nbsp;
                                    +91-9971717045
                                </h4>
                                <h4 class="text-white fs-5 fw-semibold"><i class="fa fa-mobile pr-3"></i>&nbsp;
                                    +91-9354516643

                                </h4>
                                <h4 class="text-white fs-5 fw-semibold"><i class="fa fa-location-arrow pr-3"></i>
                                    &nbsp;Jungle Safari India <br>
                                    - A-2 Second Floor, Ganesh Nagar,<br> Pandav Nagar Complex <br> Delhi 110092</h4>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 pl-0 contact-form">
                        <div class="left-sec contact-page">
                            <div class="row m-0">
                                <div class="col-lg-10">
                                    <h2 class="title fw-semibold text-color">Send Us A Message!</h2>
                                    <p>Please fill out the request for quote form below and our expert team will get back to
                                        you shortly.</p>
                                    <form class="form-contact" name="career-form" action="" method="POST">
                                        <label>
                                            <i class="fa fa-user"></i>
                                            <span class="form-group">
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Your Name:*">
                                            </span>
                                        </label>
                                        <label>
                                            <i class="fa fa-envelope-open"></i>
                                            <span class="form-group">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Your Email:*">
                                            </span>
                                        </label>
                                        <label>
                                            <i class="fa fa-mobile"></i>
                                            <span class="form-group">
                                                <input type="number" class="form-control" name="mob"
                                                    placeholder="Your Number:*">
                                            </span>
                                        </label>
                                        <label class="mb-0">
                                            <i class="fa fa-comment"></i>
                                            <span class="form-group">
                                                <textarea name="message" row=" 5" cols="20" placeholder="Your Message:" type="text"></textarea>
                                            </span>
                                        </label>

                                        <input type="hidden">
                                        <button class=" type--uppercase button-24 fw-semibold mt-2" type="submit"
                                            name="submit" id="submit">
                                            Submit Now
                                        </button>
                                    </form>

                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <style>
            .right-sec-content h4 {
                font-weight: 300;
            }

            .form-contact input[type],
            .form-contact select,
            .form-contact textarea {
                background: 0 0;
                border: unset;
                border-radius: unset;
                padding-left: 35px;
                width: 100%;
                border-bottom: 1px solid rgba(0, 0, 0, 0.15) !important;
                border-bottom-color: rgba(255, 255, 255, 0.18);
            }

            .form-contact label i {
                position: absolute;
                left: 5px;
                top: 15px;
                opacity: 0.9;
                font-size: 16px;
                line-height: 16px;
                z-index: 1;
                padding: 0;
                color: #234254;
            }

            .form-contact i {
                color: #465064 !important;
            }



            .form-contact label {
                position: relative;
                margin-bottom: 15px;
                padding-top: 5px;
                width: 100%;
            }
        </style>
    </main>
@endsection
