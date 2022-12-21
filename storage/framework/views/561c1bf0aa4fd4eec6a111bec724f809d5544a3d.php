<?php $__env->startSection('container'); ?>
<article class="mb-5">
    <h2><?php echo e($post["title"]); ?></h2>
    <h5>By: <?php echo e($post["author"]); ?></h5>
    </p><?php echo e($post["body"]); ?><p>
</article>

<a href="/posts">Back to Post</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\asus\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>