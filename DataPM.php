
<?php

include('connect_db.php');

$column = array('Num_ID', 'Customer_Name', 'Status', 'End_Date', 'Start_Con', 'PM_Name', 'Sale_Name', 'Service', 'Pre_Sale', 'Diagram', 'Confirm_UAT', 'UAT', 'SO_Num', 'SO_file', 'Customer_info');
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
    $sub_array[] = '<a href="../project/forumPM.php?Num_ID='.$row["Num_ID"].'">'.$row['Customer_Name'].'</a>';
    $sub_array[] = $row['Customer_id'];
    // $sub_array[] = $row['Customer_info'];
    $sub_array[] = '<a href="'.($row['SO_File']).'" >'.$row['SO_Num'].'</a>';
    $sub_array[] = $row['End_Date'];
    $sub_array[] = $row['Start_Con'];
    $sub_array[] = $row['Service'];
    $sub_array[] = $row['Sale_Name'];
    $sub_array[] = $row['Pre_Sale']; 
    $sub_array[] = $row['PM_Name'];
    // $sub_array[] = '<a href="'.($row['Confirm_UAT']).'" target="_blank"><img src="../project/Uploadfile/download-flat.png" width="40" height="40"></a>';
    // $sub_array[] = '<a href="'.($row['UAT']).'" target="_blank"><img src="../project/Uploadfile/download-flat.png" width="40" height="40"></a>';
    $sub_array[] = $row['Status'];
    // $sub_array[] = '<a href="'.($row['Diagram']).'" target="_blank"><img src="../project/Uploadfile/download-flat.png" width="40" height="40"></a>';
    // $sub_array[] = '<button type="button" name="delete" id="'.$row["Num_ID"].'" class="btn btn-danger btn-xs delete">Delete</button>';
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
