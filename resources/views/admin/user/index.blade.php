@extends('admin.index')

@section('body')

<div class="w-screen h-screen p-10 bg-gray-100">
    <div class="h-full relative">
        <div class="h-full bg-green-900  transform -skew-y-6 sm:skew-y-0 sm:-rotate-2 sm:rounded-3xl">
        </div>
        <div class="absolute inset-0 p-4 bg-white sm:rounded-3xl shadow-lg">
            <p class="text-gray-600 text-lg font-bold">User</p>
        </div>
    </div>
</div>

@endsection