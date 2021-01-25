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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
	<?php
include("connect_db.php");


   $sql = "SELECT * FROM pm_mnsp WHERE Num_ID = '".$_GET["Num_ID"]."' ";

   $query = mysqli_query($connect,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);


?>

    <!-- Page Wrapper -->
    <div id="wrapper">


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">BCP</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="customer_data" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="w3-pale-red">
                                            <th >Customer Name</th>
                                            <th>Customer ID</th>
                                            <th>SO No.</th>
                                            <th>SO Document</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Service</th>
                                            <th>Sale</th>
                                            <th>Presale</th>
                                            <th>PM</th>
                                            <th>Detail</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

				</div>
				<div class = "container-fluid">

				</div>
                <!-- /.container-fluid -->

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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->

    <script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fill_datatable();
  
  function fill_datatable(filter_country = '')
  {
      
   var dataTable = $('#customer_data').DataTable({
       
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "searching" : false,
    "ajax" : {
     url:"BCPData.php",
     type:"POST",
     data:{
     filter_country:filter_country
     }
    },
    "columnDefs": [
      { "width": "150px", "targets": 0 },
      { "width": "140px", "targets": 1 },
      { "width": "100px", "targets": 2 },
      { "width": "100px", "targets": 3 },
      { "width": "80px", "targets": 4 },
      { "width": "70px", "targets": 5 },
      { "width": "70px", "targets": 6 },
      { "width": "70px", "targets": 7 },
      { "width": "70px", "targets": 8 },
      { "width": "70px", "targets": 9 },
      { "width": "70px", "targets": 10 },
      { "width": "70px", "targets": 11 }
    ]
   });
   
  }

 });

//  $(document).on('click', '.delete', function(){
// });




</script>
<script>
 $(document).ready(function () {

  var name = localStorage.getItem('name');
  var address = localStorage.getItem('address');
  var gender = localStorage.getItem('gender');
  var designation = localStorage.getItem('designation');
  var age = localStorage.getItem('age');
  var images = localStorage.getItem('images');
  var name = localStorage.getItem('name');
  var address = localStorage.getItem('address');
  var gender = localStorage.getItem('gender');
  var designation = localStorage.getItem('designation');
  var age = localStorage.getItem('age');
  var images = localStorage.getItem('images');

  $('#name').val(name);
  $('#address').val(address);
  $('#gender').val(gender);
  $('#designation').val(designation);
  $('#age').val(age);
  $('#name').val(name);
  $('#address').val(address);
  $('#gender').val(gender);
  $('#designation').val(designation);
  $('#age').val(age);


 });
</script>

</body>

</html>