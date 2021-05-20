@extends('layouts.app')

@section('content')
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card blue-gradient wow fadeIn">

                <!-- Content -->
                <div class="card-body text-white text-center py-1 px-1 my-1" id="slider">
                    <div>
                        <img src="{{ asset('img/video_rental_banner.jpg') }}" class="banner">
                    </div>
                    <div>
                        <img src="{{ asset('img/video_rental_banner.jpg') }}" class="banner">
                    </div>
                    <div>
                        <img src="{{ asset('img/video_rental_banner.jpg') }}" class="banner">
                    </div>
                    <div>
                        <img src="{{ asset('img/video_rental_banner.jpg') }}" class="banner">
                    </div>
                </div>
                    <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            <!--Section: Cards-->
            <section class="pt-5">

                <!-- Heading & Description -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <h2 class="h1 text-center mb-5">What is Video Rental?</h2>
                    <!--Section description-->
                    <p class="text-center">Renting, also known as hiring or letting, is an agreement where a payment is made
                        for the temporary use of a good, service or property owned by another.
                        and apps. </p>
                    <p class="text-center mb-5 pb-5"> A video rental shop/store is a physical business that rents home
                        videos such as movies and prerecorded TV shows.</p>
                </div>
                <!-- Heading & Description -->

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1-half">
                            <div class="view overlay">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-fluid"
                                     alt="">
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>Sample Video 1</strong>
                        </h3>
                        <p class="grey-text">Lorem Ipsum</p>
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Start tutorial
                            <i class="fas fa-play ml-2"></i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="mb-5">

                <!--Grid row-->
                <div class="row mt-3 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1">
                            <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-fluid"
                                 alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>Sample Video 2</strong>
                        </h3>
                        <p class="grey-text">Lorem Ipsum</p>
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Start tutorial
                            <i class="fas fa-play ml-2"></i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="mb-5">

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1">
                            <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-fluid" alt="">
                            <a href="#" target="_blank">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>Sample Video 3</strong>
                        </h3>
                        <p class="grey-text">Lorem Ipsum...</p>
                        <a href="#" target="_blank" class="btn btn-primary btn-md">Start
                            tutorial
                            <i class="fas fa-play ml-2"></i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <hr class="mb-5">

                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue">

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small darken-2 mt-4 wow fadeIn">
        <hr class="my-4">
    </footer>
    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.3.2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#slider').slick({
                autoplay: true,
                autoplaySpeed: 1500,
                dots: false,
                arrows: false,
            });
        });
    </script>

@endsection
