<x-frontend-layout>


    <section class="py-10 ">
        <div class="container space-y-8">

            <div>
                <!-- Category Title -->
                <div>
                    <h1 class="text-2xl border-l-4 border-(--primary) pl-2 font-semibold mb-2">
                        {{ $category->title }}
                    </h1>
                </div>

                <!-- Main Layout Grid -->
                <div class=" grid grid-cols-3 gap-8">

                    <div class=" col-span-2 space-y-4 ">
                        @foreach ($articles as $article)

                        <a href="{{ route('article', $article->slug) }}" 
                            class="flex flex-col space-y-2 shadow grid grid-cols-3 gap-4 items-center">
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
                        </a>

                        @endforeach
                    </div>


                    <aside class="space-y-6">
                        @foreach ($advertises as $ads)
                        <a class="block   rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 bg-white p-2 group"
                           href="{{ $ads->redirect_link }}" target="_blank">
                            <img class="w-full h-auto rounded-lg group-hover:scale-[1.02] transition-transform duration-300 object-cover"
                                 src="{{ asset(Storage::url($ads->banner)) }}"
                                 alt="{{ $ads->company_name }}">
                        </a>
                        @endforeach
                    </aside>

                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
