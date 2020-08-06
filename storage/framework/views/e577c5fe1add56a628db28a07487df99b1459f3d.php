

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Albums</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('albums.create')); ?>"> Create New Album</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Year Release</th>
            <th width="280px">Action</th>
        </tr>
	    <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	        <td><?php echo e(++$i); ?></td>
	        <td><?php echo e($album->name); ?></td>
            <td><?php echo e($album->year); ?></td>
	        <td>
                <form action="<?php echo e(route('albums.destroy',$album->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('albums.show',$album->id)); ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo e(route('albums.edit',$album->id)); ?>">Edit</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maarl\Documents\Laravel\Music\resources\views/albums/index.blade.php ENDPATH**/ ?>