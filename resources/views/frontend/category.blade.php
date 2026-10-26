<x-frontend-layout>


    <section class="py-10">
        <div class="container space-y-8">

            <div>
                <h2 class="text-2xl border-l-4 border-(--primary) pl-2 font-semibold mb-2"> {{ $category->title }}</h2>

                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
                    @foreach ($articles as $article)
                    <div class="shadow">
                        <img class=" h-[200px] w-full object-cover" src="{{ asset(Storage::url($article->image)) }}"
                            alt="{{ $article->title }}">
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
        </div>
    </section>

</x-frontend-layout>
