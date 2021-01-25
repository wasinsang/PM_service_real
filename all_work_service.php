<?php

	/*** Connect ***/
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "Customer";
  
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  
	mysqli_set_charset($conn, "utf8");
   
$sql = "SELECT pm_mnsp.PM_Name,count(DISTINCT pm_mnsp.NUM_ID) as PM, count(DISTINCT mnsp.NUM_ID) as mnsp, count(DISTINCT BCP.NUM_ID) as BCP , count(DISTINCT Report.NUM_ID) as Report
FROM pm_mnsp 
LEFT JOIN mnsp 
ON pm_mnsp.PM_Name=mnsp.PM_Name
LEFT JOIN BCP 
ON pm_mnsp.PM_Name=BCP.PM_Name
LEFT JOIN Report 
ON pm_mnsp.PM_Name=Report.PM_Name
GROUP BY pm_mnsp.PM_Name
ORDER BY pm_mnsp.Num_ID DESC";
$query = mysqli_query($conn,$sql);


$x=0;
$data = array();
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
 $sub_array = array();
 if(strval($result['PM_Name']) == 'กุศรินทร์ วงษ์มานิตย์ (กุ๊กกู๋)'|| strval($result['PM_Name']) == 'ณัฐวัตร จ่อนดี (มิ้นท์)'|| strval($result['PM_Name']) == 'ธนากร ปล้องอ่อน (ปิง)'|| strval($result['PM_Name']) == 'พัฒณิศา ศรีชุ่มสิน (ดาด้า)'|| strval($result['PM_Name']) == 'พุฒิพงศ์ ม่วงนวล (อาร์ต)'|| strval($result['PM_Name']) == 'ศิรภัสสร พันธ์ดี (ตุ๊กตา)')
 {
	$x = $x+1;
 }
 else
 {
	$sub_array[] = strval($result['PM_Name']);
	$sub_array[] = strval($result['PM']);
	$sub_array[] = strval($result['mnsp']);
	$sub_array[] = strval($result['BCP']);
	$sub_array[] = strval($result['Report']);   
	$data[] = $sub_array;

 }
}


$output = array(
	"draw"       =>  12,
	"recordsTotal"   =>  12,
	"recordsFiltered"  =>  12,
 "data"       =>  $data
);

echo json_encode($output);

?>