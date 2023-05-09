

<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('register.perform')); ?>" align=”center”>

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        <!--img class="mb-4" src="<?php echo url('images/bootstrap-logo.svg'); ?>" alt="" width="72" height="57"-->
        
        <h1 class="h3 mb-3 fw-normal">Register</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="<?php echo e(old('username')); ?>" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Username</label>
            <?php if($errors->has('username')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('username')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="surename" value="<?php echo e(old('surename')); ?>" placeholder="Surename" required="required" autofocus>
            <label for="floatingSureame">Surename</label>
            <?php if($errors->has('surename')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('surename')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <select name="sex" type="text" class="form-control" value="<?php echo e(old('sex')); ?>" placeholder="Стать" required="required" autofocus>
                    <option value="" >Стать</option>
                    <option value="1">Чоловіча</option>
                    <option value="2">Жіноча</option>
            </select>
            <!--input type="text" class="form-control" name="sex" value="<?php echo e(old('sex')); ?>" placeholder="Sex" required="required" autofocus-->
            <label for="floatingSex">Sex</label>
            <?php if($errors->has('sex')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('sex')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="nationality" value="<?php echo e(old('nationality')); ?>" placeholder="Nationality" required="required" autofocus>
            <label for="floatingNationality">Nationality</label>
            <?php if($errors->has('nationality')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('nationality')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="organisation" value="<?php echo e(old('organisation')); ?>" placeholder="Organisation" required="required" autofocus>
            <label for="floatingOrganisation">Organisation</label>
            <?php if($errors->has('organisation')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('organisation')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="position" value="<?php echo e(old('position')); ?>" placeholder="Position" required="required" autofocus>
            <label for="floatingName">Position</label>
            <?php if($errors->has('position')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('position')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="date" class="form-control" name="date" value="<?php echo e(old('date')); ?>" placeholder="Date" required="required" autofocus>
            <label for="floatingDate">Date</label>
            <?php if($errors->has('date')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('date')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email address</label>
            <?php if($errors->has('email')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            <?php if($errors->has('password')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <?php if($errors->has('password_confirmation')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password_confirmation')); ?></span>
            <?php endif; ?>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        
        <?php echo $__env->make('auth.partials.copy', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pract_1\pract\resources\views/auth/register.blade.php ENDPATH**/ ?>