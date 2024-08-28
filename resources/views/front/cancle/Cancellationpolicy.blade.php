@extends('front.layout.main')
@section('content')
    <style>
        ul {
            list-style-type: square;
        }

        li::marker {
            color: green;
        }

        .cancel-policy>li {
            padding-bottom: 8px;
        }
    </style>
    <main id="packagedetails">
        <section>
            <div class="container ">
                <div class="row">
                    <h1 class="main_heading">Cancellation & Refunds
                    </h1>
                    <div class="col-lg-12 ">

                        <p>Please inform us in writing if you need to cancel or postpone your tour/travel to the National
                            Park for unavoidable reasons. Please note and keep in mind that cancellation charges will apply
                            when we receive your written notification. Make sure to send us your cancellation request in
                            written form. The following cancellation policy will be enforced after we get your text, mail,
                            etc:

                        </p>
                        <ul class="cancel-policy">
                            <li>30 days prior to arrival: 10% of the tour cost.
                            </li>
                            <li>15 to 29 days prior to arrival: 30% of the tour cost.
                            </li>
                            <li> 7 to 14 days prior to arrival: 40% of the tour cost.
                            </li>
                            <li>2 to 6 days prior to arrival: 50% of the tour cost.
                            </li>
                            <li>Less than 48 hours or no show: No refund.
                            </li>
                            <li class="mb-3">If there are any changes in government taxes, hotel charges, safari fees, etc.
                                We will
                                communicate that to our guests via email or phone before the date of travel.
                            </li>
                            <p class="fw-semibold text-danger  bg-white p-1 d-inline"><b>Note:</b> If
                                your
                                safari is
                                not
                                booked
                                due to
                                a
                                technical
                                error or
                                seat
                                unavailability, we will
                                refund the full amount to your bank account.
                            </p>
                            <li class="mt-3">Peak season bookings for festivals like Holi, Diwali, Christmas & New Year
                                have separate
                                cancellation policies, which will be communicated at that time if needed.
                            </li>
                            <li> Hotels and resorts have separate cancellation policies that will be communicated to the
                                guests when needed.
                            </li>
                            <li> Our Liabilities and Limitations: Any increases in permit fees, taxes, fuel costs, or guide
                                charges by the Government of India will be charged separately at the time of arrival.
                            </li>
                            <li>Force Majeure events, strikes, festivals, weather conditions, overbooking of hotels, or
                                entry restrictions at visitation sites may occur. While we will try to arrange suitable
                                alternatives, we are not liable for refunds or compensation claims arising from these
                                situations.
                            </li>
                            <li>Disputes, if any, shall be subject to the exclusive jurisdiction in the courts of New Delhi.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
