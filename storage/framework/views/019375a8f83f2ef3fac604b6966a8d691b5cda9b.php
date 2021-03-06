<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MT - Expenses</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(URL::asset('FE/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo e(URL::asset('FE/css/sb-admin-2.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <!-- sidenav -->
    <?php //include'FE/includes/sidenav.php';?>

    <!-- sidenav -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- navbar -->
        
        <!-- navbar-->

        <?php $__env->startSection('content'); ?>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Employee edit</h1>

                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-12 col-md-12 ">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="h5 mb-0 font-weight-bold text-blue-1900">Edit <?php echo e($employeeEdit->Emp_name); ?></div>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                     <?php if(session('status')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('status')); ?>

                            </div>
                    <?php endif; ?>
                    </a>
                    <!-- Earnings (Monthly) Card Example -->



                </div>

                <!-- Content Row -->
                <br>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form enctype="multipart/form-data" role="form" method="POST" action="<?php echo e(URL::to('employee/update')); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" value="<?php echo e($employeeEdit->Employee_id); ?>" name="Employee_id" />
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="<?php echo e($employeeEdit->Emp_name); ?>" type="text" class="form-control form-control-user" name="employeeName" id="employeeName" placeholder="Name" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input value="<?php echo e($employeeEdit->Emp_role); ?>" type="text" class="form-control form-control-user" name="employeeRole" id="employeeRole" placeholder="Role" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for=""> Date of hiring </label>
                                        <input value="<?php echo e($employeeEdit->Date_of_hiring); ?>"type="date" class="form-control form-control-user" name="employeeHire" id="employeeHire" placeholder="Date of hiring" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input value="<?php echo e($employeeEdit->Emp_contact); ?>"type="text" class="form-control form-control-user" name="employeeContact" id="employeeContact" placeholder="contact" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input value="<?php echo e($employeeEdit->id_number); ?>"type="number" class="form-control form-control-user" name="employeeID" id="employeeID" placeholder="ID Number" required>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input value="<?php echo e($employeeEdit->salary); ?>" type="number" class="form-control form-control-user" name="employeeSalary" id="employeeSalary" placeholder="Salary" required>
                                    </div>
                                </div>
                            <div class="form-group">
                                <button type="submit" name="submit" id ="submit" class="btn btn-primary btn-user btn-block">Edit Employee Record </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2"></div>


                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include 'FE/includes/footer.php';?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(URL::asset('FE/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('FE/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->

    <script src="<?php echo e(URL::asset('FE/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(URL::asset('FE/js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo e(URL::asset('FE/vendor/chart.js/Chart.min.js')); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo e(URL::asset('FE/js/demo/chart-area-demo.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('FE/js/demo/chart-pie-demo.js')); ?>"></script>

</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mouss/Documents/skul/MisuliTinginya/resources/views/FE/editEmployee.blade.php ENDPATH**/ ?>