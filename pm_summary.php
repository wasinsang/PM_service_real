<?php

//fetch.php

include('connect_db.php');
$query = '';
$output = array();
$query1 .= "SELECT PM_Name, 
SUM () 
FROM pm_mnsp 
GROUP BY agent_code;";
$query2 .= "SELECT * FROM MNSP ";
$query3 .= "SELECT * FROM BCP ";
$query4 .= "SELECT * FROM Report ";
if(isset($_POST["search"]["value"]))
{
 $query1 .= '';
}
if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
 $query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["name"];
 $sub_array[] = $row["gender"];
 $sub_array[] = $row["designation"];
 $sub_array[] = $row["age"];
 $data[] = $sub_array;
}

function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT * FROM tbl_employee");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  $filtered_rows,
 "recordsFiltered" => get_total_all_records($connect),
 "data"    => $data
);
echo json_encode($output);
?>
