<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://use.fontawesome.com/896f73d09b.js"></script>    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body id="page-top">
<style>
    table{
  margin: 0 auto;
  width: 200%;
  clear: both;
  border-collapse: collapse;
  table-layout: fixed; // ***********add this
  word-wrap:break-word; // ***********and this
}
    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a href="../project/index.php"><img src="../project/image/logo_edit.png" style="float: left;width: 150%;"></a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                <i class="fa fa-home" aria-hidden="true"></i>
                                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Service
            </div>

            <!-- Nav Item - PM -->
            <li class="nav-item">
                <a class="nav-link" href="PM.php">
                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                    <span>PM</span></a>
            </li>

            <!-- Nav Item - MNSP -->
            <li class="nav-item">
                <a class="nav-link" href="MNSP.php">
                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                                    <span>MNSP</span></a>
            </li>

            <!-- Nav Item - Report -->
            <li class="nav-item">
                <a class="nav-link" href="Report.php">
                <i class="fa fa-file-text-o" aria-hidden="true"></i>
                                    <span>Report</span></a>
            </li>

            <!-- Nav Item - BCP -->
            <li class="nav-item">
                <a class="nav-link" href="BCP.php">
                <i class="fas fa-fw fa-line-chart"></i>
                    <span>BCP</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-info" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Add -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- <a class="nav-link " id="Add_data" role="button" data-toggle="modal" data-target="#addDataModal"> -->
                            <a class="nav-link " id="add_data" role="button">
                            <i class="fas fa-plus"></i>
                                <!-- Counter - Alerts -->
                            </a>
                        </li>

                        <!-- Nav Item - Download -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link " href="#" id="Export" role="button">
                                <i class="fas fa-download"></i>
                                <!-- Counter - Messages -->
                            </a>
                        </li>

                          <!-- Nav Item - Calender -->
                          <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link " href="https://teamup.com/ks3yzgm9fgsa7fd1p5" id="Calender" role="button">
                                <i class="	fas fa-calendar-alt"></i>
                                <!-- Counter - Messages -->
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <span id="form_response"></span>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">All project</h6>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="w3-table-all" id="customer_data" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="w3-blue">
                                        <th>PM Name</th>
                                        <th>PM</th>
                                        <th>mnsp</th>
                                        <th>BCP</th>
                                        <th>Report</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>                
                        </div>
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">PM status</h6>
                    </div>
                        <div class="card-body">
                            <div class="table">
                                <table class="w3-table-all" id="customer_data2" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="w3-blue">
                                        <th>PM Name</th>
                                        <th>SUM</th>
                                        <th>In Progress</th>
                                        <th>UAT</th>
                                        <th>Complete</th>
                                        <th>Wait Customer</th>
                                        <th>Wait Revise SO</th>
                                        <th>Terminate</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>                
                        </div>
                                    <!-- Content Row -->
                <div class="row">
                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-primary"></i> BCP
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-success"></i> PM
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-info"></i> Report
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-warning"></i> MNSP
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- Content Column -->
                    <div class="col-lg-6 mb-4">

                        <!-- Project Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Summary Status PM Service</h6>
                            </div>
                            <div class="card-body">
                                <h4 class="small font-weight-bold">In progress <span class="float-right" id="Progress">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" id="Progress_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">UAT <span class="float-right" id="UAT_status">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" id="UAT_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Complete <span class="float-right" id="Complete">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar  bg-success" role="progressbar" id="Complete_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Hold <span class="float-right"id="Hold">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-info" role="progressbar" id="Hold_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Waiting Revise SO <span class="float-right"id="SO_RE">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar" role="progressbar" id="SO_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Waiting Customer <span class="float-right"id="Customer">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-warning" role="progressbar" id="Customer_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Terminate <span class="float-right"id="Terminate">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-danger" role="progressbar" id="Terminate_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <h4 class="small font-weight-bold">Cancel <span class="float-right"id="Cancel_status">0</span></h4>
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-secondary" role="progressbar" id="Cancel_" style="width: 0%"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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
    <!-- <div class="modal fade bd-example-modal-xl" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Customer Name</label>
                            <input type="text" class="form-control" id="Name_Customer" placeholder="Customer Name" value="" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Customer ID</label>
                            <input type="text" class="form-control" id="ID_Customer" placeholder="Customer ID" value="" required>
                            <div class="valid-feedback">
                              Looks good!
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Customer info</label>
                            <input type="text" class="form-control" id="info_Customer" placeholder="Contace info" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomPM">PM Name</label>
                                <select class="custom-select" id="PMGroub" required>
                                    <option value="0">---รอ Assign---</option>
                                    <option value="1">ฐานิตา ธิช่างทอง (ขิม)</option>
                                    <option value="2">ภาณุพงศ์ กวดกิจการ (เจมส์)</option>
                                    <option value="3">พีรวิทย์ จับใจนาย (อัพ)</option>
                                    <option value="4">ณัฏฐ์ สุวัฒนโฆสานุวัตร (นัท)</option>
                                    <option value="5">ธนสาร ผิวบาง (ต้น)</option>
                                    <option value="6">กาญจนา ดวงต๋า (ออม)</option>
                                    <option value="7">ชมพูนุท เตียนมีผล (มีน)</option>
                                    <option value="8">วิภาวี บุญญา (มิกกี้)</option>
                                    <option value="9">มัณฑนา ภูครองทุ่ง (เหมียว)</option>
                                    <option value="10">พัชณิยา สุขแก้ว (แอ้)</option>
                                </select>                              
                                <div class="invalid-feedback">
                                    Please choose a name.
                                  </div>
                              </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom04">Sale name</label>
                            <input type="text" class="form-control" id="Sale_Name" placeholder="Sale name" required>
                            <div class="invalid-feedback">
                              Please provide a valid sale.
                            </div>
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom05">Pre-Sale Name</label>
                            <input type="text" class="form-control" id="Pre-sale_Name" placeholder="Pre-Sale" required>
                            <div class="invalid-feedback">
                              Please provide a valid Pre-sale.
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="validationCustom06">Service</label>
                                <input type="text" class="form-control" id="Servicedata" placeholder="Ex. Cloud[HP]+ Link VRF + Colo[TST]" required>
                                <div class="invalid-feedback">
                                  Please provide a valid Service.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom07">SO</label>
                                <input type="text" class="form-control" id="SOData" placeholder="SO" required>
                                <div class="invalid-feedback">
                                  Please provide a valid SO.
                                </div>
                            </div>
                            <div class="input-group col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="validationCustom08">SO file</label>
                                    <input type="file" class="inputstl" id="fileSO" name="sentfile1">
                                    <div class="invalid-feedback">
                                        Please provide a valid SO file.
                                    </div>      
                                </div>
                            </div>      
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom09">Start Date</label>
                                <input type="date" class="form-control" id="StartDate" placeholder="select date" value="" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                              <div class="col-md-4 mb-3">
                                <label for="validationCustom10">End Date</label>
                                <input type="date" class="form-control" id="ENDDate" placeholder="select date" value="" required>
                                <div class="valid-feedback">
                                  Looks good!
                                </div>
                              </div>
                        </div>
                        <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">PM</label>
                                    <input type="checkbox" id="service1" name="service1" value="PM" onclick="PMOnclick()">
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">MNSP</label>
                                    <input type="checkbox" id="service2" name="service2" value="MNSP" onclick="MNSPOnclick()"> 
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">BCP</label>
                                    <input type="checkbox" id="service4" name="service4" value="BCP" onclick="BCPOnclick()">
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom10">Report</label>
                                    <input type="checkbox" id="service3" name="service3" value="report" onclick="REOnclick()">
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                        </div>
                        <div id="PM" class="form-group" style="display:none">
                            <h2>PM</h2>
                            <div class="form-row">
                                <div class="input-group col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom08">Confirm UAT</label>
                                        <input type="file" class="inputstl" id="ConUATPM" name="sentfile3">
                                        <div class="invalid-feedback">
                                            Please provide a valid UAT file.
                                        </div>      
                                    </div>
                                </div> 
                                <div class="input-group col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom08">UAT</label>
                                        <input type="file" class="inputstl" id="UATPM" name="sentfile4">
                                        <div class="invalid-feedback">
                                            Please provide a valid UAT file.
                                        </div>      
                                    </div>
                                </div>   
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomPM">Status</label>
                                    <select class="custom-select" id="StatusPM" required>
                                        <option value="0">in progress</option>
                                        <option value="1">UAT</option>
                                        <option value="2">complete</option>
                                        <option value="3">hold</option>
                                        <option value="4">Cancel</option>
                                        <option value="5">Terminate</option>
                                        <option value="6">Waiting Customer</option>
                                        <option value="7">Waiting Revise SO</option>                                    
                                    </select>                              
                                    <div class="invalid-feedback">
                                        Please choose a Status.
                                      </div>
                                  </div>
                            </div>
                        </div>
                        <div id="MNSP" class="form-group" style="display:none">
                            <h2>MNSP</h2>
                            <div class="form-row">
                                <div class="input-group col-md-4 mb-3">
                                    <div class="form-group">
                                        <label for="validationCustom08">Monitor</label>
                                        <input type="file" class="inputstl" id="MonitorMNSP" name="sentfile5">
                                        <div class="invalid-feedback">
                                            Please provide a valid Monitor file.
                                        </div>      
                                    </div>
                                </div>  
                            </div>
                        </div>
                            <div class="input-group col-md-4 mb-3" id="common" style="display:none">
                                <div class="form-group">
                                    <label for="validationCustom08">Diagram</label>
                                    <input type="file" class="inputstl" id="Diagram" name="sentfile2">
                                    <div class="invalid-feedback">
                                        Please provide a valid Diagram file.
                                    </div>      
                                </div>
                            </div>  
                        <div id="BCP" class="form-group" style="display:none">
                            <h2>BCP</h2> 
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                    <label for="validationCustom06">Data BCP</label>
                                    <input type="text" class="form-control" id="DataBCP" placeholder="Ex. Cloud[HP]+ Link VRF + Colo[TST]" required>
                                    <div class="invalid-feedback">
                                      Please provide a valid Service.
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <div id="report" class="form-group" style="display:none">
                            <h2>Report</h2>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom09">Report due date</label>
                                    <input type="date" class="form-control" id="StartReport" placeholder="กำหนดส่ง" value="" required>
                                    <div class="valid-feedback">
                                      Looks good!
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom07">Detail</label>
                                    <input type="text" class="form-control" id="DetailReport" placeholder="Detail" required>
                                    <div class="invalid-feedback">
                                      Please provide a valid Deetail.
                                    </div>
                                </div>
    
                            </div>
                        </div>
                      </form>
                      
                      <script>
                    //   // Example starter JavaScript for disabling form submissions if there are invalid fields
                    //   (function() {
                    //     'use strict';
                    //     window.addEventListener('load', function() {
                    //       // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    //       var forms = document.getElementsByClassName('needs-validation');
                    //       // Loop over them and prevent submission
                    //       var validation = Array.prototype.filter.call(forms, function(form) {
                    //         form.addEventListener('submit', function(event) {
                    //           if (form.checkValidity() === false) {
                    //             event.preventDefault();
                    //             event.stopPropagation();
                    //           }
                    //           form.classList.add('was-validated');
                    //         }, false);
                    //       });
                    //     }, false);
                    //   })();
                    // function PMOnclick() {
                    //     var checkBox = document.getElementById("service1");
                    //     var text = document.getElementById("PM");
                    //     var text2 = document.getElementById("common");
                    //     if (checkBox.checked == true){
                    //         text.style.display = "block";
                    //         text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text.style.display = "none";
                    //       text2.style.display = "none";
                    //     } 
                    // }
                    // function MNSPOnclick() {
                    //     var checkBox2 = document.getElementById("service2");
                    //     var text2 = document.getElementById("MNSP");
                    //     var text = document.getElementById("common");

                    //     if (checkBox2.checked == true){
                    //         text.style.display = "block";
                    //         text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text.style.display = "none";
                    //       text2.style.display = "none";
                    //     }
                    // }
                    // function REOnclick() {
                    //     var checkBox2 = document.getElementById("service3");
                    //     var text2 = document.getElementById("report");
                    //     if (checkBox2.checked == true){
                    //       text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text2.style.display = "none";
                    //     }
                    // }
                    // function BCPOnclick() {
                    //     var checkBox2 = document.getElementById("service4");
                    //     var text2 = document.getElementById("BCP");
                    //     if (checkBox2.checked == true){
                    //       text2.style.display = "block";
                    //     } 
                    //     else {
                    //       text2.style.display = "none";
                    //     }
                    // }
