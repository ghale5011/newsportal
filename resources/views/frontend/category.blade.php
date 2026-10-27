<x-frontend-layout>


    <section class="py-10 ">
        <div class="container space-y-8">

            <div>
                <!-- Category Title -->
                <div>
                    <h2 class="text-2xl border-l-4 border-(--primary) pl-2 font-semibold mb-2">
                        {{ $category->title }}
                    </h2>
                </div>

                <!-- Main Layout Grid -->
                <div class=" grid grid-cols-3">

                    <div class=" col-span-2 space-y-4 ">
                        @foreach ($articles as $article)

                        <div class="shadow grid grid-cols-3 gap-4 items-center">
                            <img class=" h-[250px] w-full object-cover" src="{{ asset(Storage::url($article->image)) }}"
                                alt="{{ $article->title }}">
                            <div class="p-3 col-span-2 space-y-2">
                                <h3 class="text-xl font-semibold line-clamp-2">{{ $article->title }}</h3>
                                <div class=" line-clamp-4">
                                    {!! $article->content !!}
                                </div>
                                <span>
                                    {{ $article->created_at->format('D M,Y') }}
                                </span>

                            </div>
                        </div>

                        @endforeach
                    </div>


                    <div>

                    </div>

                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
