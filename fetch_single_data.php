<?php

//fetch_single_data.php

include('connect_db.php');

if(isset($_POST["id"]))
{
 $query = "
 SELECT * FROM BCP WHERE Num_ID = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

?>