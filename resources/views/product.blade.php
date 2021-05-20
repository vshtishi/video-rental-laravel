@extends('layouts.app')
@section('content')
    <!--Main layout-->
    <main>
        <div class="container">
            <!--Section: Cards-->
            <section class="ml-5">
                <!-- Heading & Description -->
                <div class="wow fadeIn mt-5 mb-5 h1">
                    <!--Section heading-->
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="{{ route('category', ['action']) }}" class="link-dark text-reset">Action</a>/
                        </li>
                        <li class="list-inline-item"><a href="#" class="link-dark text-reset">Action 1</a></li>
                    </ul>
                </div>
                <!-- Heading & Description -->
                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1-half">
                            <div class="view overlay">
                                <img src="{{ asset('img/img_.jpg') }}" class="banner">

                            </div>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <!--DETAILS BUTTON-->
                        <p class="grey-text">
                            <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="#modal1">Details
                                <i class="fas fa-info-circle ml-1"></i>
                            </a>
                        </p>
                        <!-- Modal -->
                        <div class="modal fade" id="modal1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title h3 ml-3 mt-5">Video</h3>
                                        <hr>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Details:</h6>
                                        <p> description description description description description description
                                            description description description description description </p>
                                        <p>description description description description description </p>
                                        <ul>
                                            <li>Year</li>
                                            <li>Actors</li>
                                            <li>....</li>
                                            <li>....</li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--DETAILS BUTTON-->
                        <p><a href="#" target="_blank"
                              class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                            </a>
                        </p>
                        <p>
                            <a href="{{ route('shopping-cart') }}" target="_blank"
                               class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
                            </a>
                        </p>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </section>
        </div>
    </main>
@endsection
@section('footer_scripts')
    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- use for modal  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
@endsection
