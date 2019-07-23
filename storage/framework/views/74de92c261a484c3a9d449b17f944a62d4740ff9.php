<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Post')); ?></div>
                    <div class="card-body">
                        <h1><?php echo e($post->title); ?></h1>
                        <div class="row -flex justify-content-center mt-3">
                            <?php $__currentLoopData = $ad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-3">

                                    <img class="card-img-top" src="<?php echo e(asset("uploads/" . $image->img)); ?>" alt="" max-height='300px'>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <p><?php echo e($post->content); ?></p>
                        <h4><?php echo e($post->price .' $'); ?></h4>
                        <i><?php echo e('published by : '. $post->user->name); ?></i>
                        <span><?php echo e($post->created_at); ?></span>
                    </div>

                </div>
            </div>
        </div>
    </div>


    
        

        
            
                    
                

        
        

        
            
            
        
        
            
            
        

    



<?php $__env->stopSection(); ?>





















<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/post/post.blade.php */ ?>