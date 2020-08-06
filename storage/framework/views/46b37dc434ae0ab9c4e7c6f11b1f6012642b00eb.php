

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Song</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('songs.index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('songs.store')); ?>" method="POST">
    	<?php echo csrf_field(); ?>

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		        <div class="form-group">
		            <strong>Artist:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Artist">
		    </div>
		        <div class="form-group">
		            <strong>Album:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Album">
		        </div>
		        <div class="form-group">
		            <strong>Genre:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Genre">
		        </div>
		        <div class="form-group">
		            <strong>Language:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Language">
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		</div>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\maarl\Documents\Laravel\Music\resources\views/songs/create.blade.php ENDPATH**/ ?>