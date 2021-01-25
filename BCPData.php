<?php

include('connect_db.php');

$column = array('CustomerName', 'CusID', 'Start_Date', 'END_Date', 'PM', 'Sale', 'Pre_Sale', 'Service', 'SO_Num', 'SO_file', 'Detail' );

$query = "
SELECT * FROM BCP 
";
$query .= 'ORDER BY Num_ID DESC ';
$query1 = '';
// $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = '<a href="../project/forumBCP.php?Num_ID='.$row["Num_ID"].'">'.$row['Customer_Name'].'</a>';
 $sub_array[] = $row['Customer_id'];
 $sub_array[] = '<a href="'.($row['SO_File']).'" >'.$row['SO_Num'].'</a>';
 $sub_array[] = $row['Start_Date'];
 $sub_array[] = $row['End_Date'];
 $sub_array[] = $row['Service'];
 $sub_array[] = $row['Pre_Sale'];
 $sub_array[] = $row['Sale_Name'];
 $sub_array[] = $row['PM_Name'];
 $sub_array[] = $row['Data_BCP'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM BCP";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);
?>