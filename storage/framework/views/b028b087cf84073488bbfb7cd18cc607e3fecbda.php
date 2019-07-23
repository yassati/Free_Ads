<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
        <?php echo $__env->make('chat.users',['users'=>$users], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><?php echo e($user->name); ?></div>
                <div class="card-body chat">
                    <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-md-10 <?php echo e($msg->from->id !== $user->id ? 'offset-md-2 text-right' : ''); ?>">
                                <p>
                                    <strong><?php echo e($msg->from->name); ?></strong><br>
                                    <?php echo e($msg->content); ?>

                                </p>
                            </div>
                        </div>
                        <hr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <form action="" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <textarea name="content" placeholder="send message !" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/chat/show.blade.php */ ?>