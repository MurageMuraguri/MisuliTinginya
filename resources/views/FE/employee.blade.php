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
    <link href="FE/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{URL::asset('FE/vendor/jquery-confirm/dist/jquery-confirm.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="FE/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
    <script src="FE/vendor/jquery/jquery.min.js"></script>

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
                    <h1 class="h3 mb-0 text-gray-800">Employee</h1>

                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-12 col-md-12 ">
                        <a href="#add-modal" data-target="#add-modal" data-toggle="modal">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="h5 mb-0 font-weight-bold text-blue-1900">Enter Employees</div>
                                        </div>
                                        <div class="col-auto">

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
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
                                    <th>Role</th>
                                    <th>Date of hiring</th>
                                    <th>Contact</th>
                                    <th>ID Number</th>
                                    <th>Salary(KES)</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                  <th>Name</th>
                                  <th>Role</th>
                                  <th>Date of hiring</th>
                                  <th>Contact</th>
                                  <th>ID Number</th>
                                  <th>Salary(KES)</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                                <tbody>

                                    @foreach ($employees as $employee)
                                     <tr>
                                    <td>{{ucwords($employee->Emp_name)}}</td>
                                    <td>{{ucwords($employee->Emp_role)}}</td>
                                    <td>{{\Carbon\Carbon::parse($employee->created_at)->format('d/M/Y')}}</td>
                                    <td>{{$employee->Emp_contact}}</td>
                                    <td>{{$employee->id_number}}</td>
                                    <td>{{$employee->salary}}</td>
                                    <td><a href="{{URL::to('employee/edit')}}{{'/'.$employee->Employee_id}}"   class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-b fa-sm text-white-50"></i> EDIT ENTRY</a>
                                      <br>
                                      <br>
                                        <a data-title="Sure you wanna delete?"  href="{{URL::to('employee/delete')}}{{'/'.$employee->Employee_id}}"  class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm DEL"><i class="fas fa-b fa-sm text-white-50"></i> DELETE ENTRY</a>
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
    <!--Add Employee Modal-->
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Employee Details</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form enctype="multipart/form-data" role="form" method="POST" action="{{URL::to('employee/save')}}">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="employeeName" id="employeeName" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="employeeRole" id="employeeRole" placeholder="Role" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for=""> Date of hiring </label>
                                <input type="date" class="form-control form-control-user" name="employeeHire" id="employeeHire" placeholder="Date of hiring" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="employeeContact" id="employeeContact" placeholder="contact" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control form-control-user" name="employeeID" id="employeeID" placeholder="ID Number" required>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="number" class="form-control form-control-user" name="employeeSalary" id="employeeSalary" placeholder="Salary" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="submit" id ="submit" class="btn btn-primary btn-user btn-block">Submit Employee Record </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Delete Modal-->
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
