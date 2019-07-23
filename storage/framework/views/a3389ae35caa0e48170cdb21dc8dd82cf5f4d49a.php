<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                <h1><a href="<?php echo e(URL::action('Post\PostController@view', $post->id)); ?>"><?php echo e($post->title); ?></a></h1>
                <p><?php echo e($post->content); ?></p>
                <h4><?php echo e($post->price .' $'); ?></h4>
                <i><?php echo e('published by : '. $post->user->name); ?></i>
                <span><?php echo e($post->created_at); ?></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($posts->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/post/showad.blade.php */ ?>