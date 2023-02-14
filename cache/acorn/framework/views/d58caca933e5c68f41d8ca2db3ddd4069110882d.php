<div class="customBlock">
    <div class="container mx-auto px-4">
        <div class="flex">
            <div class="titleCustomBlock">
                <h3 class='title'><?php echo e($featuredFields['featuredTitle']); ?></h3>
            </div>
        </div>

        <?php if($featuredFields['showManual'] && $featuredFields['booksManually']): ?>
        <div class="grid__books">
            <?php echo $__env->first(['partials.loop-books'], ['books'=> $featuredFields['booksManually']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php elseif($autoBooks['posts']): ?>
        <div class="grid__books">
            <?php echo $__env->first(['partials.loop-books'], ['books'=> $autoBooks['posts']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php else: ?>
        <div class='error'>
            <h3 class='title--4 text-red-500'>Sorry, there are no books available yet</h3>
        </div>
        <?php endif; ?>
    </div>
</div><?php /**PATH /Users/mager/Documents/webserver/bookrepo/app/public/wp-content/themes/bookrepo/resources/views/partials/featuredBooks.blade.php ENDPATH**/ ?>