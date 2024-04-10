

<?php $__env->startSection('content'); ?>
<main class="my-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>User List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->email); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('crud_user.readUser', ['id' => $user->id])); ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="<?php echo e(route('crud_user.updateUser', ['id' => $user->id])); ?>" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="<?php echo e(route('crud_user.deleteUser', ['id' => $user->id])); ?>" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\php\projection\resources\views/crud_user/list.blade.php ENDPATH**/ ?>