<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Home Page']); ?>
    <?php $__env->startSection('hero'); ?>
        <div class="w-full text-center py-32">
            <h1 class="text-2xl md:text-3xl font-bold text-center lg:text-5xl text-gray-700">
                <?php echo e(__('home.hero.title')); ?> <span class="text-indigo-900 ">&gt;<?php echo e(__('home.Morph')); ?>&lt;</span> <span class="text-gray-900"> News</span>
            </h1>
            <p class="text-gray-500 text-lg mt-1"><?php echo e(__('home.hero.desc')); ?></p>

        </div>
    <?php $__env->stopSection(); ?>
    <div class="mb-10 w-full">
        <div class="mb-16">
            <h2 class="mt-16 mb-5 text-3xl text-indigo-900 font-bold"><?php echo e(__('home.featured Posts')); ?></h2>
            <div class="w-full">
                <div class="grid grid-cols-3 gap-10 w-full">
                    <?php $__currentLoopData = $featuredPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="md:col-span-1 col-span-3">
                            <?php if (isset($component)) { $__componentOriginald3b4aba2db06429498b7ef5c68c69bc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Post.post-card','data' => ['post' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Post.post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1)): ?>
<?php $attributes = $__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1; ?>
<?php unset($__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3b4aba2db06429498b7ef5c68c69bc1)): ?>
<?php $component = $__componentOriginald3b4aba2db06429498b7ef5c68c69bc1; ?>
<?php unset($__componentOriginald3b4aba2db06429498b7ef5c68c69bc1); ?>
<?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
        <hr>

        <h2 class="mt-16 mb-5 text-3xl text-indigo-900 font-bold"><?php echo e(__('home.latest Posts')); ?></h2>
        <div class="w-full mb-5">
            <div class="grid grid-cols-3 gap-10 w-full">
                <?php $__currentLoopData = $featuredPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="md:col-span-1 col-span-3">
                        <?php if (isset($component)) { $__componentOriginald3b4aba2db06429498b7ef5c68c69bc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.Post.post-card','data' => ['post' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('Post.post-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1)): ?>
<?php $attributes = $__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1; ?>
<?php unset($__attributesOriginald3b4aba2db06429498b7ef5c68c69bc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3b4aba2db06429498b7ef5c68c69bc1)): ?>
<?php $component = $__componentOriginald3b4aba2db06429498b7ef5c68c69bc1; ?>
<?php unset($__componentOriginald3b4aba2db06429498b7ef5c68c69bc1); ?>
<?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>

    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Mohamed Alla-Eldein\Desktop\Projects\Moorf_Project\resources\views/home.blade.php ENDPATH**/ ?>