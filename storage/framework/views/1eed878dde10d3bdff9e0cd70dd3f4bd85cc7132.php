<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="FE/images/cow.ico">

  <title>MT - Income</title>
  <!-- Custom fonts for this template-->
  <link href="FE/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?php echo e(URL::asset('FE/vendor/jquery-confirm/dist/jquery-confirm.min.css')); ?>" rel="stylesheet">
    <script src="FE/vendor/jquery/jquery.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="FE/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
 <!-- sidenav -->
<?php include 'FE/includes/sidenav.php'; ?>
<!-- sidenav -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- navbar -->
      
      <!-- navbar-->

          <?php $__env->startSection('content'); ?>
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Income</h1>

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
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 ">
              <a href="#add-modal" data-target="#add-modal" data-toggle="modal">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                      <div class="h5 mb-0 font-weight-bold text-blue-1900">Enter Income</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </a>
            <!-- Earnings (Monthly) Card Example -->




          </div>

          <!-- Content Row -->
<br>
          <div class="row">

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Product Type</th>
                      <th>Quantity</th>
                      <th>Price per unit</th>
                      <th>Total Price</th>
                      <th>Buyer contact</th>
                      <th>Date of production</th>
                      <th>Date of sale</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Product Type</th>
                      <th>Quantity</th>
                      <th>Price per unit</th>
                      <th>Total Price</th>
                      <th>Buyer contact</th>
                      <th>Date of production</th>
                      <th>Date of sale</th>
                      <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                        <?php $__currentLoopData = $income; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                      <td><?php echo e($in->income_name); ?></td>
                      <td><?php echo e($in->quantity); ?></td>
                      <td><?php echo e($in->price_per_unit); ?></td>
                      <td><?php echo e($in->ttl_price); ?></td>
                      <td><?php echo e($in->buyer_contact); ?></td>
                      <td><?php echo e(\Carbon\Carbon::parse($in->Date_of_production)->format('d-M-Y')); ?></td>
                      <td><?php echo e(\Carbon\Carbon::parse($in->Date_of_sale)->format('d-M-Y')); ?></td>
                      <td><a href="<?php echo e(URL::to('income/edit')); ?><?php echo e('/'.$in->income_id); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-b fa-sm text-white-50"></i> EDIT ENTRY</a>
                        <br>
                        <br>
                          <a data-title="Sure you wanna delete?"  href="<?php echo e(URL::to('income/delete')); ?><?php echo e('/'.$in->income_id); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm DEL"><i class="fas fa-b fa-sm text-white-50"></i> DELETE ENTRY</a>
                      </td>
                    </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                  </tbody>
                </table>
              </div>
            </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
        include 'FE/includes/footer.php';
       ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Income Details</h5>
           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
           </button>
         </div>
         <form enctype="multipart/form-data" role="form" method="POST" action="<?php echo e(URL::to('income/save')); ?>">
             <?php echo csrf_field(); ?>
         <div class="modal-body">

                 <div class="form-group row">
                   <div class="col-sm-6 mb-3 mb-sm-0">
                     <input type="text" class="form-control form-control-user" name = "productType" id="productType" placeholder="Product Type" required>
                   </div>
                   <div class="col-sm-6">

                     <input type="number" class="form-control form-control-user" id="quantity" name="quantity" placeholder="Quantity" required>
                   </div>
                 </div>

                 <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                         <input type="number" class="form-control form-control-user" id="price" name="price" placeholder="Price per Unit" required>
                     </div>
                     <div class="col-sm-6">
                         <input type="text" class="form-control form-control-user" id="buyerContact" name="buyerContact" placeholder="Buyer contact" required>
                     </div>
                 </div>
                 <div class="form-group row">
                   <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for=""> Date of production </label>
                     <input type="Date" class="form-control form-control-user" id="productionDate" name="productionDate" placeholder="production Date" required>
                   </div>
                   <div class="col-sm-6">
                     <label for=""> Date of Sale </label>
                     <input type="Date" class="form-control form-control-user" id="saleDate" name="saleDate" placeholder="Date of sale" required>
                   </div>
                 </div>

         </div>
         <div class="modal-footer">
           <button type="submit" name="submit" id ="submit" class="btn btn-primary btn-user btn-block">Submit Income </button>
         </div>
         </form>
       </div>
     </div>
   </div>

   <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Delete" below if you are sure you want to delete the entry.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#">Delete</a>
          </div>
        </div>
      </div>
    </div>

  <!-- Bootstrap core JavaScript-->
  <script src="FE/vendor/jquery/jquery.min.js"></script>
  <script src="FE/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?php echo e(URL::asset('FE/vendor/jquery-confirm/dist/jquery-confirm.min.js')); ?>"></script>
      <script type="text/javascript">
          $('a.DEL').confirm({
              content: "...",
          });
      </script>

  <!-- Core plugin JavaScript-->
  <script src="FE/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="FE/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="FE/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="FE/js/demo/chart-area-demo.js"></script>
  <script src="FE/js/demo/chart-pie-demo.js"></script>

</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mouss/Documents/skul/MisuliTinginya/resources/views/FE/income.blade.php ENDPATH**/ ?>