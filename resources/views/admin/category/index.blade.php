@extends('admin.index')

@section('body')
@include('admin.category.particles.add')

<div class="absolute overflow-auto overflow-x-hidden inset-0 p-4 bg-white sm:rounded-3xl shadow-lg">
    <div class="mb-6 flex justify-between">
        <p class="mb-2 text-gray-600 text-xl font-bold">Category ({{count($categories)}} item)</p>
        <button onclick="displayModal(true)" class="px-4 py-2 group flex items-center text-white text-sm font-medium rounded-md bg-green-800 hover:bg-green-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">
            <svg class="h-5 w-5" fill="currentColor">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z" />
            </svg>
            <span class="font-medium">New</p>
        </button>
    </div>

    @if (count($categories) == 0)

    @include('commons.empty_row')

    @else

    <!-- Table -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <!-- header -->
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Create at
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Update at
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>

                        <!-- body -->
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($categories as $category)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-base text-gray-900">{{ $category->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-base text-gray-900">{{ $category->name }}</div>
                                    <!-- <div class="text-sm text-gray-500">Optimization</div> -->
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">

                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-gray-900">
                                    {{ $category->created_at }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-gray-900">
                                    {{ $category->updated_at }}
                                </td>
                                <td class="px-6 py-4 text-white">
                                    <form class="inline" action="{{ route('category.destroy',$category->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="px-4 py-2 bg-red-700  text-sm font-medium rounded-md">
                                            Delete
                                        </button>
                                    </form>
                                    <button class="px-4 py-2 bg-blue-700  text-sm font-medium rounded-md">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endif
</div>

@endsection