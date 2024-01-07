<header x-data="{ menuOpen: false }" class="absolute inset-x-0 top-0 z-50 px-6 max-w-screen-xl py-6 lg:gap-8 xl:gap-0 md:px-12 lg:px-16">
    {{-- Desktop --}}
    <nav class="flex justify-between" aria-label="Global">
        {{-- Webiste Name --}}
        <div class="flex lg:flex-1">
            <a href="#" class="dark:text-gray-200 hover:text-blue-500 duration-150">
                <span class="sr-only">StoreAl</span>
                <h1 class="text-xl font-normal">Store<span class="font-bold">Al</span></h1>
            </a>
        </div>
        {{-- Hamburger --}}
        <div class="relative lg:hidden">
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
        {{-- Nav Menu --}}
        <div class="place-items-center hidden lg:flex lg:gap-x-12">
            <a class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150 {{ Request::is('/') ? 'text-blue-500' : '' }}"
                href="/">Home</a>
            <a href="/about"
                class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150 {{ Request::is('about') ? 'text-blue-500' : '' }}">About</a>
            <a href="/our-products"
                class="text-sm font-semibold leading-6 dark:text-gray-200 hover:text-blue-500 duration-150 {{ Request::is('our-products') ? 'text-blue-500' : '' }}">Our
                Products</a>
        </div>
        {{-- Login Button --}}
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm inline-flex items-center font-semibold gap-1 leading-6 dark:text-gray-200 hover:text-blue-500 duration-150">Log in
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" fill="currentColor" viewBox="0 0 448 512">
                    <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
            </a>
        </div>
    </nav>

    {{-- Mobile --}}
    <div x-show="menuOpen" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="lg:hidden"
        role="dialog"
        aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">StoreAl</span>
                    <h1 class="text-xl font-normal">Store<span class="font-bold">Al</span></h1>
                </a>
                <button @click="menuOpen = !menuOpen" type="button" class="-m-2.5 rounded-md p-2.5 md:mr-4 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50 {{ Request::is('/') ? 'bg-gray-50' : '' }}">Home</a>
                        <a href="/about" class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50 {{ Request::is('about') ? 'bg-gray-50' : '' }}">About</a>
                        <a href="/our-products" class="-mx-3 block rounded-lg px-3 py-2 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50 {{ Request::is('our-products') ? 'bg-gray-50' : '' }}">Our Products</a>
                    </div>
                    <div class="py-6 block">
                        <a href="#" class="-mx-3 block items-center rounded-lg px-3 py-2.5 text-base font-medium leading-7 text-gray-900 hover:bg-gray-50">Log in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
