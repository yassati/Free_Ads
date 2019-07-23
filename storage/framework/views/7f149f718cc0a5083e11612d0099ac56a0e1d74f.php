<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Edit Profil')); ?></div>
                    <div class="card-body">
                        <form method="POST" action="/profil/<?php echo e($user->id); ?>/updatep">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">

                                <label for="name" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Name : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="name" name="name" type="text" value="<?php echo e($user->name); ?>" class="form-control">
                                </div>

                                <label for="email" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Email : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="email" name="email" type="email" value="<?php echo e($user->email); ?>" class="form-control">
                                </div>

                                <label for="password" class="col-sm-4 col-form-label text-md-right">
                                    <?php echo e(__('Password : ')); ?>

                                </label>
                                <div class="col-md-8">
                                    <input id="password" name="password" type="password" value="<?php echo e($user->password); ?>" class="form-control">
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
<?php /* /home/yassine/WORK/semestre2/php/Piscine_MVC_Free_Ads/freeads/resources/views/profil/editprofil.blade.php */ ?>