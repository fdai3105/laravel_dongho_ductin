@extends('layouts.master')

@section('content')
<div class="flex flex-row">
    @include('commons.sidebar')

    <div class="w-screen h-screen p-10 bg-gray-100">
        <div class="h-full relative">
            <div class="h-full bg-green-800 transform -skew-y-6 sm:skew-y-0 sm:-rotate-2 sm:rounded-3xl">
            </div>
            @yield('body')
        </div>
    </div>
</div>
@endsection('content')