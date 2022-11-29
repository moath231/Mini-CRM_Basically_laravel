<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Employees')); ?></div>
                <a href="/employees/create" class="btn btn-success createNewCompany m-3">Create New Employees</a>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Employees List')); ?></div>

                        <div class="card-body">
                            <?php if(session('message')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo e(session('message')); ?>

                                </div>
                            <?php endif; ?>
                            
                            <?php if(session('Dmessage')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo e(session('Dmessage')); ?>

                                </div>
                            <?php endif; ?>

                            <table class="table">
                                <thead class="">
                                    <thead class="">
                                        <tr class="table-secondary">
                                            <th scope="col">First name</th>
                                            <th scope="col">last name</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">email</th>
                                            <th scope="col">phone</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td scope="col" class="pt-4"><?php echo e($emp['firstName']); ?></td>
                                                <td scope="col" class="pt-4"><?php echo e($emp['lastName']); ?></td>
                                                <td scope="col" class="pt-4"><?php echo e($emp->companyId); ?></td>
                                                <td scope="col" class="pt-4"><?php echo e($emp['email']); ?></td>
                                                <td scope="col" class="pt-4"><?php echo e($emp['phone']); ?></td>
                                                <td scope="col" class="buttomde pt-3 pb-3">
                                                    <a href="/employees/<?php echo e($emp['id']); ?>/edit" class="btn btn-success" role="button" aria-disabled="true">edit</a>
                                                    <form
                                                    class=""
                                                    action="/employees/<?php echo e($emp['id']); ?>"
                                                    method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                        <button class="btn btn-danger" role="button" aria-disabled="true">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel9-bootstrap5-vite/resources/views/Employees/index.blade.php ENDPATH**/ ?>