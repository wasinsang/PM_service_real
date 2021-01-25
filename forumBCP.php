<!DOCTYPE html>
<html>
<head>

	<meta charset="utf=8">
	<title>BCP Service</title>
	<link href="/project/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../project/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script src="../project/vendor/jquery/jquery.min.js"></script>
    <script src="../project/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../project/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../project/js/sb-admin-2.min.js"></script>
    <meta name="viewport" charset="utf=8" content="width=device-width, initial-scale=1.0">

</head>
<body>
<!--------------------------- Connect to DB --------------------------->
<?php
	/*** Connect ***/
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "Customer";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

   mysqli_set_charset($conn, "utf8");




   $sql = "SELECT * FROM BCP WHERE Num_ID = '".$_GET["Num_ID"]."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);


?>
	<div align="center" class="head">
		<div class="head-in">
			<span>
			<a href="../project/index.php"><img src="image/logo.jpg" style="float: left;width: 20%;"></a>
			</span>
			
		</div>
	</div>

<br>

	<div class="content" align="center">
	<div name="content" align="left"> 
	<a href="Edit_job_BCP.php?Num_ID=<?php echo $result["Num_ID"]; ?>" ><img src="image/BEdit.png" width="40" height="30"></a>
	
<br>
<div class="card-body">
    <div class="table-responsive">
    <table class="w3-table-all" id="dataTable"  cellspacing="0">
    <thead>
	
        <tr>
            <!-- <th>Customer Name</th>
            <th>Status</th>
			<th>End Date</th>
			<th>Start Con.</th>
            <th>PM</th>
			<th>Sale Name</th>
			<th>Pre-Sale</th>
			<th>Design</th>
			<th>Confirm UAT (Customer&Sales)</th>
			<th>UAT</th>
			<th>Service</th> -->
			<th >Customer Name</th>
            <th>Customer ID</th>
            <th>Customer info</th>
            <th>SO No.</th>
            <th>SO Terminate.</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Service</th>
            <th>Sale</th>
            <th>Presale</th>
            <th>PM</th>
            <th>Detail</th>
        </tr>
    </thead>
    <tbody>

<!--------------------------- Show Detail --------------------------->


        <tr>
            <td><?php echo $result["Customer_Name"];?></td>
<!--------------------------- Button --------------------------->
			<td><?php echo $result["Customer_id"];?></td>
			<td><?php echo $result["Customer_info"];?></td>
			<td><center><?php
			if($result["SO_File"] == "NO"){
			echo '<font color="red"><b>NO</b></font>';
			}else{
			echo '<a href="'.$result["SO_File"].'" target="_blank"><img src="image/BDownload.png" width="40" height="30"></a>';
			}
			?>
			</center></td>
			<td><center><?php
			if($result["SO_Ter"] == "NO"){
			echo '<font color="red"><b>NO</b></font>';
			}else{
			echo '<a href="'.$result["SO_Ter"].'" target="_blank"><img src="image/BDownload.png" width="40" height="30"></a>';
			}
			?>
			</center></td>

			<td><?php echo @$result["Start_Date"];?></td>
			<td><?php echo @$result["End_Date"];?></td>
			<td><?php echo $result["Service"];?></td>
			<td><?php echo $result["Sale_Name"];?></td>
			<td><?php echo $result["Pre_Sale"];?></td>
            <td><?php echo $result["PM_Name"];?></td>
            <td><?php echo $result["Data_BCP"];?></td>
        </tr>
    </tbody>
</table>
<br>
<br>

	</div>
</div>


	<div class="content" align="center"><h1>Log Detail</h1>
	<div name="content" align="left">
	<a href="Add_forum_detail_BCP.php?Num_ID=<?php echo $_GET["Num_ID"];?>" ><img src="image/BAdd.png" width="40" height="30"></a>
<br>

	<table class = "w3-table-all">
    <thead>


	
        <tr>
            <th width="200">Date_log</th>
            <th width="700">Message</th>
            <th>Name_Log</th>

        </tr>
    </thead>
    <tbody>

	<?php


	$sql2 = "SELECT * FROM forum_BCP WHERE Num_ID = '".$_GET["Num_ID"]."' order by FR_ID ASC";

   $query2 = mysqli_query($conn,$sql2);

while($result2=mysqli_fetch_array($query2,MYSQLI_ASSOC))
{
?>

<!--------------------------- Show Detail --------------------------->

        <tr>
            <td><?php echo $result2["Date_Time"];?></td>
            <td><?php echo $result2["Message_Log"];?></td>
			<td><?php echo $result2["Name_Log"];?></td>
        </tr>

		<?php
}

mysqli_close($conn);
?>

</div>
</div>
</tbody>
</table>
</div>
                        </div>                

</body>
</html>