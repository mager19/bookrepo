<div class="customBlock">
    <div class="container mx-auto px-4">
        <div class="flex">
            <div class="titleCustomBlock">
                <h3 class='title'>{{ $featuredFields['featuredTitle'] }}</h3>
            </div>
        </div>

        @if($featuredFields['showManual'] && $featuredFields['booksManually'])
        <div class="grid__books">
            @includeFirst(['partials.loop-books'], ['books'=> $featuredFields['booksManually']])
        </div>
        @elseif($autoBooks['posts'])
        <div class="grid__books">
            @includeFirst(['partials.loop-books'], ['books'=> $autoBooks['posts']])
        </div>
        @else
        <div class='error'>
            <h3 class='title--4 text-red-500'>Sorry, there are no books available yet</h3>
        </div>
        @endif
    </div>
</div>