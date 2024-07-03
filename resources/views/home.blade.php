@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3>{{ __('Dashboard') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="d-flex flex-column align-items-center">
                        <img src="{{ asset('images/welcome.jpg') }}" class="img-fluid mb-4" alt="Welcome Image" style="max-width: 200px;">
                        <h4>{{ __('You are logged in!') }}</h4>
                        <p class="text-muted">{{ __('Selamat datang.') }}</p>
                        <a href="{{ url('/features') }}" class="btn btn-outline-primary mt-3">{{ __('Explore Features') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
