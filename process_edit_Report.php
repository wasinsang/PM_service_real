<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>
<?php

	/*** Connect ***/
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "Customer";
 
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
 
	mysqli_set_charset($conn, "utf8");
 
 
 
 
$Num_ID = $_POST["Num_ID"];
$Cust_name = $_POST["Customer_Name"];
$datepicker2 = $_POST["End_Date"];
$datepicker1 = $_POST["Due_Date"];
$datepicker3 = $_POST["Start_Date"];
$PM_Name = $_POST["PM_Name"];
$Sale_Name = $_POST["Sale_Name"];
$Pre_Sale = $_POST["Pre_Sale"];
$Service = $_POST["Service"];
$SO = $_POST["SO_Num"];
$Detail = $_POST["Detail"];


############ Change End Date ############
$End_Date = date_create($datepicker2);
$End_Date2 = date_format($End_Date,"Y-m-d");
############ Change Start Contact ############
$Start_Con = date_create($datepicker3);
$Start_Con2 = date_format($Start_Con,"Y-m-d");
############ Change Deu_Date Contact ############
$Due_Date = date_create($datepicker1);
$Due_Date2 = date_format($Due_Date,"Y-m-d");

######################## Attack File ########################

############ Attack File 3 ############
if ($_FILES['SO_File']['name'] == "" ){

	$path_copy4 = $_POST["SO_File"];


	
	}
	else{
	
	
	
	############ Attack File 2 ############
	$destfol4 = "../project/Uploadfile/SO_File/";
	$type4 = strrchr($_FILES['SO_File']['name'],".");
	$numrand4 = (mt_rand());
	$date4 = date("Ymd");
	$diagram4 = "SO_File";
	$newname4 = $date4.$diagram4.$numrand4.$type4;
	$path_copy4=$destfol4.$newname4;
	
	
	@unlink($_POST["SO_File"]);
	
	
	}
	
	if ($_FILES['SO_Ter']['name'] == "" ){

		$path_copy5 = $_POST["SO_Ter"];
	
	
		
		}
		else{
		
		
		
		############ Attack File 2 ############
		$destfol5 = "../project/Uploadfile/SO_Ter/";
		$type5 = strrchr($_FILES['SO_Ter']['name'],".");
		$numrand5 = (mt_rand());
		$date5 = date("Ymd");
		$diagram5 = "SO_Ter";
		$newname5 = $date5.$diagram5.$numrand5.$type5;
		$path_copy5=$destfol5.$newname5;
		
		
		@unlink($_POST["SO_Ter"]);
		
		
		}
	


	$sql = "UPDATE Report SET 
			Customer_Name = '".$Cust_name."' ,
			End_Date = '".$End_Date2."' ,
			Start_Date = '".$Start_Con2."' ,
			Due_Date = '".$Due_Date2."' ,
			PM_Name = '".$PM_Name."' ,
			Sale_Name = '".$Sale_Name."' ,
			Pre_Sale = '".$Pre_Sale."' ,
			Service = '".$Service."', 
			SO_Num = '".$SO."',
			Detail = '".$Detail."',
			SO_File = '".$path_copy4."',
			SO_Ter = '".$path_copy5."'
			WHERE Num_ID = '".$Num_ID."' ";


$query = mysqli_query($conn,$sql);

if($query) {

	$movefile4 = move_uploaded_file($_FILES['SO_File']['tmp_name'], $path_copy4);
	$movefile5 = move_uploaded_file($_FILES['SO_Ter']['tmp_name'], $path_copy5);

echo "Record add successfully"."<br>";
echo '<a href="../project/index.php" >Go to Home</a>';

}else {
	echo "MySQL Connect Failed : Error : ".mysqli_error($conn);
}

mysqli_close($conn);


?>

