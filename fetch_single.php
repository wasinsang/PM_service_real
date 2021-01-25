<?php

//fetch_single.php

include('connect_db.php');

if(isset($_GET["id"]))
{
 $query = "SELECT * FROM tbl_employee WHERE id = '".$_GET["id"]."'";

 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<div class="row">';
 foreach($result as $row)
 {
  $images = '';
  if($row["images"] != '')
  {
   $images = '<img src="images/'.$row["images"].'" class="img-responsive img-thumbnail" />';
  }
  else
  {
   $images = '<img src="https://www.gravatar.com/avatar/38ed5967302ec60ff4417826c24feef6?s=80&d=mm&r=g" class="img-responsive img-thumbnail" />';
  }
  $output .= '
  <div class="col-md-3">
   <br />
   '.$images.'
  </div>
  <div class="col-md-9">
   <br />
   <p><label>Name :&nbsp;</label>'.$row["name"].'</p>
   <p><label>Address :&nbsp;</label>'.$row["address"].'</p>
   <p><label>Gender :&nbsp;</label>'.$row["gender"].'</p>
   <p><label>Designation :&nbsp;</label>'.$row["designation"].'</p>
   <p><label>Age :&nbsp;</label>'.$row["age"].' years</p>
  </div>
  </div><br />
  ';
 }
 echo $output;
}

?>
