<?php $__env->startSection('content'); ?>

<left>
<h2 style  = "margin: 30px"><strong>Добавить контакт</strong></h2>
<form method="POST" style = "margin: 30px">
        <?php echo csrf_field(); ?>
        <label>Имя</label>
        <input type="text" name="name" required value="<?php echo e(old('name')); ?>"><br>
        <label>Компания</label>
        <input type="text" name="job" value="<?php echo e(old('job')); ?>"><br>
        <label>Email</label>
        <input type="text" name="email" value="<?php echo e(old('email')); ?>"><br>
        <label>Комментарий</label>
        <textarea name="comment"><?php echo e(old('comment')); ?></textarea><br>
        <input type="submit" value="Добавить">
</form>
</left>

<a href="<?php echo e(url('/')); ?>" style = "margin: 50px">Назад</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.templatee', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>