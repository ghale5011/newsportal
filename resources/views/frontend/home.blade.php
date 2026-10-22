<x-frontend-layout>

    <section>
        <div class="container py-5">
            <a class="block shadow-md p-5 rounded">
                <h1 class="text-3xl font-semibold mb-2"> {{ $latest_article->title }}</h1>
                <img class="w-full" src=" {{ asset(Storage::url($latest_article->image)) }}"
                    alt=" {{ $latest_article->title }}">
            </a>
        </div>
    </section>

    <section class="py-10">
        <div class="container space-y-8">
            @foreach ($categories as $category)
            <div>
                <h2 class="text-2xl border-l-4 border-(--primary) pl-2 font-semibold mb-2"> {{ $category->title }}</h2>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($category->articles as $article)
                    <div class="shadow">
                        <img class=" h-[200px] w-full object-cover" src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                        <div class="p-3">
                            <h3 class="text-lg font-semibold line-clamp-2">{{ $article->title }}</h3>
                            <div class=" line-clamp-2">
                                {!! $article->content !!}
                            </div>

                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </section>

</x-frontend-layout>
