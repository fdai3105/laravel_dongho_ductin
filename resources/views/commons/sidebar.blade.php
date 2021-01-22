<div class="w-1/6 h-screen bg-white">
    <div class="flex items-center justify-center p-6">
        <img class="h-6" src="https://premium-tailwindcomponents.netlify.app/assets/svg/tailwindcomponent-dark.svg">
    </div>

    <nav class="mt-10 px-2">
        <a class="flex items-center py-2 px-4 rounded-lg {{ request()->is('admin') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}" href="{{route('dashboard')}}">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="mx-4 font-medium">Dashboard</span>
        </a>

        <div>
            <a class="flex items-center mt-5 py-2 px-4 rounded-lg {{ request()->is('admin/product') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }} {{ request()->is('admin/style') || request()->is('admin/gender') || request()->is('admin/material') || request()->is('admin/band_material') ? 'bg-gray-200 text-green-900' : '' }}" href="{{route('product.index')}}">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>

                <span class="mx-4 font-medium">Product</span>
            </a>

            <!-- children -->
            <a href="{{route('style.index')}}" class="flex items-center mt-1 ml-5 py-1 px-4 rounded-lg {{ request()->is('admin/style') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}">
                <span class="mx-4 font-medium">Style</span>
            </a>
            <a href="{{route('gender.index')}}" class="flex items-center mt-1 ml-5 py-1 px-4 rounded-lg {{ request()->is('admin/gender') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}">
                <span class="mx-4 font-medium">Gender</span>
            </a>
            <a href="{{route('material.index')}}" class="flex items-center mt-1 ml-5 py-1 px-4 rounded-lg {{ request()->is('admin/material') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}">
                <span class="mx-4 font-medium">Material</span>
            </a>
            <a href="{{route('band_material.index')}}" class="flex items-center ml-5 mt-1 py-1 px-4 rounded-lg {{ request()->is('admin/band_material') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}">
                <span class="mx-4 font-medium">Band material</span>
            </a>
        </div>

        <a class="flex items-center  mt-5 py-2 px-4 rounded-lg {{ request()->is('admin/brand') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}" href="{{route('brand.index')}}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
            </svg>

            <span class="mx-4 font-medium">Brand</span>
        </a>

        <a class="flex items-center  mt-5 py-2 px-4 rounded-lg {{ request()->is('admin/category') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}" href="{{route('category.index')}}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
            </svg>

            <span class="mx-4 font-medium">Category</span>
        </a>

        <a class="flex items-center  mt-5 py-2 px-4 rounded-lg {{ request()->is('admin/order') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}" href="{{route('order.index')}}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>

            <span class="mx-4 font-medium">Order</span>
        </a>

        <a class="flex items-center  mt-5 py-2 px-4 rounded-lg {{ request()->is('admin/user') ? 'bg-green-900 text-gray-100' : 'text-gray-600 hover:bg-gray-200 hover:text-green-900' }}" href="{{route('user.index')}}">
            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>

            <span class="mx-4 font-medium">User</span>
        </a>
    </nav>

    <div class="absolute bottom-0 my-10">
        <a class="flex items-center py-2 px-8 text-gray-500 hover:text-gray-600" href="{{ route('logout') }}">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M18 10C18 14.4183 14.4183 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10ZM10 7C9.63113 7 9.3076 7.19922 9.13318 7.50073C8.85664 7.97879 8.24491 8.14215 7.76685 7.86561C7.28879 7.58906 7.12543 6.97733 7.40197 6.49927C7.91918 5.60518 8.88833 5 10 5C11.6569 5 13 6.34315 13 8C13 9.30622 12.1652 10.4175 11 10.8293V11C11 11.5523 10.5523 12 10 12C9.44773 12 9.00001 11.5523 9.00001 11V10C9.00001 9.44772 9.44773 9 10 9C10.5523 9 11 8.55228 11 8C11 7.44772 10.5523 7 10 7ZM10 15C10.5523 15 11 14.5523 11 14C11 13.4477 10.5523 13 10 13C9.44772 13 9 13.4477 9 14C9 14.5523 9.44772 15 10 15Z" fill="currentColor" />
            </svg>

            <span class="mx-4 font-medium">Logout</span>
        </a>
    </div>
</div>