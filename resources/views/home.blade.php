@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    {{ __('You are logged in ') . auth()->user()->name . '!' }}
=======
                    {{ __('You are logged in!') }}
>>>>>>> origin/Create-Product-Page-Design
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
