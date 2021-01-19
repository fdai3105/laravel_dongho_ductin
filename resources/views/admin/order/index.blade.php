@extends('admin.index')

@section('body')

<div class="absolute overflow-auto overflow-x-hidden inset-0 p-4 bg-white sm:rounded-3xl shadow-lg">
    <p class="mb-8 text-gray-600 text-xl font-bold">Product ({{count($orders)}} item)</p>

    @if (count($orders) == 0)

    @include('commons.empty_row')

    @else

    <!-- Table -->
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        @foreach($orders as $order)
        @include('admin.order.particles.detail')
        @endforeach
        <table class="min-w-full table-fixed">
            <!-- header -->
            <thead class="bg-gray-50">
                <tr class="text-left text-xs font-thin text-gray-500 tracking-wider">
                    <th class="w-1 px-6 py-3 font-medium">
                        ID
                    </th>
                    <th class="px-6 py-3 font-medium ">
                        Status
                    </th>
                    <th class="px-6 py-3 font-medium">
                        Total
                    </th>
                    <th class="px-6 py-3 font-medium">
                        Note
                    </th>
                    <th class="px-6 py-3 font-medium">
                        Action
                    </th>
                </tr>
            </thead>

            <!-- body -->
            <tbody class="bg-white">
                @foreach($orders as $order)

                <tr class="hover:bg-gray-200 cursor-pointer text-sm font-medium text-gray-600" onclick="displayModal(true,'{{$order->id}}')">
                    <td class="px-6 py-4">
                        #{{ $order->id }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->status }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $order->total }}
                    </td>
                    <td class="px-6 py-4">
                       {{ $order->note }}
                    </td>
                    <td class="px-6 py-4 text-white">
                        <form class="inline" action="<!-- {{ route('order.destroy',$order->id) }} -->" method="POST">
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

<script>
    function displayModal(open = false, id) {
        var modal = document.getElementById("my-modal-" + id);
        open ? modal.classList.remove("hidden") : modal.classList.add("hidden");
        console.log(open);
    }
</script>

@endsection