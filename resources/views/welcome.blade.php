@extends('layouts.app')

@section('content')
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card blue-gradient wow fadeIn">

                <!-- Content -->
                <div class="card-body text-white text-center py-1 px-1 my-1" id="slider">
                    @foreach($products as $product)
                        <div>
                            <img src="{{ asset('img/'.$product->photoURL) }}" class="banner">
                        </div>
                    @endforeach
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

                @foreach($products as $product)
                    <!--Grid row-->
                    <div class="row wow fadeIn">

                        <div class="col-lg-5 col-xl-4 mb-4">
                            <!--Featured image-->
                            <div class="view overlay rounded z-depth-1">
                                <img src="{{ asset('img/'.$product->photoURL) }}" class="banner"
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
                                <strong>{{ $product->title }}</strong>
                            </h3>
                            <!--DETAILS BUTTON-->
                            <p class="grey-text">
                                <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="{{ '#modal'.$loop->iteration }}">Details
                                    <i class="fas fa-info-circle ml-1"></i>
                                </a>
                            </p>
                            <!-- Modal -->
                            <div class="modal fade" id="{{ 'modal'.$loop->iteration }}" role="dialog">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div>
                                            <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
                                            <h3 class="modal-title h3 ml-3 mt-5">{{ $product->title }}</h3>
                                            <hr>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Details:</h6>
                                            <p>{{ $product->description }} </p>
                                            <ul>
                                                <li><strong>Year Of Release: </strong>{{ $product->yearOfRelease }}</li>
                                                <li><strong>Runtime: </strong>{{ $product->runtime }}</li>
                                                <li><strong>Rating: </strong>{{ $product->rating }}</li>
                                                <li><strong>Rental Price: </strong>{{ $product->rentalPrice }}</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href={{ $product->trailerURL }} target="_blank"
                               class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                            </a>
                            <form action="{{ route('shopping-cart-store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->title }}">
                                <input type="hidden" name="price" value="{{ $product->rentalPrice }}"><br>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                    @endforeach

                <hr class="mb-5">
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
