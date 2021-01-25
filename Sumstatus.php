<?php

//fetch.php

include('connect_db.php');
$query = '';
$output = array();
$query .= "SELECT * FROM pm_mnsp ";

$statement_UAT = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'UAT';");
$statement_UAT->execute();
$result_UAT = $statement_UAT->fetchAll();
$count_status_UAT = array_column($result_UAT, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_UAT as $result_UAT) {
$data_UAT= $result_UAT;
}



$statement_in = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'in progress';");
$statement_in->execute();
$result_in = $statement_in->fetchAll();
$count_status_in = array_column($result_in, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_in as $result_in) {
$data_in= $result_in;
}



$statement_com = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'complete';");
$statement_com->execute();
$result_com = $statement_com->fetchAll();
$count_status_com = array_column($result_com, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_com as $result_com) {
$data_com= $result_com;
}



$statement_hold = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'hold';");
$statement_hold->execute();
$result_hold = $statement_hold->fetchAll();
$count_status_hold = array_column($result_hold, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_hold as $result_hold) {
$data_hold= $result_hold;
}


$statement_Terminate = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'Terminate';");
$statement_Terminate->execute();
$result_Terminate = $statement_Terminate->fetchAll();
$count_status_Terminate = array_column($result_Terminate, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_Terminate as $result_Terminate) {
$data_Terminate= $result_Terminate;
}

$statement_Cus = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'Waiting Customer';");
$statement_Cus->execute();
$result_Cus = $statement_Cus->fetchAll();
$count_status_Cus = array_column($result_Cus, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_Cus as $result_Cus) {
$data_Cus= $result_Cus;
}

$statement_SO = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'Waiting Revise SO';");
$statement_SO->execute();
$result_SO = $statement_SO->fetchAll();
$count_status_SO = array_column($result_SO, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_SO as $result_SO) {
$data_SO= $result_SO;
}

$statement_cancel = $connect->prepare("SELECT COUNT(Status)
FROM pm_mnsp
WHERE Status = 'Cancel';");
$statement_cancel->execute();
$result_cancel = $statement_cancel->fetchAll();
$count_status_cancel = array_column($result_cancel, 'COUNT(Status)');
//  print_r(array_values($result));
//  print_r(array_keys($result));
//  print_r($count_status);
foreach ($count_status_cancel as $result_cancel) {
$data_cancel= $result_cancel;
}


function pm_total($connect)
{
 $statement = $connect->prepare("SELECT * FROM pm_mnsp");
 $statement->execute();
 $result = $statement->fetchAll();
 return $statement->rowCount();
}









$data = array(
    'UAT' => $data_UAT,
    'hold'  => $data_hold,
    'complete'  => $data_com,
    'in_pro' => $data_in,
    'SO' => $data_SO,
    'Cus' => $data_Cus,
    'Ter' => $data_Terminate,
    'sum' => pm_total($connect),
    'cancel' => $data_cancel
);
echo json_encode($data);
?>
