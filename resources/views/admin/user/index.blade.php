@extends('admin.index')

@section('body')

<div class="absolute overflow-auto overflow-x-hidden inset-0 p-4 bg-white sm:rounded-3xl shadow-lg">
    <div class="mb-6 flex justify-between">
        <p class="mb-2 text-gray-600 text-xl font-bold">User ({{count($users)}} users)</p>
    </div>

    @if (count($users) == 0)

    @include('commons.empty_row')

    @else

    <!-- Table -->
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full table-fixed">
            <!-- header -->
            <thead class="bg-gray-50">
                <tr>
                    <th class="w-1 px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        ID
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Level
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Name
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Phone number
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Gender
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Create at
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Last update
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>

            <!-- body -->
            <tbody class="bg-white">
                @foreach($users as $user)
                <tr class="hover:bg-gray-200 cursor-pointer">
                    <td class="px-6 py-4 ">
                        <div class="text-sm font-medium text-gray-600">#{{ $user->id }}</div>
                    </td>
                    <td class="px-6 py-4 ">
                        <div class="text-sm font-medium text-gray-600">
                            @if($user->level == 1)
                            Admin
                            @else
                            User
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4 ">
                        <div class="text-sm font-medium text-gray-600">{{ $user->full_name }}</div>
                    </td>
                    <td class="px-6 py-4 ">
                        <div class="text-sm font-medium text-gray-600">{{ $user->email }}</div>
                    </td>
                    <td class="px-6 py-4 ">
                        <div class="text-sm font-medium text-gray-600">{{ $user->phone }}</div>
                    </td>
                    <td class="px-6 py-4 ">
                        <div class="text-sm font-medium text-gray-600">
                            @if($user->gender == 1)
                            Male
                            @elseif($user->gender == 2)
                            Female
                            @else
                            Other
                            @endif
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-600">
                        {{ $user->created_at }}
                    </td>
                    <td class="px-6 py-4 text-sm font-medium text-gray-600">
                        {{ $user->updated_at }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        <form class="inline" action="" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="px-4 py-2 mr-2 text-sm font-medium rounded-md bg-red-700 hover:bg-red-800 focus:outline-none focus:ring focus:ring-red-600 focus:ring-offset-2">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif
</div>

@endsection