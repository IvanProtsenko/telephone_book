<?php $__env->startSection('content'); ?>


<div style = "margin: 20px"><h2>Личные данные:</h2></div><br>
<div class="jumbotron pd-3 pd-md-5 text-white rounded bg-dark">
<h2>Имя: <?php echo e($contact->name); ?><br>
    <small>Место работы: <?php echo e($contact->job); ?></small>
</h2>
<p>Комментарии: <?php echo e($contact->comment); ?></p>
<p>Как связаться: <?php echo e($contact->email); ?></p>
</div>

<left>
<a href="<?php echo e(url('/contact/'.$contact->id.'/edit')); ?>" style = "margin: 30px">Изменить</a><br><br>
<a href="<?php echo e(url('/')); ?>" style = "margin: 30px">Назад</a>
</left>

<style>
.jumbotron {
  text-align: left;
  position: auto;
  margin-left: 20px;
  margin-right: 1000px;;
}
</style>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templatee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>