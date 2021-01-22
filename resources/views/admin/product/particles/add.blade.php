<div class="fixed z-10 inset-0 overflow-y-auto hidden" id="my-modal">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div onclick="displayModal()" class="fixed inset-0 transition-opacity" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

        <div class="w-9/12 inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle">
            <div class="px-4 py-5">
                <form class="m-0 p-0" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
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

                    <div class="flex flex-row">
                        <!-- Column 1 -->
                        <div class="flex flex-1 flex-col mr-4">
                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Name product</label>
                                <input type="text" name="name" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                            </div>

                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Price</label>
                                <input type="number" name="price" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                            </div>

                            <div class="mb-4 flex">
                                <div class="mr-2 flex-1 relative inline-block text-left">
                                    <label class="text-sm font-medium text-gray-700">Category</label>
                                    <div class="mt-2">
                                        <select name="category_id" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                            @foreach($categories as $category)
                                            <div class="px-2 py-2">
                                                <option value="{{$category->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                    {{$category->name}}
                                                </option>
                                            </div>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="ml-2 flex-1 relative inline-block text-left">
                                    <label class="mb-2 text-sm font-medium text-gray-700">Brand</label>
                                    <div class="mt-2">
                                        <select name="brand_id" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                            @foreach($brands as $brand)
                                            <div class="px-2 py-2">
                                                <option value="{{$brand->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                    {{$brand->name}}
                                                </option>
                                            </div>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Desc</label>
                                <textarea type="text" name="desc" class="h-36 mt-2 px-4 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md"></textarea>
                            </div>
                        </div>

                        <!-- Column 2 -->
                        <div class="flex flex-1 flex-col mr-4">
                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Gender</label>
                                <div class="mt-2">
                                    <select name="gender_id" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                        @foreach($genders as $gender)
                                        <div class="px-2 py-2">
                                            <option value="{{$gender->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                {{$gender->name}}
                                            </option>
                                        </div>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Style</label>
                                <div class="mt-2">
                                    <select name="style_id" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                        @foreach($styles as $style)
                                        <div class="px-2 py-2">
                                            <option value="{{$style->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                {{$style->name}}
                                            </option>
                                        </div>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="mr-2 flex-1 relative inline-block text-left">
                                    <label class="mb-2 text-sm font-medium text-gray-700">Material</label>
                                    <div class="mt-2">
                                        <select name="material_id" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                            @foreach($materials as $material)
                                            <div class="px-2 py-2">
                                                <option value="{{$material->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                    {{$material->name}}
                                                </option>
                                            </div>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="ml-2 flex-1 relative inline-block text-left">
                                    <label class="text-sm font-medium text-gray-700">Band material</label>
                                    <div class="mt-2">
                                        <select name="band_material_id" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-1 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500">
                                            @foreach($bands as $band)
                                            <div class="px-2 py-2">
                                                <option value="{{$band->id}}" class="block px-4 py-2 bg-transparent text-sm text-gray-700 focus:outline-none focus:bg-gray-400 hover:bg-current hover:text-gray-900">
                                                    {{$band->name}}
                                                </option>
                                            </div>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="flex mb-4">
                                <div class="mr-2 flex-1 relative inline-block text-left">
                                    <div class="mb-4">
                                        <label class="text-sm font-medium text-gray-700">Size (mm)</label>
                                        <input type="number" name="size" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                                    </div>
                                </div>

                                <div class="mr-2 flex-1 relative inline-block text-left">
                                    <div class="mb-4">
                                        <label class="text-sm font-medium text-gray-700">Waterproof (ATM)</label>
                                        <input type="text" name="waterproof" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Warranty (months)</label>
                                <input type="number" name="warranty" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                            </div>
                        </div>

                        <!-- Column 3 -->
                        <div class="flex flex-1 flex-col">
                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Discount (%)</label>
                                <input type="text" name="discount" class="mt-2 px-4 h-10 w-full
                            border border-gray-300 focus:outline-none focus:ring focus:ring-green-800 focus:border-green-800 shadow text-sm rounded-md">
                            </div>

                            <div class="mb-4">
                                <label class="text-sm font-medium text-gray-700">Image</label>
                                <div class="mt-2 h-80 border border-gray-300 flex justify-center items-center shadow text-sm rounded-md">
                                    <div id="selectedImage" class="w-full h-full p-2 overflow-y-auto grid grid-cols-1 content-start divide-y divide-gray-200 divide-solid">
                                        <!-- placeholder -->
                                        <div class="py-2 relative">
                                            <input name="images[]" type="file" accept="image/*" onchange="onInputImageChange(this)" multiple class="w-full h-full absolute opacity-0">
                                            <div class="w-full flex flex-row text-gray-300">
                                                <div class="w-14 h-14 mr-2 p-4 border-dashed border-4 border-gray-300">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <p class="break-all text-sm font-semibold">Choose image</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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

    function showBrandDropdown() {
        var element = $("#brand-dropdown");
        if (element.hasClass("hidden")) {
            element.removeClass("hidden");
        } else {
            element.addClass("hidden");
        }
        //     var item = document.getElementById("brand-dropdown");
        // open ? item.classList.remove("hidden") : item.classList.add("hidden");
    }

    function showCategoryDropdown() {}

    function onInputImageChange(img) {
        $("#selectedImage").removeClass('opacity-0');
        for (var i = 0; i < img.files.length; i++) {
            var reader = new FileReader()
            var imageName = img.files[i].name;
            reader.onload = function(e) {
                $('#selectedImage').append('<div class="py-2 flex flex-row"><img src ="' + e.target.result + '" class="w-14 h-14 mr-2 object-cover"> </img> <p class="break-all text-sm text-gray-600"> ' + imageName + '</p></div>');
            }
            reader.readAsDataURL(img.files[i])
        }
        $('#hintImage').hide();
    }
</script>