<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;" >
                <h1 style="color: #0000F0">Profile :</h1>
                <h3><?php echo e('Name : '.$info->name); ?></h3>
                <h3><?php echo e('Email : '.$info->email); ?></h3>
                <h3><?php echo e('Password : **********'); ?></h3>
                <a href="/profil/<?php echo e($info->id); ?>/editp"><button type="submit" class="btn btn-success" style="margin-right: 1%;">Edit</button> </a>
                <?php if(Session::has('success')): ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <h1 style="color: #0000F0">Posts :</h1>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="background-color: #FFF; position: relative; overflow: hidden; padding: 20px; display: block; box-shadow: -1px 2px 5px 1px rgba(0, 0, 0, 0.7), -1px 2px 20px rgba(255, 255, 255, 0.6) inset; margin: 20px 40px 10px 40px;">
                    <h1><?php echo e($post->title); ?></h1>
                    <span><?php echo e($post->created); ?></span>
                    <p><?php echo e($post->content); ?></p>
                    <h4><?php echo e($post->price .' $'); ?></h4>
                    <img src="uploads/<?php echo e($post->img1); ?>" style="width: 200px; height: 120px">

                    <p style="text-align: right;"><a href="/profil/<?php echo e($post->id); ?>/edit"><button type="submit" class="btn btn-success" style="margin-right: 1%;">Edit</button> </a><a href="/profil/<?php echo e($post->id); ?>/delete"><button type="submit" class="btn btn-danger col-md-1">Delete</button></a></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo e($posts->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/profil/profil.blade.php */ ?>