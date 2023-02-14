<div class="grid grid-cols-3 gap-4">
    <?php $__currentLoopData = $featuredFields['booksManually']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php echo $__env->first(['partials.items.item-book'], ['book'=> $book], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /Users/mager/Documents/webserver/bookrepo/app/public/wp-content/themes/bookrepo/resources/views/partials/content-books.blade.php ENDPATH**/ ?>