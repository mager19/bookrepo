<div class="item__book item__book-{{$book->bookID}}">

    <img src=@php echo get_the_post_thumbnail_url($book->ID); @endphp alt={{$book->post_name}}>

    <h4 class="title font-bold">
        {{$book->post_title}}
    </h4>
</div>