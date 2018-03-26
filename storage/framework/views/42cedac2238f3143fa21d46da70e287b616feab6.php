<?php $__env->startSection('content'); ?>

<div style = "margin: 15px"><h2>Контакты:</h2></div><br>
    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><a href="<?php echo e(url('contact/'.$contact->id)); ?>"><?php echo e($contact->name); ?></a> <?php if($contact->job): ?> (<?php echo e($contact->job); ?>) <?php endif; ?></p>
    <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<style>
p {
  padding: 10px;
  border: 5px solid #9999ff;
  margin-left: 15px;
  margin-right: 1000px;
}
</style>

<left>
<a href="<?php echo e(url('/add')); ?>" style = "margin-left: 50px">Добавить</a>
</left>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templatee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>