@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3>{{ __('Fitur') }}</h3>
                </div>

                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ url('/user') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Kelola User</h5>
                            </div>
                            <p class="mb-1">Kelola pengguna di aplikasi.</p>
                        </a>
                        <a href="{{ url('/laporans') }}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">Laporan</h5>
                            </div>
                            <p class="mb-1">Kelola laporan yang masuk.</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
