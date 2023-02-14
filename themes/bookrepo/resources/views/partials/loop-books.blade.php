@foreach($books as $book)

@includeFirst(['partials.items.item-book'], ['book'=> $book])

@endforeach