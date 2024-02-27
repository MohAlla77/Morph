
<div id="recommended-topics-box">
    <h3 class="text-lg font-semibold text-gray-900 mb-3"><?php echo e(__('post.recommended Topics')); ?></h3>
    <div class="topics flex flex-wrap justify-start gap-2">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="#"
            class="bg-red-600
                        text-white
                        rounded-xl px-3 py-1 text-base">
           Category</a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH C:\Users\Mohamed Alla-Eldein\Desktop\Projects\Moorf_Project\resources\views/posts/Shared/categories-box.blade.php ENDPATH**/ ?>