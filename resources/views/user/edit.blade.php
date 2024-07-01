@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="grid grid-cols-2 mb-3">
        <h1 style="font-size: 30px; font-weight: bold;">Edit User</h1>
    </div>
    <div class="max-w-xl rounded overflow-hidden shadow-lg bg-white mt-2">
        <div class="px-5 mt-5">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('user.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                    <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>
                </div>

                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">Update User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
