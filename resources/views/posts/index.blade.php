<x-app-layout>

    <div class="container py-8">
        <div class="grid grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) col-span-2 @endif" style="background-image: url({{Storage::url($post->image->url)}})">  
                    <div class="w-fyll h-full px-8 flex flex-col justify-center">
                        asiodoasi</div> 
                </article>
            @endforeach
        </div>
    </div>

</x-app-layout>
