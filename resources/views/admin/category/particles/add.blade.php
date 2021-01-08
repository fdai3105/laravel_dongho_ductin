<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="my-modal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div onclick="displayModal()" class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="px-4 py-5">
                <form class="m-0 p-0" action="{{ route('category.store') }}" method="POST">
                    <!-- <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first_name" class="text-sm font-medium text-gray-700">First name</label>
                            <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 shadow-sm text-sm rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last_name" class="text-sm font-medium text-gray-700">Last name</label>
                            <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 shadow-sm text-sm rounded-md">
                        </div>
                    </div> -->
                    @csrf

                    <div>
                        <label for="last_name" class="text-sm font-medium text-gray-700">Category name</label>
                        <input type="text" name="name" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                    </div>

                    <!-- actions  -->
                    <div class="mt-10 flex flex-row-reverse">
                        <button type="submit" class="px-4 py-2 ml-4 justify-center text-base font-medium text-white rounded-md border border-transparent shadow-sm bg-green-800 hover:bg-green-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-800">
                            Add
                        </button>
                        <button type="button" onclick="displayModal()" class="px-4 py-2 justify-center rounded-md text-base font-medium text-gray-600 bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-200">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function displayModal(open = false) {
        var modal = document.getElementById("my-modal");
        open ? modal.classList.remove("hidden") : modal.classList.add("hidden");
    }
</script>