<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Update Post')); ?></div>
                    <div class="card-body">
                        <form method="POST" action="/profil/<?php echo e($post->id); ?>/update" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">

                                <label for="title" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Title : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="title" name="title" type="text" value="<?php echo e($post->title); ?>" class="form-control">
                                </div>

                                <label for="content" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Content : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <textarea id="content" name="content" type="text"  class="form-control"><?php echo e($post->content); ?></textarea>
                                </div>

                                <label for="price" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Price : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="price" name="price" type="text"  class="form-control" value="<?php echo e($post->price); ?>">
                                </div>
                                <label for="url" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('file : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="url" name="url" type="file" class="form-control" value="<?php echo e($post->img1); ?>">
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Update')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/post/editpost.blade.php */ ?>