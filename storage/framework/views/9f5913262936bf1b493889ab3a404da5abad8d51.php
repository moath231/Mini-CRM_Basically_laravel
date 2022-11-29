<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Company')); ?></div>
                <a href="/company/create" class="btn btn-success createNewCompany m-3">Create New Company</a>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header"><?php echo e(__('Company List')); ?></div>

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
                                            <th scope="col">logo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">address</th>
                                            <th scope="col">website</th>
                                            <th scope="col">email</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td scope="col" class="imglogo">
                                                    <img class="" src="/images/<?php echo e($comp['logo_path']); ?>" alt="">
                                                </td>
                                                <td scope="col" class="pt-4"><?php echo e($comp['name']); ?></td>
                                                <td scope="col" class="pt-4"><?php echo e($comp['Address']); ?></td>
                                                <td scope="col" class="pt-4"><a class="text-primary" href="<?php echo e($comp['website']); ?>"><?php echo e($comp['name']); ?></a></td>
                                                <td scope="col" class="pt-4"><?php echo e($comp['Email']); ?></td>
                                                <td scope="col" class="buttomde pt-3 pb-3">
                                                    <a href="/company/<?php echo e($comp['id']); ?>/edit" class="btn btn-success" role="button" aria-disabled="true">edit</a>
                                                    <form
                                                    class=""
                                                    action="/company/<?php echo e($comp['id']); ?>"
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/laravel9-bootstrap5-vite/resources/views/home.blade.php ENDPATH**/ ?>