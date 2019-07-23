<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Search')); ?></div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label for="title" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Title : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="title" name="title" type="text" class="form-control">
                                </div>
                                
                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Search')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if(isset($posts)): ?>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                <h1><a href="<?php echo e(URL::action('Post\PostController@view', $post->id)); ?>"><?php echo e($post->title); ?></a></h1>
                <p><?php echo e($post->content); ?></p>
                <h4><?php echo e($post->price .' $'); ?></h4>
                <i><?php echo e('published by : '. $post->user->name); ?></i>
                <span><?php echo e($post->created_at); ?></span>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/post/search.blade.php */ ?>