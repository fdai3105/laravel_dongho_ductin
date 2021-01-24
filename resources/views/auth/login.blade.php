@extends('layouts.master')

<div class="bg h-screen w-screen relative flex items-center justify-center">
    <div class="bg-green-900 w-2/6 h-1/2 rounded-xl transform rotate-2">
    </div>
    <div class="bg-white w-3/12 h-1/3 absolute rounded-xl shadow-xl flex flex-col items-center justify-center">
        <p class="mb-4 text-gray-900 text-lg font-bold">Login</p>
        <form action="{{ route('login') }}" method="POST" class="w-full px-10 flex flex-col items-center justify-center">
            @csrf

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="text" name="email" placeholder="Enter your email" class="mb-3 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">

            <input type="password" name="password" placeholder="Enter your password" class="mb-3 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">

            <div class="w-full flex justify-end">
                <a href="/register" class="bg-white px-4 py-2 mr-4 rounded-xl self-end border-2 border-green-900 focus:outline-none
            hover:bg-green-900 hover:text-white">
                    Register
                </a>
                <button type="submit" class="bg-green-900 px-4 py-2 rounded-xl self-end border-2 border-green-900 text-white">
                    Login
                </button>
            </div>
        </form>
    </div>
</div>