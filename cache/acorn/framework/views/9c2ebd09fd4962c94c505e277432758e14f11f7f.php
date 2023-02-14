<?php $__env->startSection('content'); ?>
<?php while(have_posts()): ?> <?php (the_post()); ?>

<!-- Hero Home -->
<?php echo $__env->make('partials.content-heroHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- /Hero Home -->

<!-- Featured Buttons -->
<?php echo $__env->make('partials.featuredBooks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- / Featured Buttons -->

<?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mager/Documents/webserver/bookrepo/app/public/wp-content/themes/bookrepo/resources/views/front-page.blade.php ENDPATH**/ ?>