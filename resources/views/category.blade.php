@extends('layouts.app')
@section('content')
    <section class="mb-5">
        <!-- Heading & Description -->
        <div class="wow fadeIn">
            <!--Section heading-->
            <h1 class="h1 text-center mb-5 mt-5">{{ $category[0]->name }}</h1>
            <section>
                <div class="container">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col-lg-4">
                                <img src="{{ asset('img/'.$product->video->photoURL) }}" class="img-thumbnail">
                                <h3><a href="{{ route('product', ['category' => $category[0]->name, 'product' => $product->video->title]) }}" class="nav-link">{{ $product->video->title }} </a></h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!--Pagination-->
            <nav class="d-flex justify-content-center wow fadeIn mt-5">
                <div class="d-flex justify-content-center">
                    {!! $products->links() !!}
                </div>
            </nav>
            <!--Pagination-->
@endsection
@section('footer_scripts')
    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
@endsection