</script>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#">Add Data</a>
                </div>
            </div>
        </div> -->
    </div>
    <script type="text/javascript" language="javascript" >
$(document).ready(function(){
    id_numbers = new Array();
    $.ajax({
    url:"Sumstatus.php",
    type:"POST",
    dataType:"json",
    success:function(msg){
        id_numbers[0] = msg.UAT;
        id_numbers[1] = msg.hold;
        id_numbers[2] = msg.complete;
        id_numbers[3] = msg.in_pro;
        id_numbers[4] = msg.sum;
        id_numbers[5] = msg.Cus;
        id_numbers[6] = msg.SO;
        id_numbers[7] = msg.Ter;
        id_numbers[8] = msg.cancel;
        
        var percent = ((parseInt(id_numbers[0])+parseInt(id_numbers[1])+parseInt(id_numbers[2])+parseInt(id_numbers[3]))*100)/id_numbers[4];
        document.getElementById("Progress").innerHTML = (parseInt(id_numbers[3])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("UAT_status").innerHTML = (parseInt(id_numbers[0])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("Complete").innerHTML = (parseInt(id_numbers[2])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("Hold").innerHTML = (parseInt(id_numbers[1])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("SO_RE").innerHTML = (parseInt(id_numbers[6])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("Customer").innerHTML = (parseInt(id_numbers[5])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("Terminate").innerHTML = (parseInt(id_numbers[7])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("Cancel_status").innerHTML = (parseInt(id_numbers[8])*100/id_numbers[4]).toFixed(2)+'%';
        document.getElementById("Progress_").style.width = (parseInt(id_numbers[3])*100/id_numbers[4])+'%';
        document.getElementById("UAT_").style.width = (parseInt(id_numbers[0])*100/id_numbers[4])+'%';
        document.getElementById("Complete_").style.width = (parseInt(id_numbers[2])*100/id_numbers[4])+'%';
        document.getElementById("Hold_").style.width = (parseInt(id_numbers[1])*100/id_numbers[4])+'%';
        document.getElementById("SO_").style.width = (parseInt(id_numbers[6])*100/id_numbers[4])+'%';
        document.getElementById("Customer_").style.width = (parseInt(id_numbers[5])*100/id_numbers[4])+'%';
        document.getElementById("Terminate_").style.width = (parseInt(id_numbers[7])*100/id_numbers[4])+'%';
        document.getElementById("Cancel_").style.width = (parseInt(id_numbers[8])*100/id_numbers[4])+'%';

        console.log(percent);        
    }
    
});
$(document).ready(function(){
  
    fill_datatable();
  
    function fill_datatable(filter_country = '')
  {
      
   var dataTable = $('#customer_data2').dataTable({
    "searching": false,
    "paging": false,
    "info": false,
    "ajax" : {
     url:"all_work_pm.php",
    //  type:"POST"
    },
   });
   
  }

 });
 $(document).ready(function(){
  
  fill_datatable2();
 function fill_datatable2(filter_country = '')
  {
      
   var dataTable = $('#customer_data').dataTable({
    "searching": false,
    "paging": false,
    "info": false,
    "ajax" : {
     url:"all_work_service.php",
    //  type:"POST"
    },
   });
   
  }
});


 $('#add_data').click(function(){
  var options = {
   ajaxPrefix:''
  };
  new Dialogify('add_data_form.php', options)
   .title('Add New Employee Data')
   .buttons([
    {
     text:'Cancle',
     click:function(e){
      this.close();
     }
    },
    {
     text:'Insert',
     type:Dialogify.BUTTON_PRIMARY,
     click:function(e)
     {
      var SO_File = $('#SO_File').prop("files")[0];
      var SO_Ter = $('#SO_Ter').prop("files")[0];
    //   var Confirm_UAT = $('#Confirm_UAT').prop("files")[0];
    //   var UAT = $('#UAT').prop("files")[0];
    //   var Monitor = $('#Monitor').prop("files")[0];
    //   var Diagram = $('#Diagram').prop("files")[0];
      var form_data1 = new FormData();
      var form_data2 = new FormData();
      var form_data3 = new FormData();
      var form_data4 = new FormData();
      var PM = document.getElementById('service1').checked;
      var MNSP = document.getElementById('service2').checked;
      var BCP = document.getElementById('service4').checked;
      var Report = document.getElementById('service3').checked;
      console.log("PM =" + PM);
      console.log("MNSP =" + MNSP);
      console.log("BCP =" + BCP);
      console.log("Report =" + Report);
    //   Report
      form_data1.append('Customer_Name', $('#Customer_Name').val());
      form_data1.append('Num_ID', $('#Num_ID').val());
      form_data1.append('Customer_info', $('#Customer_info').val());
      form_data1.append('PM_Name', $('#PM_Name').val());
      form_data1.append('Sale_Name', $('#Sale_Name').val());
      form_data1.append('Pre_sale', $('#Pre_sale').val());
      form_data1.append('Service', $('#Service').val());
      form_data1.append('SO_Num', $('#SO_Num').val());
      form_data1.append('SO_File', SO_File);
      form_data1.append('SO_Ter', SO_Ter);
      form_data1.append('Start_Date', $('#Start_Date').val());
      form_data1.append('END_Date', $('#END_Date').val());
      form_data1.append('Due_Date', $('#Due_Date').val());
      form_data1.append('Detail', $('#Detail').val());//report
      
    //   PM
      form_data2.append('Customer_Name', $('#Customer_Name').val());
      form_data2.append('Num_ID', $('#Num_ID').val());
      form_data2.append('Customer_info', $('#Customer_info').val());
      form_data2.append('PM_Name', $('#PM_Name').val());
      form_data2.append('Sale_Name', $('#Sale_Name').val());
      form_data2.append('Pre_sale', $('#Pre_sale').val());
      form_data2.append('Service', $('#Service').val());
      form_data2.append('SO_Num', $('#SO_Num').val());
      form_data2.append('SO_File', SO_File);
      form_data2.append('SO_Ter', SO_Ter);

      form_data2.append('Start_Date', $('#Start_Date').val());
      form_data2.append('END_Date', $('#END_Date').val());
    //   form_data2.append('Confirm_UAT', Confirm_UAT);//PM
    //   form_data2.append('UAT', UAT);//PM
      form_data2.append('Status', $('#Status').val());//PM
    //   form_data2.append('Diagram', Diagram);//MNSP

    //   MNSP

      form_data3.append('Customer_Name', $('#Customer_Name').val());
      form_data3.append('Num_ID', $('#Num_ID').val());
      form_data3.append('Customer_info', $('#Customer_info').val());
      form_data3.append('PM_Name', $('#PM_Name').val());
      form_data3.append('Sale_Name', $('#Sale_Name').val());
      form_data3.append('Pre_sale', $('#Pre_sale').val());
      form_data3.append('Service', $('#Service').val());
      form_data3.append('SO_Num', $('#SO_Num').val());
      form_data3.append('SO_File', SO_File);
      form_data3.append('SO_Ter', SO_Ter);

      form_data3.append('Start_Date', $('#Start_Date').val());
      form_data3.append('END_Date', $('#END_Date').val());
    //   form_data3.append('Diagram', Diagram);//MNSP
    //   form_data3.append('Monitor', Monitor);//MNSP
      


    //   BCP
      form_data4.append('Customer_Name', $('#Customer_Name').val());
      form_data4.append('Num_ID', $('#Num_ID').val());
      form_data4.append('Customer_info', $('#Customer_info').val());
      form_data4.append('PM_Name', $('#PM_Name').val());
      form_data4.append('Sale_Name', $('#Sale_Name').val());
      form_data4.append('Pre_sale', $('#Pre_sale').val());
      form_data4.append('Service', $('#Service').val());
      form_data4.append('SO_Num', $('#SO_Num').val());
      form_data4.append('SO_File', SO_File);
      form_data4.append('SO_Ter', SO_Ter);

      form_data4.append('Start_Date', $('#Start_Date').val());
      form_data4.append('END_Date', $('#END_Date').val());
      form_data4.append('Data_BCP', $('#Data_BCP').val());//BCP

    //   if(Report == true)
    //   {
       if (PM == true )
       {
        for (var value of form_data2.values()) {
        console.log(typeof value); 
        console.log(value); 
        console.log("pm"); 
      }

        $.ajax({
       method:"POST",
       url:'insert_data_PM.php',
       data:form_data2,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        // if(data.error != '')
        // {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        // }
        // else
        // {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
         location.reload();
         console.log(data.success); 
         console.log(data.error); 

        // }
       }
      });
       }
       if (MNSP == true )
       {
        for (var value of form_data3.values()) {
        console.log(typeof value); 
        console.log(value); 
        console.log("mnsp"); 
      }

        $.ajax({
       method:"POST",
       url:'insert_data_MNSP.php',
       data:form_data3,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        // if(data.error != '')
        // {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        // }
        // else
        // {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
         location.reload();
         console.log(data.success); 
         console.log(data.error); 

        // }
       }
      });
       }
       if (BCP == true )
       {
        for (var value of form_data4.values()) {
        console.log(typeof value); 
        console.log(value); 
        console.log("BCP"); 
      }

        $.ajax({
       method:"POST",
       url:'insert_data_BCP.php',
       data:form_data4,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        // if(data.error != '')
        // {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        // }
        // else
        // {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
        //  location.reload();
         console.log(data.success); 
         console.log(data.error); 

        // }
       }
      });
       }
       if (Report == true )
       {
        for (var value of form_data1.values()) {
        console.log(typeof value); 
        console.log(value); 
        console.log("report"); 
      }
 
        $.ajax({
       method:"POST",
       url:'insert_data_report.php',
       data:form_data1,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        // if(data.error != '')
        // {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        // }
        // else
        // {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
         location.reload();
         console.log(data.success); 
         console.log(data.error); 

        // }
       }
      });
       }
       if(Report == false && PM == false && BCP == false && MNSP == false)
       {
        $('#form_response').html('<div class="alert alert-danger">please check a service</div>'); 
       }


     }
    }
   ]).showModal();
 });
});
</script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Page level custom scripts -->
    <script type="text/javascript" language="javascript" ></script>
    <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  

</body>

</html>
