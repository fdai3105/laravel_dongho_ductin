<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="my-modal-{{$order->id}}">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div onclick="displayModal(false,'{{$order->id}}')" class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="w-9/12 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle">
            <div class="px-4 py-5">
                <p class="mb-4 text-gray-600 text-lg font-bold">Detail order</p>

                <div class="flex flex-row">
                    <!-- column 1 -->
                    <div class="flex flex-grow flex-col mr-4">
                        <!-- Detail Table -->
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full table-fixed">
                                <!-- header -->
                                <thead class="bg-gray-200 text-gray-600">
                                    <tr>
                                        <th class="w-1 px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            ID
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Name
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Price
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Quantity
                                        </th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                            Total
                                        </th>
                                    </tr>
                                </thead>

                                <!-- body -->
                                <tbody class="bg-white">
                                    @foreach($order->orderDetail as $detail)
                                    <tr>
                                        <td class="px-6 py-4 ">
                                            <div class="text-base text-gray-900">{{ $detail->id }}</div>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <div class="text-base text-gray-900">{{ $detail->product->name }}</div>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <div class="text-base text-gray-900">{{ $detail->product->price }}</div>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <div class="text-base text-gray-900">{{ $detail->quality}}</div>
                                        </td>
                                        <td class="px-6 py-4 ">
                                            <div class="text-base text-gray-900">{{ $detail->total }}</div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="5" class="px-6 py-4 text-right">
                                            <div class="text-lg font-semibold text-gray-600">Total bill: {{ $order->total }}</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- column 2 -->
                    <div class="flex flex-shrink flex-col mr-4">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <div class="w-full px-6 py-3 bg-gray-200">
                                <p class="text-xs font-medium text-center text-gray-600 uppercase tracking-wider">User</p>
                            </div>
                            <div class="px-6 py-2 flex flex-row ">
                                <p class="font-semibold text-gray-600">Name: &nbsp;</p>
                                <p>{{ $order->user->full_name }}</p>
                            </div>
                            <div class="px-6 py-2 flex flex-row ">
                                <p class="font-semibold text-gray-600">Phone number: &nbsp;</p>
                                <p>{{ $order->user->phone }}</p>
                            </div>
                            <div class="px-6 py-2 flex flex-row ">
                                <p class="font-semibold text-gray-600">Email:&nbsp; </p>
                                <p>{{ $order->user->email }}</p>
                            </div>
                            <div class="px-6 py-2 flex flex-row ">
                                <p class="font-semibold text-gray-600">Date: &nbsp;</p>
                                <p>{{ $order->create_at }}</p>
                            </div>
                            <div class="px-6 py-2 flex flex-row">
                                <p class="font-semibold text-gray-600">Address: &nbsp;</p>
                                <div class="flex flex-row divide-x divide-gray-400">
                                    <ul class="list-inside list-disc">
                                        <li>{{ $order->address->city }}</li>
                                        <li>{{$order->address->district }}</li>
                                        <li>{{ $order->address->ward }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- actions  -->
                <div class="mt-10 flex flex-row-reverse">
                    <button type="button" onclick="displayModal(false,'{{$order->id}}')" class="px-4 py-2 justify-center rounded-md text-base font-medium text-gray-600 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>