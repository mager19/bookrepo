<div class="item__book item__book-<?php echo e($book->bookID); ?>">

    <img src=<?php echo get_the_post_thumbnail_url($book->ID); ?> alt=<?php echo e($book->post_name); ?>>

    <h4 class="title font-bold">
        <?php echo e($book->post_title); ?>

    </h4>
</div><?php /**PATH /Users/mager/Documents/webserver/bookrepo/app/public/wp-content/themes/bookrepo/resources/views/partials/items/item-book.blade.php ENDPATH**/ ?>