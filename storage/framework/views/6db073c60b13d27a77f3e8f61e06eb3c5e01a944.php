

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Songs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('songs.create')); ?>"> Create New Song</a>
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
            <th>Artist</th>
            <th>Album</th>
            <th>Genre</th>
            <th>Language</th>
            <th width="280px">Action</th>
        </tr>
	    <?php $__currentLoopData = $songs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $song): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    <tr>
	        <td><?php echo e(++$i); ?></td>
	        <td><?php echo e($song->name); ?></td>
            <td><?php echo e($song->artist); ?></td>
            <td><?php echo e($song->album); ?></td>
            <td><?php echo e($song->genre); ?></td>
            <td><?php echo e($song->language); ?></td>
	        <td>
                <form action="<?php echo e(route('songs.destroy',$song->id)); ?>" method="POST">
                    <a class="btn btn-info" href="<?php echo e(route('songs.show',$song->id)); ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo e(route('songs.edit',$song->id)); ?>">Edit</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
	        </td>
	    </tr>
	    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maarl\Documents\Laravel\Music\resources\views/songs/index.blade.php ENDPATH**/ ?>