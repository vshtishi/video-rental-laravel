@extends('layouts.app')
@section('content')
    <!--Main layout-->
    <main>
        <div class="container">
            <!--Section: Cards-->
            <section class="ml-5">
                <!-- Heading & Description -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <h1 class="h1 text-left mb-5">All Videos</h1>
                </div>
                <!-- Heading & Description -->

                <!--Grid row-->
                <div class="row wow fadeIn">
                    <!--Grid column-->
                    <div class="col-lg-5 col-xl-4 mb-4">
                        <!--Featured image-->
                        <div class="view overlay rounded z-depth-1-half">
                            <div class="view overlay">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="banner">
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                        <h3 class="mb-3 font-weight-bold dark-grey-text">
                            <strong>Sample Video 1</strong>
                        </h3>
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
                                        <h3 class="modal-title h3 ml-3 mt-5">Video 1</h3>
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
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                        </a>
                        <a href="{{ route('shopping-cart') }}" target="_blank"
                           class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
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
                        <!--DETAILS BUTTON-->
                        <p class="grey-text">
                            <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="#modal2">Details
                                <i class="fas fa-info-circle ml-1"></i>
                            </a>
                        </p>
                        <!-- Modal -->
                        <div class="modal fade" id="modal2" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title h3 ml-3 mt-5">Video 2</h3>
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
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                        </a>

                        <a href="#" target="_blank"
                           class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
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
                        <!--DETAILS BUTTON-->
                        <p class="grey-text">
                            <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="#modal3">Details
                                <i class="fas fa-info-circle ml-1"></i>
                            </a></p>
                        <!-- Modal -->
                        <div class="modal fade" id="modal3" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title h3 ml-3 mt-5">Video 3</h3>
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
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                        </a>

                        <a href="#" target="_blank"
                           class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
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
                            <strong>Sample Video 4</strong>
                        </h3>
                        <!--DETAILS BUTTON-->
                        <p class="grey-text">
                            <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="#modal4">Details
                                <i class="fas fa-info-circle ml-1"></i>
                            </a>
                        </p>
                        <!-- Modal -->
                        <div class="modal fade" id="modal4" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close mr-2 " data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title h3 ml-3 mt-5">Video 4</h3>
                                        <hr>
                                    </div>
                                    <div class="modal-body">
                                        <h6>Details:</h6>
                                        <p> description description description description description description
                                            description description description description description </p>
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
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                        </a>

                        <a href="#" target="_blank"
                           class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
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
                            <strong>Sample Video 5</strong>
                        </h3>
                        <!--DETAILS BUTTON-->
                        <p class="grey-text">
                            <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="#modal5">Details
                                <i class="fas fa-info-circle ml-1"></i>
                            </a></p>
                        <!-- Modal -->
                        <div class="modal fade" id="modal5" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title h3 ml-3 mt-5">Video 5</h3>
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
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                        </a>
                        <a href="#" target="_blank"
                           class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
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
                            <strong>Sample Video 6</strong>
                        </h3>
                        <!--DETAILS BUTTON-->
                        <p class="grey-text">
                            <a href="#" target="_blank" class="btn btn-light" data-toggle="modal" data-target="#modal6">Details
                                <i class="fas fa-info-circle ml-1"></i>
                            </a></p>
                        <!-- Modal -->
                        <div class="modal fade" id="modal6" role="dialog">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div>
                                        <button type="button" class="close mr-2" data-dismiss="modal">&times;</button>
                                        <h3 class="modal-title h3 ml-3 mt-5">Video 6</h3>
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
                        <a href="#" target="_blank"
                           class="btn btn-primary btn-md">Trailer <i class="fas fa-play ml-2"></i>
                        </a>
                        <a href="#" target="_blank"
                           class="btn btn-primary"><i class="fas fa-shopping-cart mr-1"></i> Add to Cart
                        </a>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
                <hr class="mb-5">
                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn mt-5">
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
                            <a class="page-link" href="product_page_2.html">2</a>
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
                            <a class="page-link" href="product_page_2.html" aria-label="Next">
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
