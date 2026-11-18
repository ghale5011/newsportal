<x-frontend-layout>


    <section class="py-10 ">
        <div class="container space-y-8">

            <!-- Main Layout Grid -->
            <div class=" grid grid-cols-3 gap-8">

                <div class=" col-span-2 space-y-4 ">
                    <div>
                        <span>
                            {{ $article->author->name }}
                        </span>
                        <span>
                            {{ $article->created_at->format('D M,Y') }}
                        </span>
                    </div>
                    <h1>
                        {{ $article->title }}
                    </h1>

                    <img src="{{ asset(Storage::url($article->image)) }}" alt="{{ $article->title }}">
                    <div>
                        {!! $article->content !!}
                    </div>
                </div>


                <aside class="space-y-6">
                    @foreach ($advertises as $ads)
                    <a class="block   rounded-xl shadow-md hover:shadow-lg transition-all duration-300 border border-gray-100 bg-white p-2 group"
                        href="{{ $ads->redirect_link }}" target="_blank">
                        <img class="w-full h-auto rounded-lg group-hover:scale-[1.02] transition-transform duration-300 object-cover"
                            src="{{ asset(Storage::url($ads->banner)) }}" alt="{{ $ads->company_name }}">
                    </a>
                    @endforeach
                </aside>

            </div>
        </div>
    </section>

</x-frontend-layout>