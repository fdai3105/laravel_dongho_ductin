@extends('layouts.master')

<div class="bg h-screen w-screen relative flex items-center justify-center">
    <div class="bg-green-900 w-5/12 h-4/6 rounded-xl transform rotate-2">
    </div>

    <div class="bg-white w-1/3 h-1/2 absolute rounded-xl shadow-xl flex flex-col items-center justify-center">
        <p class="mb-4 text-gray-900 text-lg font-bold">Register</p>
        <form action="{{ route('register') }}" method="POST" class="w-full px-10 flex flex-col items-center justify-center">
            @csrf

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @if($errors->any())
            <div class="row collapse">
                <ul class="alert-box warning radius">
                    @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <input type="text" name="name" placeholder="Your full name" class="mb-3 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">

            <input type="text" name="email" placeholder="Enter your email" class="mb-3 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">

            <input type="password" name="password" placeholder="Enter your password" class="mb-3 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">

            <input type="password" name="password_confirmation" placeholder="Enter your password again" class="mb-3 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">


            <button type="submit" class="bg-white px-4 py-2 rounded-xl self-end border-2 border-green-900 focus:outline-none
            hover:bg-green-900 hover:text-white">
                Submit
            </button>
        </form>
    </div>
</div>

<!-- <form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">Đăng ký</button>
        </div>
    </div>
</form> -->