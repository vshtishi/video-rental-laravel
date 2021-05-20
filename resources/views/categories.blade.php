@extends('layouts.app')
@section('content')
    <div class="container">
        <section>
            <!-- Heading & Description -->
            <div class="wow fadeIn">
                <!--Section heading-->
                <h1 class="h1 text-center mb-5">Categories</h1>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['adventure']) }}" class="nav-link"> Adventure </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['comedy']) }}" class="nav-link"> Comedy</a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['horror']) }}" class="nav-link"> Horror </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['movies']) }}" class="nav-link">Movies </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['action']) }}" class="nav-link"> Action </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['documentary']) }}" class="nav-link"> Documentary </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['family-and-kids']) }}" class="nav-link">Family & Kids </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['drama']) }}" class="nav-link"> Drama </a></h3>
                            </div>
                            <div class="col-lg-4">
                                <img src="{{ asset('img/video_rental_banner.jpg') }}" class="img-thumbnail">
                                <h3><a href="{{ route('category', ['anime']) }}" class="nav-link"> Anime </a></h3>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </section>
@endsection

@section('footer_scripts')
    <!-- JQuery -->
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous">
    </script>
@endsection
