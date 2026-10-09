<header>
    <div class="container flex justify-between items-center">
        <div class="py-2 ">
            <a href="{{ route('home') }}">
                <img class="h-[35px] md:h-[80px]" src="{{ asset('frontend/images/logo.png') }}" alt="Jawaf logo">
            </a>
        </div>
        <div>
            <span class="text-[12px] md:text-l">बिहिबार, २२ असोज २०८३</span>
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
            <div>
                <form action="" method="get" class=" relative text-base" >
                    <input type="text" name="q" id="q" class="bg-white text-(--text) py-2 px-2 rounded-lg"  placeholder="Search Article">
                    <button type="submit" class=" absolute right-3 top-2.5 text-(--primary) ">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </form>
            </div>

        </div>

    </nav>

</header>
v
