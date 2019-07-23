<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('new Post')); ?></div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('newad')); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">

                                <label for="title" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Title : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="title" name="title" type="text" class="form-control" required>
                                    <?php if($errors->has('title')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <label for="content" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('post : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <textarea id="content" name="content" type="text" class="form-control" required></textarea>
                                    <?php if($errors->has('content')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('content')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>

                                <label for="price" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Price : ')); ?>

                                </label>

                                <div class="col-md-8">
                                    <input id="price" name="price" type="text" class="form-control" required>
                                    <?php if($errors->has('price')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('price')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <label for="filename" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('file : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="filename" name="filename[]" type="file" class="form-control" multiple required>
                                    <?php if($errors->has('filename')): ?>
                                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('filename')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-10 offset-md-10">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('New Post')); ?>

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                            <?php if(Session::has('success')): ?>
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                                        <div id="message" class="alert alert-success">
                                            <?php echo e(Session::get('success')); ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/post/newpost.blade.php */ ?>