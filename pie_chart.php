<?php

//fetch.php

include('connect_db.php');

function pm_total($connect)
{
 $statement = $connect->prepare("SELECT * FROM pm_mnsp");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}
function mnsp_total($connect)
{
 $statement = $connect->prepare("SELECT * FROM mnsp");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}
function bcp_total($connect)
{
 $statement = $connect->prepare("SELECT * FROM BCP");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}
function report_total($connect)
{
 $statement = $connect->prepare("SELECT * FROM Report");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}

$output = array(
    "pm_mnsp" => pm_total($connect),
    "mnsp" => mnsp_total($connect),
    "bcp" => bcp_total($connect),
    "report" => report_total($connect)
);
echo json_encode($output);
?>
