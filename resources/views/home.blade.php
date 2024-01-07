<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home Page | StoreAl</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://kit.fontawesome.com/cc899d30db.js" crossorigin="anonymous"></script>
</head>

<body>
    {{-- Navbar --}}
    <header x-data="{ menuOpen: false }"
        class="absolute inset-x-0 top-0 z-50 mx-auto px-6 max-w-screen-xl py-6 lg:gap-8 xl:gap-0 md:px-12 lg:px-16">
        <nav class="flex items-center justify-between" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="dark:text-gray-200 hover:text-blue-500 duration-150">
                    <span class="sr-only">StoreAl</span>
                    <h1 class="text-xl font-normal">Store<span class="font-bold">Al</span></h1>
                </a>
            </div>
            <div class="flex lg:hidden">
                <button @click="menuOpen = !menuOpen" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="place-items-center hidden lg:flex lg:gap-x-12">
                <a href="/"
                    class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150">Home</a>
                <a href="/about"
                    class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150">About</a>
                <a href="/our-products"
                    class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150">Our
                    Products</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#"
                    class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150">Log in
                    <i class="ml-1 fa-solid fa-arrow-right"></i></a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="menuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div
                class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">StoreAl</span>
                        <h1 class="text-xl font-normal">Store<span class="font-bold">Al</span></h1>
                    </a>
                    <button @click="menuOpen = !menuOpen" type="button"
                        class="-m-2.5 rounded-md p-2.5 md:mr-4 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="/"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                            <a href="/about"
                                class="-mx-3 block rounded-lg px-3 py-2
                                text-base font-medium leading-7 text-gray-900 hover:bg-gray-50">About</a>
                            <a href="/our-products"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50">Our
                                Products</a>
                        </div>
                        <div class="py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Home Section --}}

    {{-- Hero Section --}}
    <section class="bg-white dark:bg-gray-900 md:min-h-screen grid">
        <div
            class="grid max-w-screen-xl py-8 px-6 mx-auto gap-8 xl:gap-16 lg:px-16 md:px-12 lg:grid-cols-12 mt-20 mb-4 md:mt-6">
            <div class="place-self-center lg:col-span-7">
                <h1
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Explore<br>the World of Fashion<br>with Us</h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Discover a collection that brings out modern style and express your personality through our trendy
                    outfits. Enjoy shopping at our store, where style meets fashion!</p>
                <a href="#"
                    class="inline-flex items-center justify-center w-60 px-5 py-3 mr-3 mb-4 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Our New Products
                    <i class="ml-1 fa-solid fa-arrow-right"></i>
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center w-60 px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Contact to Sales
                </a>
            </div>
            <div class="hidden lg:col-span-5 lg:flex place-self-center px-8">
                <img src=".\img\shoes.png" class="object-cover w-max h-max" alt="">
            </div>
        </div>
    </section>

    {{-- Preface Section --}}
    <section class="bg-white dark:bg-gray-900 md:min-h-screen grid">
        <div class="grid max-w-screen-xl py-8 px-6 mx-auto gap-8 xl:gap-16 lg:px-16 md:px-12 lg:grid-cols-12 mb-12">
            <div class="hidden lg:col-span-5 lg:flex place-self-center px-8">
                <img src=".\img\shoes.png" class="object-cover w-max h-max" alt="">
            </div>
            <div class="place-self-center lg:col-span-7">
                <h2
                    class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Combining innovative design and quality materials, we are here to fulfill your everyday style needs.
                </h2>
                <p class="max-w-2xl font-light text-gray-500 md:text-lg lg:text-xl dark:text-gray-400">
                    We believe that clothes are not just clothing, but also an expression of yourself. Therefore, we are
                    committed to providing you with clothing options that are not only unique and attractive, but also
                    considerate of comfort and quality.
                </p>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="m-4 bg-white md:p-8 lg:p-10 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl text-center">
            <a href="#"
                class="flex justify-center items-center my-4 text-2xl font-normal text-gray-900 dark:text-white hover:text-blue-500 duration-150">
                Store<span class="font-bold">Al</span>
            </a>
            <p class="font-normal text-gray-500">Follow our social media</p>
            <ul class="flex flex-wrap justify-center items-center my-4 text-gray-500 dark:text-white">
                <li>
                    <a href="/" class="px-4 hover:underline">Instagram</a>
                </li>
                <li>
                    <a href="/about" class="px-4 hover:underline">Facebook</a>
                </li>
            </ul>
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#"
                    class="hover:underline">StoreAl™</a>. All Rights Reserved.</span>
        </div>
    </footer>
</body>

</html>
