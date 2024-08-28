@extends('front.layout.main')
@section('content')
    <main id="destination">

        <div class="container mb-3">

            <h1 class="main_heading text-center">Gallery</h1>
            <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item mb-1" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                        type="button" role="tab" aria-controls="pills-home" aria-selected="true">Gir</button>
                </li>
                <li class="nav-item mb-1" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Jim
                        Corbett</button>
                </li>
                <li class="nav-item mb-1" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact"
                        type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Ranthambore</button>
                </li>
                <li class="nav-item mb-1" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2"
                        type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Tadoba</button>
                </li>
                <li class="nav-item mb-1" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact3"
                        type="button" role="tab" aria-controls="pills-contact3"
                        aria-selected="false">Kaziranga</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 1">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 1" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 2">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 2" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 3">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 3" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 4">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 4" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 5">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 5" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 6">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 6" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 7">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 7" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 8">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 8" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 1">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 1" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 2">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 2" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 3">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 3" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 4">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 4" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 5">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 5" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 6">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 6" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 7">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 7" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 8">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 8" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 1">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 1" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 2">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 2" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 3">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 3" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 4">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 4" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 5">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 5" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 6">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 6" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 7">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 7" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 8">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 8" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 1">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 1" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 2">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 2" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 3">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 3" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 4">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 4" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 5">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 5" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 6">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 6" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 7">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 7" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 8">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 8" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab3">
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 1">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 1" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 2">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 2" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 3">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 3" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 4">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 4" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 5">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 5" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 6">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 6" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 7">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 7" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="gallery-item home">
                                <a href="{{ asset('front/assets/img/HistoryofGir.webp') }}" data-fancybox="gallery"
                                    data-caption="Image 8">
                                    <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="Image 8" />
                                    <div class="gallery-item-overlay">
                                        <i class="bi bi-eye-fill"></i>
                                    </div>
                                </a>
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
        <script>
            $(document).ready(function() {
                $('[data-fancybox="gallery"]').fancybox({
                    // You can customize Fancybox options here
                });
            });
        </script>
    @endpush
@endsection
