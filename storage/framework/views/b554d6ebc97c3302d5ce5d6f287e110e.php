<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>

<h1><?php echo e($nome); ?></h1>

<div id="search-container"></div>

<?php $__env->stopSection(); ?>
<!-- <?php if(10 > 15): ?>
<p>A condição é true</p>
<?php endif; ?>

<p><?php echo e($nome); ?></p>

<?php if($nome == "Ellen"): ?>
<p>O nome é Ellen</p>
<?php elseif($nome == "Eloisy"): ?>
<p>O nome é <?php echo e($nome); ?>, ela tem <?php echo e($idade2); ?> anos, e trabalha como <?php echo e($profissao); ?></p>
<?php else: ?>
<p>O nome não é Ellen</p>
<?php endif; ?>

<?php for($i = 0; $i < count($arr); $i++): ?>
    <p><?php echo e($arr[$i]); ?> - <?php echo e($i); ?></p>
    <?php if($i == 2): ?>
    <p> O i é o 2</p>
    <?php endif; ?>
    <?php endfor; ?>

    <?php $__currentLoopData = $nomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($loop->index); ?></p>
    <p><?php echo e($nome); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php
    $name = "Ewander";
    echo $name;
    ?>-->

    <!-- Comentário -->
    
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\laravel1\resources\views/welcome.blade.php ENDPATH**/ ?>