@extends('layouts.main')

@section('container')
    <section class="grid xl:min-h-screen">
        <div class="grid max-w-screen-xl content-center mx-auto mt-36 mb-16 md:mt-20 px-6 lg:px-16 md:px-12 md:grid-cols-3">
            <div class="col-span-1 border border-e-0 border-primary">
                <img class="w-full p-5" src="img/{{ $product["img"] }}" alt="{{ $product["product"] }}">
            </div>
            <div class="col-span-2 border border-primary">
                <div class="border-b border-primary">
                    <h3 class="mx-5 mt-5 mb-2 font-bold text-2xl">{{ $product["product"] }}</h3>
                    <p class="mx-5 mb-3 font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero officiis nihil facere ipsa! Corrupti ex obcaecati vel ut, quod laborum perferendis dolore reiciendis, animi at molestiae eveniet fugiat rerum sunt!</p>
                    <div class="flex items-center mb-5 mx-5">
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
                <div class="grid grid-cols-3 border-b border-primary">
                    <div class="px-5 py-4 col-span-1 border-e border-primary">
                        <h5 class="font-semibold text-xl">{{ $product["price"] }}</h5>
                    </div>
                    <div class="px-5 py-4 col-span-1">
                        <h5 class="font-semibold text-xl">Stock: {{ $product["stock"] }}</h5>
                    </div>
                    <div class="px-5 py-4 col-span-1 text-end">
                        <a href="#" aria-current="page" class="px-5 py-3 w-32 text-sm font-medium text-white bg-primary hover:bg-secondary border-e border-white hover:border-secondary hover:shadow-button1 duration-150">
                            Add to cart
                            <i class="fa-solid fa-cart-plus"></i>
                        </a>
                    </div>
                </div>
                <a href="/products" class="inline-flex items-center justify-center px-6 py-2.5 ml-5 my-5 text-base font-medium text-center text-white border border-primary bg-primary hover:bg-secondary hover:border-secondary hover:shadow-button1 duration-150">
                    <i class="mr-1 fa-solid fa-arrow-left"></i>
                    Back
                </a>
            </div>
        </div>
    </section>
@endsection