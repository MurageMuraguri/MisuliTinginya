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
    <link href="{{URL::asset('FE/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{URL::asset('FE/vendor/jquery-confirm/dist/jquery-confirm.min.css')}}" rel="stylesheet">
    <script src="FE/vendor/jquery/jquery.min.js"></script>
  <!-- Custom styles for this template-->
    <link href="{{URL::asset('FE/css/sb-admin-2.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
 <!-- sidenav -->
<?php //include 'FE/includes/sidenav.php'; ?>
<!-- sidenav -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- navbar -->
      @extends('layouts.nav')
      <!-- navbar-->

      @section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Expenses edit</h1>

          </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
        @endif
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-md-12 ">

              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                      <div class="h5 mb-0 font-weight-bold text-blue-1900">Edit {{$expensesEdit->expenses_name}} expense</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->



          </div>

          <!-- Content Row -->
<br>
          <div class="row">
              <div class="col-md-3"></div>
              <div class="col-md-6">
              <form enctype="multipart/form-data" role="form" method="POST" action="{{URL::to('expenses/update')}}">
                  @csrf
                  <input type="hidden" value="{{$expensesEdit->expenses_id}}" name="expenses_id" />
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input value="{{$expensesEdit->expenses_name}}" type="text" class="form-control form-control-user" id="expenseName" name="expenseName" placeholder="Name" required>
                      </div>
                      <div class="col-sm-6">
                          <input value="{{$expensesEdit->expenses_date}}" type="date" class="form-control form-control-user" id="expenseDate" name="expenseDate" placeholder="Date" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <input value="{{$expensesEdit->expenses_description}}" type="text" class="form-control form-control-user" id="expenseDescription" name="expenseDescription" placeholder="Short Description" required>
                  </div>
                  <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input value="{{$expensesEdit->expenses_cost_per_unit}}"type="number" class="form-control form-control-user" id="expenseAmount" name="expenseAmount" placeholder="Cost per unit " required>
                      </div>
                      <div class="col-sm-6 mb-3 mb-sm-0">
                          <input value="{{$expensesEdit->expenses_quantity}}"type="number" class="form-control form-control-user" id="expenseQuantity" name="expenseQuantity" placeholder="quantity" required>
                      </div>

                  </div>

                  <button type="submit" name="submit" id ="submit" class="btn btn-primary btn-user btn-block">Edit Expense </button>
              </form>
              </div>
              <div class="col-md-3"></div>

        </div>
        <!-- /.container-fluid -->

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

      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
  <!-- Bootstrap core JavaScript-->
  <script src="FE/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

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
@endsection
