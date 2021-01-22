@extends('admin.index')

@section('body')
@include('admin.material.particles.create_modal')

<div class="absolute overflow-auto overflow-x-hidden inset-0 p-4 bg-white sm:rounded-3xl shadow-lg">
    <div class="mb-6 flex justify-between">
        <p class="mb-2 text-gray-600 text-xl font-bold">Material ({{count($materials)}} item)</p>
        <button onclick="displayModal(true)" class="px-4 py-2 group flex items-center bg-green-900 text-white text-sm font-medium rounded-md hover:bg-green-700 hover:text-white ">
            <svg class="group-hover:text-light-blue-600 text-light-blue-500 mr-2" width="12" height="20" fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z" />
            </svg>
            <span class="font-medium">New</p>
        </button>
    </div>
    @if (count($materials) == 0)

    @include('commons.empty_row')

    @else

    <!-- Table -->
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full table-fixed">
            <!-- header -->
            <thead class="bg-gray-50">
                <tr class="text-left text-xs font-thin text-gray-500 tracking-wider">
                    <th class="w-1 px-6 py-3 font-medium">
                        ID
                    </th>
                    <th class="px-6 py-3 font-medium ">
                        Name
                    </th>
                    <th class="px-6 py-3 font-medium">
                        Action
                    </th>
                </tr>
            </thead>

            <!-- body -->
            <tbody class="bg-white">
                @foreach($materials as $material)

                <tr class="hover:bg-gray-200 cursor-pointer text-sm font-medium text-gray-600" onclick="displayModal(true)">
                    <td class="px-6 py-4">
                        #{{ $material->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $material->name }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        <form class="inline" action="<!-- {{ route('material.destroy',$material->id) }} -->" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="px-4 py-2 mr-2 text-sm font-medium rounded-md bg-red-700 hover:bg-red-800 focus:outline-none focus:ring focus:ring-red-600 focus:ring-offset-2">
                                Delete
                            </button>
                        </form>
                        <button class="px-4 py-2 text-sm font-medium rounded-md bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring focus:ring-blue-600 focus:ring-offset-2">
                            Edit
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @endif
</div>

@endsection