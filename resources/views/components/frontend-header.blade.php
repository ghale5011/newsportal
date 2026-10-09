<header>
    <div class="container flex justify-between items-center">
        <div class="py-2 ">
            <a href="{{ route('home') }}">
                <img class="h-[35px] md:h-[80px]" src="{{ asset('frontend/images/logo.png') }}" alt="Jawaf logo">
            </a>
        </div>
        <div>
            <span class="text-[12px] md:text-xl">बिहिबार, २२ असोज २०८३</span>
            <img class="h-[15px] md:h-[25px]" src="{{ asset('frontend/images/line.png')}}" alt="Line">
        </div>
    </div>
    <nav class="bg-(--primary) text-white py-4 text-xl">
        <div class="container hidden md:flex justify-between items-center">
            <div class="space-x-6">
                <a href="">Home</a>
                <a href="">समाचार</a>
                <a href="">मनोरञ्जन</a>
                <a href="">खेलकुद</a>
                <a href="">विचार</a>
                <a href="">शिक्षा</a>
                <a href="">स्वास्थ्य</a>
                <a href="">अर्थतन्त्र</a>
            </div>
            <form action="" method="get" class=" relative text-base">
                <input type="text" name="q" id="q" class="bg-white text-(--text) py-2 px-2 rounded-full"
                    placeholder="Search Article">

                <button type="submit" class=" absolute right-3 top-2.5 text-(--primary) ">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

        </div>

        <!-- drawer init and show -->
        <div class="container text-right text-2xl md:hidden">
            <button class="" type="button" data-drawer-target="nav-drawer" data-drawer-show="nav-drawer"
                aria-controls="nav-drawer">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        </div>

    </nav>

</header>

<!-- drawer component -->
<div id="nav-drawer"
    class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-neutral-primary-soft w-80 border-e border-default"
    tabindex="-1" aria-labelledby="nav-drawer-label">
    <div class="border-b border-default pb-4 flex items-center">
        <a href="https://flowbite.com/" class="flex items-center space-x-2 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 w-6" alt="Flowbite Logo" />
            <span class="self-center text-lg font-semibold whitespace-nowrap text-heading">Menu</span>
        </a>
        
        <button type="button" data-drawer-hide="nav-drawer" aria-controls="nav-drawer"
            class="text-body bg-transparent hover:text-heading hover:bg-neutral-tertiary rounded-base w-9 h-9 absolute top-2.5 end-2.5 flex items-center justify-center">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
    </div>

    <div class="flex flex-col py-5 gap-5 text-xl ">
        <a href="">Home</a>
        <a href="">समाचार</a>
        <a href="">मनोरञ्जन</a>
        <a href="">खेलकुद</a>
        <a href="">विचार</a>
        <a href="">शिक्षा</a>
        <a href="">स्वास्थ्य</a>
        <a href="">अर्थतन्त्र</a>
    </div>

</div>
