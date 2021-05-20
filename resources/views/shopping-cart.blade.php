@extends('layouts.app')
@section('content')
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Product</th>
                <th class="text-center">Price</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <!--Movie1-->
            <tr>
                <td class="col-sm-8 col-md-6">
                    <div class="media">
                        <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                                      src="https://www.cnet.com/a/img/soqWZZN3F4TLP33JL7bjeWnbtF0=/470x836/2021/01/05/c038963b-027d-40e5-a158-2d0d0617b4e3/black-widow-marvel-poster-crop.jpg"
                                                                      style="width: 120px; height: 120px;"> </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Movie 1</a></h4>
                            <h5 class="media-heading"> Category: <a href="#">Category 1</a></h5>
                            <span>Duration: </span><span class="text-warning"><strong>00:00</strong></span>
                        </div>
                    </div>
                </td>

                <td class="col-sm-1 col-md-1 text-center"><strong>$0.000</strong></td>
                <td class="col-sm-1 col-md-1">
                    <button type="button" class="btn btn-danger">
                        <span class="fa fa-remove"></span> Remove
                    </button>
                </td>
            </tr>
            <!--Movie2-->
            <tr>
                <td class="col-md-6">
                    <div class="media">
                        <a class="thumbnail pull-left " href="#"> <img class="media-object "
                                                                       src="https://lumiere-a.akamaihd.net/v1/images/p_rayaandthelastdragon_21055_48e2d790.jpeg"
                                                                       style="width: 120px; height: 120px;"> </a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="#">Movie2</a></h4>
                            <h5 class="media-heading"> Category: <a href="#">Category2</a></h5>
                            <span>Duration: </span><span class="text-success">00:00</span>
                        </div>
                    </div>
                </td>
                <td class="col-md-1 text-center"><strong>$0.000</strong></td>
                <td class="col-md-1">
                    <button type="button" class="btn btn-danger">
                        <span class="fa fa-remove"></span> Remove
                    </button>
                </td>
            </tr>
            <!--Total Price-->
            <tr>
                <td></td>
                <td><h3>Total </h3></td>
                <td class="text-right"><h3><strong>$0.000&nbsp;&nbsp;&nbsp; </strong></h3></td>
            </tr>
            <!--Buton section-->
            <tr>
                <td><a href="{{ route('all-products') }}">
                        <button type="button" class="btn btn-success"> <!-- <a href="#productPage">      -->
                            <i class="fa fa-arrow-left"></i> Continue Shopping
                        </button>
                    </a>
                </td>
                <td></td>
                <td><a href="{{ route('checkout') }}">
                    <button type="button" class="btn btn-success">
                        <span>Checkout <i class="fa fa-arrow-right"></i></span>
                    </button>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
