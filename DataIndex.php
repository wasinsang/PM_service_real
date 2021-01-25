<?php

include('connect_db.php');

$column = array('PMName', 'Status', 'Service');

$query = "
SELECT * FROM pm_mnsp 
";

if(isset($_POST['filter_country']) && $_POST['filter_country'] != '')
{
 $query .= '
 WHERE Status = "'.$_POST['filter_country'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY Num_ID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

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
 $sub_array[] = $row['Customer_Name'];
 $sub_array[] = $row['Status'];
 $sub_array[] = $row['End_Date'];
 $sub_array[] = $row['Start_Con'];
 $sub_array[] = $row['PM_Name'];
 $sub_array[] = $row['Sale_Name'];
 $sub_array[] = $row['Pre_Sale'];
 $sub_array[] = $row['Design'];
 $sub_array[] = $row['Actionplan'];
 $sub_array[] = $row['UAT'];
 $sub_array[] = $row['Service'];
 $sub_array[] = $row['SO'];
 $sub_array[] = $row['SO_file'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM pm_mnsp";
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