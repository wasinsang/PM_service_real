<?php

//delete_data.php

include('connect_db.php');

if(isset($_POST["id"]))
{
 $query = "
 DELETE FROM pm_mnsp 
 WHERE Num_ID = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
}

?>