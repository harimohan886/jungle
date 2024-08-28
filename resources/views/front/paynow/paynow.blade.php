@extends('front.layout.main')
@section('content')
    <section class="pay-now-top">

        <div class="container">
            <div class="row box-pkg-shadow p-3">
                <div class="col">
                    <div class="flora-widget">
                        <h1 class="card_data_title ">Payment Information</h1>
                    </div>
                    <div class="row mt-3">
                        <form>
                            <div class="row mb-1">

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label fw-semibold">Enter
                                        Amount<sup>*</sup></label>
                                    <input type="text" class="form-control custom-placeholder" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Amount">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Enter Name
                                        <sup>*</sup></label>
                                    <input type="text" class="form-control custom-placeholder" id="exampleInputPassword1"
                                        placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="row mb-1">


                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Enter Number
                                        <sup>*</sup></label>
                                    <input type="number" class="form-control custom-placeholder" id="exampleInputPassword1"
                                        placeholder="Enter Number">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label fw-semibold">Enter
                                        Email<sup>*</sup></label>
                                    <input type="email" class="form-control custom-placeholder" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Email">
                                </div>
                            </div>

                            <div class="row mb-1">

                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label fw-semibold">Enter
                                        Zip Code<sup>*</sup></label>
                                    <input type="text" class="form-control custom-placeholder" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Zip Code">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Enter Country
                                        <sup>*</sup></label>
                                    <input type="text" class="form-control custom-placeholder" id="exampleInputPassword1"
                                        placeholder="Enter  Country">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <div class="col-lg-6">
                                    <label for="exampleInputEmail1" class="form-label fw-semibold">Enter
                                        Address<sup>*</sup></label>
                                    <textarea type="text" class="form-control custom-placeholder" id="exampleInputEmail1" aria-describedby="emailHelp">  </textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1" class="form-label fw-semibold">Enter Package Details
                                        <sup>*</sup></label>
                                    <textarea type="text" class="form-control custom-placeholder" id="exampleInputPassword1"></textarea>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary fw-semibold" data-bs-toggle="modal"
                                data-bs-target="#exampleModalpayment">
                                Preview
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Button trigger modal -->

    <style>
        #modal-content-2 {
            background: #fff !important;
        }
    </style>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalpayment" tabindex="-1" aria-labelledby="exampleModalLabelpayment"
        aria-hidden="true">
        <div class="modal-dialog " id="modal-dialog-paynow">
            <div class="modal-content " id="modal-content-2">
                <div class="modal-header pb-sm-0">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <div class="flora-widget">

                            <h3 class="card_data_title ">Preview Your Details</h3>
                        </div>
                    </h5>
                    <button type="button" class="btn-close btn-close-custom" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-square-xmark position-relative "></i></button>
                </div>
                <div class="modal-body d-flex justify-content-center mb-0 pb-0">
                    <table class="table mx-lg-5 table-responsive table-paynow" style="">

                        <tbody>

                            <tr>
                                <th class="text-center border-rightt-pn">Name</th>
                                <td>Testing</td>
                            </tr>
                            <tr>
                                <th class="text-center border-rightt-pn">Email</th>
                                <td>Testing@gmail.com</td>
                            </tr>
                            <tr>
                                <th class="text-center border-rightt-pn">Phone Numer</th>
                                <td>9988776655</td>
                            </tr>
                            <tr>
                                <th class="text-center border-rightt-pn">Zip Code</th>
                                <td>121006</td>
                            </tr>
                            <tr>
                                <th class="text-center border-rightt-pn">Country</th>
                                <td>India</td>
                            </tr>
                            <tr>
                                <th class="text-center border-rightt-pn">Address</th>
                                <td>India, delhi ,faridabad</td>
                            </tr>

                            <tr>
                                <th class="text-center border-rightt-pn">Package Details</th>
                                <td>jdjfdjddbvnv nbcvhdvfjs Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas
                                    aut aperiam esse nostrum voluptas, natus incidunt! Asperiores voluptas iure inventore?
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center border-rightt-pn">Amount</th>
                                <td>55,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row d-flex justify-content-center mb-4">
                    <button type="button" class="btn btn-primary px-2 w-25">Pay Now</button>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
