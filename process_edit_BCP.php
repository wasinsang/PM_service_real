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
$datepicker3 = $_POST["Start_Date"];
$PM_Name = $_POST["PM_Name"];
$Sale_Name = $_POST["Sale_Name"];
$Pre_Sale = $_POST["Pre_Sale"];
$Service = $_POST["Service"];
$SO = $_POST["SO_Num"];
$Data_BCP = $_POST["Data_BCP"];


############ Change End Date ############
$End_Date = date_create($datepicker2);
$End_Date2 = date_format($End_Date,"Y-m-d");
############ Change Start Contact ############
$Start_Con = date_create($datepicker3);
$Start_Con2 = date_format($Start_Con,"Y-m-d");

######################## Attack File ########################

############ Attack File 3 ############
if( $_FILES['SO_File']['name'] == "" && $_FILES['SO_Ter']['name'] == "" ){

	$path_copy = $_POST["SO_File"];
	$path_copy2 = $_POST["SO_Ter"];
	
	
	}elseif($_FILES['SO_File']['name'] != "" && $_FILES['SO_Ter']['name'] == "") {
	
	############ Attack File 1 ############
	$destfol = "../project/Uploadfile/SO_File/";
	$type = strrchr($_FILES['SO_File']['name'],".");
	$numrand = (mt_rand());
	$date = date("Ymd");
	$SO_File = "SO_File";
	$newname = $date.$SO_File.$numrand.$type;
	$path_copy=$destfol.$newname;
	$path_copy = $_POST["SO_File"];
	
	############ Delete File 1 ############
	@unlink($_POST["SO_File"]);
	
	
	
	}elseif($_FILES['SO_Ter']['name'] != "" && $_FILES['SO_File']['name'] == ""){
	
	
	$destfol2 = "../project/Uploadfile/SO_Ter/";
	$type2 = strrchr($_FILES['SO_Ter']['name'],".");
	$numrand2 = (mt_rand());
	$date2 = date("Ymd");
	$SO_File2 = "SO_Ter";
	$newname2 = $date2.$SO_File2.$numrand2.$type2;
	$path_copy2=$destfol2.$newname2;
	$path_copy2 = $_POST["SO_Ter"];
	
	############ Delete File 2 ############
	@unlink($_POST["SO_Ter"]);
	
	
	}else{
	
	############ Attack File 1 ############
	$destfol = "../project/Uploadfile/SO_File/";
	$type = strrchr($_FILES['SO_File']['name'],".");
	$numrand = (mt_rand());
	$date = date("Ymd");
	$SO_File = "SO_File";
	$newname = $date.$SO_File.$numrand.$type;
	$path_copy=$destfol.$newname;
	
	
	
	############ Attack File 2 ############
	$destfol2 = "../project/Uploadfile/SO_Ter/";
	$type2 = strrchr($_FILES['SO_Ter']['name'],".");
	$numrand2 = (mt_rand());
	$date2 = date("Ymd");
	$SO_File2 = "SO_Ter";
	$newname2 = $date2.$SO_File2.$numrand2.$type2;
	$path_copy2=$destfol2.$newname2;
	
	
	@unlink($_POST["Daigram"]);
	@unlink($_POST["SO_Ter"]);
	
	
	}
		


	$sql = "UPDATE BCP SET 
			Customer_Name = '".$Cust_name."' ,
			End_Date = '".$End_Date2."' ,
			Start_Date = '".$Start_Con2."' ,
			PM_Name = '".$PM_Name."' ,
			Sale_Name = '".$Sale_Name."' ,
			Pre_Sale = '".$Pre_Sale."' ,
			Service = '".$Service."', 
			SO_Num = '".$SO."',
			Data_BCP = '".$Data_BCP."',
			SO_File = '".$path_copy."',
			SO_Ter = '".$path_copy2."'
			WHERE Num_ID = '".$Num_ID."' ";


$query = mysqli_query($conn,$sql);

if($query) {

	$movefile4 = move_uploaded_file($_FILES['SO_File']['tmp_name'], $path_copy);
	$movefile3 = move_uploaded_file($_FILES['SO_Ter']['tmp_name'], $path_copy2);

echo "Record add successfully"."<br>";
echo '<a href="../project/index.php" >Go to Home</a>';

}else {
	echo "MySQL Connect Failed : Error : ".mysqli_error($conn);
}

mysqli_close($conn);


?>

