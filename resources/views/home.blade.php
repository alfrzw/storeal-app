@extends('layouts.main')

@section('container')
    {{-- Hero Section --}}
    <section class="grid md:min-h-screen">
        <div class="grid max-w-screen-xl px-6 mx-auto gap-12 xl:gap-16 lg:px-16 md:px-12 lg:grid-cols-12 mt-36 mb-16 md:mt-20">
            <div class="place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Explore<br>the World of Fashion<br>with Us
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl">
                    Discover a collection that brings out modern style and express your personality through our trendy
                    outfits. Enjoy shopping at our store, where style meets fashion!
                </p>
                <a href="#" class="inline-flex items-center justify-center w-52 px-5 py-3 mr-3 mb-4 text-base font-medium text-center text-white border border-primary bg-primary hover:bg-secondary hover:border-secondary hover:shadow-button1 duration-150">
                    Our New Products
                    <i class="ml-1 fa-solid fa-arrow-right"></i>
                </a>
                <a href="#" class="inline-flex items-center justify-center w-52 px-5 py-3 bg-white text-base font-medium text-center text-primary hover:text-white border border-primary hover:bg-secondary hover:border-secondary">
                    Contact to Sales
                </a>
            </div>
            <div class="hidden lg:col-span-5 lg:flex place-self-center px-8">
                <img src=".\img\model2.png" class="object-cover w-max h-max" alt="">
            </div>
        </div>
    </section>

    {{-- Preface Section --}}
    <section class="grid md:min-h-screen">
        <div class="grid max-w-screen-xl px-6 mx-auto gap-12 xl:gap-16 lg:px-16 md:px-12 lg:grid-cols-12 mb-16">
            <div class="lg:col-span-5 lg:flex place-self-center px-8">
                <img src=".\img\model1.png" class="object-cover w-max h-max" alt="">
            </div>
            <div class="place-self-center lg:col-span-7">
                <h2
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl">
                    Combining innovative design and quality materials, we are here to fulfill your everyday style needs.
                </h2>
                <p class="max-w-2xl font-light text-gray-500 md:text-lg lg:text-xl">
                    We believe that clothes are not just clothing, but also an expression of yourself. Therefore, we are
                    committed to providing you with clothing options that are not only unique and attractive, but also
                    considerate of comfort and quality.
                </p>
            </div>
        </div>
    </section>
@endsection
