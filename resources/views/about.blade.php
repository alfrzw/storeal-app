@extends('layouts.main')

@section('container')
    {{-- About Section --}}
    <section class="bg-white dark:bg-gray-900 md:min-h-screen grid">
        <div
            class="grid max-w-screen-xl px-6 mx-auto gap-12 xl:gap-16 lg:px-16 md:px-12 lg:grid-cols-12 mt-24 mb-16 md:mt-20">
            <div class="lg:col-span-5 lg:flex place-self-center px-8">
                <img src=".\img\model1.png" class="object-cover w-max h-max" alt="">
            </div>
            <div class="place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Lorem ipsum dolor sit.</h1>
                <p class="max-w-2xl font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab libero tempora harum. Earum debitis rem fuga
                    quis deserunt qui iure aliquam adipisci, minus omnis animi iste assumenda, quisquam eos laudantium
                    cumque obcaecati. Delectus aut quisquam voluptate quos totam accusantium, animi incidunt maxime debitis
                    itaque illo beatae fugit earum.</p>
            </div>
        </div>
    </section>
    <section class="bg-white dark:bg-gray-900 md:min-h-screen grid">
        <div class="grid max-w-screen-xl px-6 mx-auto gap-12 xl:gap-16 lg:px-16 md:px-12 lg:grid-cols-12 mb-16 md:mt-6">
            <div class="place-self-center lg:col-span-7 order-last lg:order-first">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Lorem ipsum dolor sit amet.</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, expedita incidunt perferendis
                    eligendi atque consequuntur aut recusandae facilis magnam sunt unde. Nostrum perferendis ipsum molestiae
                    iure? Aliquam, repudiandae est quae dicta explicabo dolorem consequuntur quis iusto cupiditate labore!
                </p>
            </div>
            <div class="place-self-center px-8 lg:col-span-5">
                <img src=".\img\model2.png" class="object-cover w-max h-max" alt="">
            </div>
        </div>
    </section>
@endsection
