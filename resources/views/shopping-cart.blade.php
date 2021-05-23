@extends('layouts.app')
@section('content')
    <div class="col-sm-12 col-md-10 col-md-offset-1">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
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
            @foreach(Cart::content() as $item)
                <tr>
                    <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object"
                                                                          src="{{ asset('img/' . $item->model->photoURL) }}"
                                                                          style="width: 120px; height: 120px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">{{ $item->model->title }}</a></h4>
                                <h5 class="media-heading"> Category: <a href="#">Category 1</a></h5>
                                <span>Duration: </span><span class="text-warning"><strong>{{ $item->model->runtime }}</strong></span>
                            </div>
                        </div>
                    </td>

                    <td class="col-sm-1 col-md-1 text-center"><strong>{{ '$' . $item->model->rentalPrice }}</strong></td>
                    <td class="col-sm-1 col-md-1">
                        <form action="{{ route('shopping-cart-destroy', $item->rowId) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-outline-danger">
                                <span class="fa fa-remove"></span> Remove
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            <!--Total Price-->
            <tr>
                <td></td>
                <td><h4>Total (Tax included): </h4></td>
                <td class="text-right"><h3><strong>{{ Cart::total() }}</strong></h3></td>
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
                <td>
                    @auth
                    <a href="{{ route('checkout') }}">
                        <button type="button" class="btn btn-success">
                            <span>Checkout <i class="fa fa-arrow-right"></i></span>
                        </button>
                    </a>
                    @else
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-success">
                                <span>Checkout <i class="fa fa-arrow-right"></i></span>
                            </button>
                        </a>
                    @endauth
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
