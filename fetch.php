<?php

//fetch.php

include('connect_db.php');
$query = '';
$output = array();
$query .= "SELECT * FROM pm_mnsp ";
if(isset($_POST["search"]["value"]))
{
 $query .= 'WHERE name LIKE "%'.$_POST["search"]["value"].'%" OR address LIKE "%'.$_POST["search"]["value"].'%" OR gender LIKE "%'.$_POST["search"]["value"].'%" OR designation LIKE "%'.$_POST["search"]["value"].'%" OR age LIKE "%'.$_POST["search"]["value"].'%" ';
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
 $data[] = $sub_array;
}
function get_total_all_records($connect)
{
 $statement = $connect->prepare("SELECT * FROM pm_mnsp");
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
echo (get_total_all_records($connect));
?>
