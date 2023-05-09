

<?php $__env->startSection('content'); ?>
    <div class="bg-light p-5 rounded">
        <?php if(auth()->guard()->check()): ?>
            <h1>Користувачі</h1>
            <table style="width:100%">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Name of organization</th>
                            <th>Email</th>
                        </tr>
                       <?php /**
     * Handle response after user authenticated
     * 
     * 
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */?>
                        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>:
                        <tr>
                            <td><?php echo e($n->id); ?></td>
                            <td><?php echo e($n->username); ?> <?php echo e($n->surname); ?></td>
                            <td><?php echo e($n->organisation); ?></td>
                            <td><?php echo e($n->email); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
            </table>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pract_1\pract\resources\views/home/index.blade.php ENDPATH**/ ?>