@extends('layouts.main')

@section('container')
    {{-- Our Products Section --}}
    <section class="bg-white dark:bg-gray-900 xl:min-h-screen">
        <div x-data="{ filterOpen: false }" class="grid max-w-screen-xl mt-20 mx-auto px-6 md:px-12 lg:px-16 lg:grid-cols-10 xl:grid-cols-12">

            {{-- Mobile --}}
            <div class="lg:hidden mb-5">
                {{-- Button for Search and Filter --}}
                <div class="w-full py-5 px-4 justify-between inline-flex border border-primary">
                    <button class="my-auto" @click="filterOpen = !filterOpen" type="button">
                        <div class="items-center justify-center py-2 px-4 text-white bg-primary border border-primary hover:bg-secondary hover:border-secondary hover:shadow-button1 duration-150">Filter</div>
                    </button>
                </div>
                {{-- Search and Filter --}}
                <div x-show="filterOpen" role="dialog" aria-modal="true" class="h-fit -mt-[1px] max-w-sm lg:col-span-3 xl:col-span-3 bg-white border border-primary justify-self-center" >
                    {{-- Search --}}
                    <form action="/products" class="max-w-sm mx-auto">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative mx-5 mt-8">
                            <input type="text" id="search" name="search" class="block w-full p-2.5 text-sm text-gray-900 border border-primary focus:ring-0 focus:border-primary placeholder:text-gray-900 focus:shadow-field duration-200" placeholder="Search" value="{{ request('search') }}">
                            <button type="submit"
                                class="text-white absolute end-0 bottom-0 bg-primary border border-primary font-medium text-sm h-full px-4"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    {{-- Sort By --}}
                    <form action="" class="max-w-sm mx-auto pb-8 border-b border-primary">
                        <div class="mt-5 mx-5" onclick="toggleSortBy()">
                            {{-- Button Dropdown --}}
                            <div class="border border-primary hover:border-secondary text-gray-900 text-sm w-full py-2.5 ps-2.5 inline-flex items-center justify-between select-none cursor-pointer">Sort by <i class="fa-solid fa-chevron-down px-4"></i></div>
                            <!-- Dropdown Menu -->
                            <div id="dropdownSortBy" class="bg-white border border-t-0 border-primary select-none hidden">
                                <ul class="text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Sign
                                            out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                    {{-- Price --}}
                    <form action="" class="max-w-sm mx-auto pb-8 border-b border-primary">
                        <div class="mt-6 mx-5">
                            <h5 class="text-lg font-medium text-gray-900 mb-2">Price</h5>
                            {{-- Minimum Price --}}
                            <label for="minprice" class="block mb-2 text-sm text-gray-900">Minimum
                                Price</label>
                            <div class="flex mb-3">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-primary border border-e-0 border-primary">
                                    <i class="w-3 h-3 fa-solid fa-rupiah-sign text-white"></i>
                                </span>
                                <input type="text" id="minprice" name="minprice"
                                    class="rounded-none border border-primary text-gray-900 focus:ring-0 focus:border-primary placeholder:text-gray-900 focus:shadow-field duration-200 block flex-1 min-w-0 w-full text-sm p-2.5"
                                    placeholder="0">
                            </div>
                            {{-- Maximum Price --}}
                            <label for="maxprice" class="block mb-2 text-sm text-gray-900">Maximum
                                Price</label>
                            <div class="flex">
                                <span
                                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-primary border border-e-0 border-primary">
                                    <i class="w-3 h-3 fa-solid fa-rupiah-sign text-white"></i>
                                </span>
                                <input type="text" id="maxprice" name="maxprice"
                                    class="rounded-none border border-primary text-gray-900 focus:ring-0 focus:border-primary placeholder:text-gray-900 focus:shadow-field duration-200 block flex-1 min-w-0 w-full text-sm p-2.5"
                                    placeholder="∞">
                            </div>
                        </div>
                    </form>
                    {{-- Rating --}}
                    <form action="" class="max-w-sm mx-auto pb-8 border-b border-primary">
                        <div class="mt-6 mx-5">
                            <h5 class="text-lg font-medium text-gray-900 mb-2">Rating</h5>
                            <div class="inline-flex items-center justify-between w-full">
                                <div class="text-secondary">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span>and up</span>
                                </div>
                                <input type="radio"
                                    class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                            </div>
                            <div class="mt-1 inline-flex items-center justify-between w-full">
                                <div class="text-secondary">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span>and up</span>
                                </div>
                                <input type="radio"
                                    class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                            </div>
                            <div class="mt-1 inline-flex items-center justify-between w-full">
                                <div class="text-secondary">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span>and up</span>
                                </div>
                                <input type="radio"
                                    class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                            </div>
                            <div class="mt-1 inline-flex items-center justify-between w-full">
                                <div class="text-secondary">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span>and up</span>
                                </div>
                                <input type="radio"
                                    class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                            </div>
                        </div>
                    </form>
                    {{-- Category --}}
                    <div class="max-w-sm mx-auto">
                        <div class="mt-6 mx-5 pb-6">
                            <h5 class="text-lg font-medium text-gray-900 mb-2">Category</h5>
                            <a href="/products" class="block w-fit mb-2 text-gray-900 hover:underline hover:text-secondary">All Category</a>
                            @foreach ($categories as $category)
                                <a href="/products?category={{ $category->slug }}" class="block w-fit mb-2 text-gray-900 hover:underline hover:text-secondary">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Mobile --}}

            {{-- Search and Filter --}}
            <div class="hidden lg:block h-fit me-5 max-w-sm lg:col-span-3 xl:col-span-3 bg-white border border-primary justify-self-center">
                {{-- Search --}}
                <form action="/products" class="max-w-sm mx-auto">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative mx-5 mt-8">
                        <input type="text" id="search" name="search" class="block w-full p-2.5 text-sm text-gray-900 border border-primary focus:ring-0 focus:border-primary placeholder:text-gray-900 focus:shadow-field duration-200" placeholder="Search" value="{{ request('search') }}">
                        <button type="submit" class="text-white absolute end-0 bottom-0 bg-primary border border-primary font-medium text-sm h-full px-4"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>
                {{-- Sort By --}}
                <form action="" class="max-w-sm mx-auto pb-8 border-b border-primary">
                    <div class="mt-5 mx-5" onclick="toggleDropdown()">
                        {{-- Button Dropdown --}}
                        <div class="border border-primary hover:border-secondary text-gray-900 text-sm w-full py-2.5 ps-2.5 inline-flex items-center justify-between select-none cursor-pointer">Sort by <i class="fa-solid fa-chevron-down px-4"></i></div>
                        <!-- Dropdown Menu -->
                        <div id="dropdownContent" class="bg-white border border-t-0 border-primary select-none hidden">
                            <ul class="text-sm text-gray-700 dark:text-gray-200">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-gray-900 hover:bg-secondary hover:text-white">Sign
                                        out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
                {{-- Price --}}
                <form action="" class="max-w-sm mx-auto pb-8 border-b border-primary">
                    <div class="mt-6 mx-5">
                        <h5 class="text-lg font-medium text-gray-900 mb-2">Price</h5>
                        {{-- Minimum Price --}}
                        <label for="minprice" class="block mb-2 text-sm text-gray-900">Minimum
                            Price</label>
                        <div class="flex mb-3">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-primary border border-e-0 border-primary">
                                <i class="w-3 h-3 fa-solid fa-rupiah-sign text-white"></i>
                            </span>
                            <input type="text" id="minprice" name="minprice"
                                class="rounded-none border border-primary text-gray-900 focus:ring-0 focus:border-primary placeholder:text-gray-900 focus:shadow-field duration-200 block flex-1 min-w-0 w-full text-sm p-2.5"
                                placeholder="0">
                        </div>
                        {{-- Maximum Price --}}
                        <label for="maxprice" class="block mb-2 text-sm text-gray-900">Maximum
                            Price</label>
                        <div class="flex">
                            <span
                                class="inline-flex items-center px-3 text-sm text-gray-900 bg-primary border border-e-0 border-primary">
                                <i class="w-3 h-3 fa-solid fa-rupiah-sign text-white"></i>
                            </span>
                            <input type="text" id="maxprice" name="maxprice"
                                class="rounded-none border border-primary text-gray-900 focus:ring-0 focus:border-primary placeholder:text-gray-900 focus:shadow-field duration-200 block flex-1 min-w-0 w-full text-sm p-2.5"
                                placeholder="∞">
                        </div>
                    </div>
                </form>
                {{-- Rating --}}
                <form action="" class="max-w-sm mx-auto pb-8 border-b border-primary">
                    <div class="mt-6 mx-5">
                        <h5 class="text-lg font-medium text-gray-900 mb-2">Rating</h5>
                        <div class="inline-flex items-center justify-between w-full">
                            <div class="text-secondary">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <span>and up</span>
                            </div>
                            <input type="radio"
                                class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                        </div>
                        <div class="mt-1 inline-flex items-center justify-between w-full">
                            <div class="text-secondary">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <span>and up</span>
                            </div>
                            <input type="radio"
                                class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                        </div>
                        <div class="mt-1 inline-flex items-center justify-between w-full">
                            <div class="text-secondary">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <span>and up</span>
                            </div>
                            <input type="radio"
                                class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                        </div>
                        <div class="mt-1 inline-flex items-center justify-between w-full">
                            <div class="text-secondary">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <span>and up</span>
                            </div>
                            <input type="radio"
                                class="w-4 h-4 text-primary border-primary focus:ring-primary focus:ring-2">
                        </div>
                    </div>
                </form>
                {{-- Category --}}
                <div class="max-w-sm mx-auto">
                    <div class="mt-6 mx-5 pb-6">
                        <h5 class="text-lg font-medium text-gray-900 mb-2">Category</h5>
                        <a href="/products" class="block w-fit mb-2 text-gray-900 hover:underline hover:text-secondary">All Category</a>
                        @foreach ($categories as $category)
                            <a href="/products?category={{ $category->slug }}" class="block w-fit mb-2 text-gray-900 hover:underline hover:text-secondary">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Product --}}
            <div class="grid w-full h-fit gap-5 lg:col-span-7 xl:col-span-9 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3 justify-center">
                @if ($products->count())
                    @foreach ($products as $product)
                        <div class="sm:max-w-sm bg-white border border-primary hover:shadow-card duration-200 sm:col-span-1">
                            <a href="/products/{{ $product->slug }}">
                                <div class="border-b border-primary">
                                    <img class="w-full p-4" src="img/{{ $product->img }}" alt="{{ $product->product }}" />
                                </div>
                            </a>
                            <div>
                                <a href="/products/{{ $product->slug }}">
                                    <div class="border-b border-primary">
                                        <h5 class="text-md my-3 mx-5 h-20 font-semibold text-gray-900">{{ $product->product }}</h5>
                                    </div>
                                </a>
                                <div class="border-b border-primary">
                                    <div class="flex items-center my-3 mx-5">
                                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                            <svg class="w-4 h-4 text-secondary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-secondary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-secondary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-secondary" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                            </svg>
                                        </div>
                                        <span class="bg-primary text-white text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ms-3">5.0</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="my-3 ms-5">
                                        <span class="text-sm text-gray-900">{{ $product->price }}</span>
                                    </div>
                                    <div class="border-s border-primary">
                                        <div class="inline-flex my-3 mx-5">
                                            <a href="#" aria-current="page" class="px-4 py-2 text-sm font-medium text-white bg-primary border-e border-white hover:bg-secondary">
                                                <i class="fa-solid fa-cart-plus"></i>
                                            </a>
                                            <a href="/products/{{ $product->slug }}" class="px-4 py-2 text-sm font-medium text-white bg-primary border-s border-white hover:bg-secondary">
                                                <i class="fa-solid fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="font-bold text-3xl text-gray-900">No product found.</p>
                @endif
            </div>

        </div>
        {{-- Pagination --}}
        <div class="grid max-w-screen-xl mt-8 mb-16 mx-auto px-6 md:px-12 lg:px-16 lg:grid-cols-10 xl:grid-cols-12">
            <div class="grid w-full h-fit gap-5 lg:col-end-11 lg:col-span-7 xl:col-end-13 xl:col-span-9 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 xl:grid-cols-3">
                <div class="flex sm:col-end-3 sm:col-span-2 md:col-end-4 md:col-span-3 lg:col-end-3 lg:col-span-2 xl:col-end-4 xl:col-span-3">
                    {{ $products->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleDropdown() {
            var dropdownContent = document.querySelector('#dropdownContent');
            dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
        }
        function toggleSortBy() {
            var dropdownSortBy = document.querySelector('#dropdownSortBy');
            dropdownSortBy.style.display = (dropdownSortBy.style.display === 'block') ? 'none' : 'block';
        }
    </script>
@endsection
