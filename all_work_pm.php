<?php

	/*** Connect ***/
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "Customer";
 
	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
 
	mysqli_set_charset($conn, "utf8");
 
 
	// status
	$in_progress = 0;
	$UAT = 0;
	$complete = 0;
	$hold = 0;
	$cancle = 0;
	$terminate = 0;
	$wait_cus = 0;
	$wait_re_so = 0;
	// ----------------------
	$pm_name = "";
	$allPM = array("");
	$allStatus = array();
	//สามารถre-check ความถูกต้อง โดยใช้ คำสั่ง "SELECT COUNT(Status),Status,PM_Name from pm_mnsp GROUP BY PM_Name, Status" นี้
	$sqlPM_ = "SELECT distinct PM_Name  FROM `pm_mnsp`";
	$queryPM = mysqli_query($conn,$sqlPM_);
	$i=0;
	$pm_name = "";
	$sqlCountPM = "SELECT COUNT(distinct PM_Name) as count FROM `pm_mnsp`";

	$queryCount = mysqli_query($conn,$sqlCountPM);
	$resultCount=mysqli_fetch_array($queryCount,MYSQLI_ASSOC);
	$count = ($resultCount["count"]);
	while($resultPM=mysqli_fetch_array($queryPM,MYSQLI_ASSOC)){ //loop pm name
		$sumData[$i] = array($resultPM['PM_Name'],$in_progress,$UAT,$complete,$hold,$cancle,$terminate,$wait_cus,$wait_re_so);
		$i+=1;
	}
	$sqlStatus = "SELECT Status, PM_Name  FROM `pm_mnsp`";
	$queryStatus = mysqli_query($conn,$sqlStatus);
	$j =0;
	while($resultStatus=mysqli_fetch_array($queryStatus,MYSQLI_ASSOC)){// loop status for pm name
		array_push($allStatus,$resultStatus);
		$temp=array_search($resultStatus["PM_Name"],array_column($sumData, 0),true); 
		// echo "$temp "."$j ".$sumData[$temp][0]. " ". $allStatus[$j]["Status"] ."<br>";
		if ($allStatus[$j]["Status"] === "in progress") {
			$sumData[$temp][1] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][1]."in progress"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "UAT") {
			$sumData[$temp][2] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][2]."UAT"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "complete") {
			$sumData[$temp][3] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][3]."complete"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "hold") {
			$sumData[$temp][4] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][4]."hold"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "Cancel") {
			$sumData[$temp][5] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][5]."Cancel"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "Terminate") {
			$sumData[$temp][6] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][6]."Terminate"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "Waiting Customer") {
			$sumData[$temp][7] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][7]."Waiting Customer"."<br>";
		}
		elseif ($allStatus[$j]["Status"] === "Waiting Revise SO")  {
			$sumData[$temp][8] += 1;
			// echo "who".$sumData[$temp][0]."--".$sumData[$temp][8]."Waiting SO"."<br>";
		}
		$j+=1;
	}
	// print_r($allStatus);	
	// print_r($allStatus[0]["Status"]);
	// print_r($allStatus[0]["PM_Name"]);
	$x=0;
	$sum=0;
	$data = array();
		// echo "<td>", $sumData[0][0],"</td>";
		// $sum = $sumData[0][1] + $sumData[0][2] + $sumData[0][3] + $sumData[0][6] +$sumData[0][7] + $sumData[0][8];
		// echo "<td class='table_center'>", $sum,"</td>";
		// echo "<td class='table_center'>", $sumData[0][1],"</td>";
		// echo "<td class='table_center'>", $sumData[0][2],"</td>";
		// echo "<td class='table_center'>", $sumData[0][3],"</td>";
		// echo "<td class='table_center'>", $sumData[0][7],"</td>";
		// echo "<td class='table_center'>", $sumData[0][8],"</td>";
		// echo "<td class='table_center'>", $sumData[0][6],"</td>";	 


		while($x < $count) {
			$sub_array = array();

			if(strval($sumData[$x][0]) == 'กุศรินทร์ วงษ์มานิตย์ (กุ๊กกู๋)'|| $sumData[$x][0] == 'ณัฐวัตร จ่อนดี (มิ้นท์)'|| $sumData[$x][0] == 'ธนากร ปล้องอ่อน (ปิง)'|| $sumData[$x][0] == 'พัฒณิศา ศรีชุ่มสิน (ดาด้า)'|| $sumData[$x][0] == 'พุฒิพงศ์ ม่วงนวล (อาร์ต)'|| $sumData[$x][0] == 'ศิรภัสสร พันธ์ดี (ตุ๊กตา)')
			{
			   $x = $x+0;
			}
			else
			{
				$sum = $sumData[$x][1] + $sumData[$x][2] + $sumData[$x][3] + $sumData[$x][6] +$sumData[$x][7] + $sumData[$x][8];
				// echo "<td class='table_center'>", $sum,"</td>";
				// echo "<td class='table_center'>", $sumData[$x][1],"</td>";
				// echo "<td class='table_center'>", $sumData[$x][2],"</td>";
				// echo "<td class='table_center'>", $sumData[$x][3],"</td>";
				// echo "<td class='table_center'>", $sumData[$x][7],"</td>";
				// echo "<td class='table_center'>", $sumData[$x][8],"</td>";
				// echo "<td class='table_center'>", $sumData[$x][6],"</td>";	   
				$sub_array[] = strval($sumData[$x][0]);
				$sub_array[] = strval($sum);
				$sub_array[] = strval($sumData[$x][1]);
				$sub_array[] = strval($sumData[$x][2]);
				$sub_array[] = strval($sumData[$x][3]);
				$sub_array[] = strval($sumData[$x][7]);
				$sub_array[] = strval($sumData[$x][8]);
				$sub_array[] = strval($sumData[$x][6]);
				// var_dump(strval($sumData[$x][6]));
				$data[] = $sub_array;
				   
			}
		   
		// echo "<td>", $sumData[$x][0],"</td>";
		// $sum = $sumData[$x][1] + $sumData[$x][2] + $sumData[$x][3] + $sumData[$x][6] +$sumData[$x][7] + $sumData[$x][8];
		// // echo "<td class='table_center'>", $sum,"</td>";
		// // echo "<td class='table_center'>", $sumData[$x][1],"</td>";
		// // echo "<td class='table_center'>", $sumData[$x][2],"</td>";
		// // echo "<td class='table_center'>", $sumData[$x][3],"</td>";
		// // echo "<td class='table_center'>", $sumData[$x][7],"</td>";
		// // echo "<td class='table_center'>", $sumData[$x][8],"</td>";
		// // echo "<td class='table_center'>", $sumData[$x][6],"</td>";	   
		// $sub_array[] = strval($sumData[$x][0]);
		// $sub_array[] = strval($sum);
		// $sub_array[] = strval($sumData[$x][1]);
		// $sub_array[] = strval($sumData[$x][2]);
		// $sub_array[] = strval($sumData[$x][3]);
		// $sub_array[] = strval($sumData[$x][7]);
		// $sub_array[] = strval($sumData[$x][8]);
		// $sub_array[] = strval($sumData[$x][6]);
		// // var_dump(strval($sumData[$x][6]));
		// $data[] = $sub_array;

		$x++;
		$sum=0;
		

	}
	
// foreach($result as $row)
// {
//  $sum = $sumData[$x][1] + $sumData[$x][2] + $sumData[$x][3] + $sumData[$x][6] +$sumData[$x][7] + $sumData[$x][8];
// }



// function count_all_data($connect)
// {
//  $query = "SELECT * FROM pm_mnsp";
//  $statement = $connect->prepare($query);
//  $statement->execute();
//  return $statement->num_rows;
// }

$output = array(
	"draw"       =>  17,
	"recordsTotal"   =>  17,
	"recordsFiltered"  =>  17,
	"data"       =>  $data
   );
   
   echo json_encode($output);
//    print_r($data);
?>