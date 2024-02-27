<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['post']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['post']); ?>
<?php foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<article <?php echo e($attributes->merge(['class' => '"[&:not(:last-child)]:border-b border-gray-100 pb-10"'])); ?>>
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a wire:navigate href="<?php echo e(route('posts.show', $post->slug)); ?>">
                <img class="mw-100 mx-auto rounded-xl" src="<?php echo e($post->getThumbnaImage()); ?>" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
              <?php if (isset($component)) { $__componentOriginal1508d5adb994731e02675338837a0ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1508d5adb994731e02675338837a0ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.author','data' => ['author' => $post->author,'size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('posts.author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->author),'size' => 'sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1508d5adb994731e02675338837a0ace)): ?>
<?php $attributes = $__attributesOriginal1508d5adb994731e02675338837a0ace; ?>
<?php unset($__attributesOriginal1508d5adb994731e02675338837a0ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1508d5adb994731e02675338837a0ace)): ?>
<?php $component = $__componentOriginal1508d5adb994731e02675338837a0ace; ?>
<?php unset($__componentOriginal1508d5adb994731e02675338837a0ace); ?>
<?php endif; ?>
                <span class="text-gray-500 text-xs"><?php echo e($post->published_at->diffForHumans()); ?></span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate  href="<?php echo e(route('posts.show', $post->slug)); ?>">
                   <?php echo e($post->title); ?>

                </a>
            </h2>

            <p class="mt-2 text-base text-gray-700 font-light">
                <?php echo e($post->getExcerpt()); ?>

            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <span class="text-gray-500 text-sm"><?php echo e($post->getReadingTime()); ?> min read</span>
                </div>
                <div>

                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('like-button', ['post' => $post]);

$__html = app('livewire')->mount($__name, $__params, 'like-' . $post->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

                </div>
            </div>
        </div>
    </div>
</article>
<?php /**PATH C:\Users\Mohamed Alla-Eldein\Desktop\Projects\Moorf_Project\resources\views/components/post/post-item.blade.php ENDPATH**/ ?>