<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['author', 'size']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['author', 'size']); ?>
<?php foreach (array_filter((['author', 'size']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php

    $imageSize = match ($size ?? null) {
        'xs' => 'w-7 h-7',
        'sm' => 'w-9 h-9',
        'md' => 'w-10 h-10',
        'lg' => 'w-14 h-14',
        default => 'w-10 h-10',
    };

    $textSize = match ($size ?? null) {
        'xs' => 'text-xs',
        'sm' => 'text-sm',
        'md' => 'text-base',
        'lg' => 'text-xl',
        default => 'text-base',
    };

?>

<img class="mr-3 rounded-full <?php echo e($imageSize); ?>" src="<?php echo e($author->profile_photo_url); ?>" alt="<?php echo e($author->name); ?>">
<span class="mr-1 <?php echo e($textSize); ?>"><?php echo e($author->name); ?> </span>
<?php /**PATH C:\Users\Mohamed Alla-Eldein\Desktop\Projects\Moorf_Project\resources\views/components/posts/author.blade.php ENDPATH**/ ?>