<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="icon" href="FE/images/cow.ico">

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
<?php include 'FE/includes/sidenav.php'; ?>
<!-- sidenav -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- navbar -->
      @extends('layouts.nav')
      <!-- navbar-->

          @section('content')
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Expenses</h1>

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
              <a href="#add-modal" data-target="#add-modal" data-toggle="modal">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">

                      <div class="h5 mb-0 font-weight-bold text-blue-1900">Enter expenses</div>
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
                      <th>Name</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Quantity</th>
                      <th>Cost per unit</th>
                      <th>Total cost</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Quantity</th>
                    <th>Cost per unit</th>
                    <th>Total cost</th>
                    <th></th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @foreach($expenses as $expense)
                    <tr>
                      <td>{{$expense->expenses_name}}</td>
                      <td>{{$expense->expenses_description}}</td>
                      <td>{{\Carbon\Carbon::parse($expense->expenses_date)->format('d-M-Y')}}</td>
                      <td>{{$expense->expenses_quantity}}</td>
                      <td>{{$expense->expenses_cost_per_unit}}</td>
                      <td>{{$expense->expenses_ttl_cost}}</td>
                      <td><a  href="{{URL::to('expenses/edit')}}{{'/'.$expense->expenses_id}}"   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-b fa-sm text-white-50"></i> EDIT ENTRY</a>
                        <a data-title="Sure you wanna delete?"  href="{{URL::to('expenses/delete')}}{{'/'.$expense->expenses_id}}"  class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm DEL"><i class="fas fa-b fa-sm text-white-50"></i> DELETE ENTRY</a>
                      </td>
                    </tr>
                   @endforeach
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
 <!--Add Expense Modal-->
 <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Expense Details</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form enctype="multipart/form-data" role="form" method="POST" action="{{URL::to('expenses/save')}}">
            @csrf
        <div class="modal-body">

                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="expenseName" name="expenseName" placeholder="Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="date" class="form-control form-control-user" id="expenseDate" name="expenseDate" placeholder="Date" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="expenseDescription" name="expenseDescription" placeholder="Short Description" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" id="expenseAmount" name="expenseAmount" placeholder="Cost per unit " required>
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user" id="expenseQuantity" name="expenseQuantity" placeholder="quantity" required>
                  </div>

                </div>
        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" id ="submit" class="btn btn-primary btn-user btn-block">Submit Expense </button>
        </div>
        </form>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/js/uikit-icons.min.js"></script>
 <script src="{{URL::asset('FE/vendor/jquery-confirm/dist/jquery-confirm.min.js')}}"></script>
      <script type="text/javascript">
          $('a.DEL').confirm({
              content: "...",
          });
      </script>
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
