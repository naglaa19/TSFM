

<?php $__env->startSection('content'); ?>


<div class="container">
<div>
<form action="<?php echo e(route('storeImage')); ?>" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name" aria-describedby="emailHelp">
<?php echo csrf_field(); ?>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Date</label>
    <input type="date" class="form-control"name="date" id="">
  </div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Location</label>
    <input type="text" class="form-control" name="location" id="">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Notes</label>
    <input type="text" class="form-control" name=notes id="">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" name="image" class="form-control" id="">
  </div> <br>

 <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Type</label>
 <select name="type" class="form-control">
    <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($t->id); ?>"><?php echo e($t->name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
  </div> <br>

<div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Category</label>
 <select name="cat"class="form-control">
    <?php $__currentLoopData = $gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $G): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($G->id); ?>"><?php echo e($G->title); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
  </div>




<input type="submit" class="btn btn-success">
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TSFM\resources\views/image/image.blade.php ENDPATH**/ ?>