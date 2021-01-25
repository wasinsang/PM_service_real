
<?php

//insert_data.php
// มีปัญหาตรงดัเทล
include('connect_db.php');

if(isset($_POST["Customer_Name"]))
{
  $error = '';
  $success = '';
  $Customer_Name = '';
  $Num_ID = '';
  $Customer_info = '';
  $Sale_Name = '';
  $Pre_sale = '';
  $Service = '';
  $SO_Num = '';
  $SO_File = '';
  $Start_Date = '';
  $END_Date = '';
  // $Diagram = '';
  // $UAT = '';
  // $Confirm_UAT = '';
  // $Status = '';
  $PM_Name = $_POST["PM_Name"];
  if(empty($_POST["Customer_Name"]))
  {
   $error .= '<p>Customer_Name is Required</p>';
  }
  else
  {
   $Customer_Name = $_POST["Customer_Name"];
  }
  if(empty($_POST["Num_ID"]))
  {
   $error .= '<p>Num_ID is Required</p>';
  }
  else
  {
   $Num_ID = $_POST["Num_ID"];
  }
  if(empty($_POST["Customer_info"]))
  {
   $error .= '<p>Customer_info is Required</p>';
  }
  else
  {
   $Customer_info = $_POST["Customer_info"];
  }
  if(empty($_POST["PM_Name"]))
  {
   $error .= '<p>PM_Name is Required</p>';
  }
  else
  {
   $PM_Name = $_POST["PM_Name"];
  }
  if(empty($_POST["Sale_Name"]))
  {
   $error .= '<p>Sale_Name is Required</p>';
  }
  else
  {
   $Sale_Name = $_POST["Sale_Name"];
  }
  if(empty($_POST["Pre_sale"]))
  {
   $error .= '<p>Pre_sale is Required</p>';
  }
  else
  {
   $Pre_sale = $_POST["Pre_sale"];
  }
  if(empty($_POST["Service"]))
  {
   $error .= '<p>Service is Required</p>';
  }
  else
  {
   $Service = $_POST["Service"];
  }
  if(empty($_POST["SO_Num"]))
  {
   $error .= '<p>SO_Num is Required</p>';
  }
  else
  {
   $SO_Num = $_POST["SO_Num"];
  }
  
 if(isset($_FILES["SO_File"]["name"]) && $_FILES["SO_File"]["name"] != '')
 {
  $image_name = $_FILES["SO_File"]["name"];
  $array = explode(".", $image_name);
  $extension = end($array);
  $temporary_name = $_FILES["SO_File"]["tmp_name"];
  $allowed_extension = array("jpg","png","xlse","csv","pdf","zip","doc");
  if(!in_array($extension, $allowed_extension))
  {
   $error .= '<p>Invalid SO_File</p>';
  }
  else
  {
   $SO_File = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, '../project/Uploadfile/SO_File/' . $SO_File);
   $SO_Filee = '../project/Uploadfile/SO_File/' . $SO_File;
  }
 }
 if(isset($_FILES["SO_Ter"]["name"]) && $_FILES["SO_Ter"]["name"] != '')
 {
  $image_name = $_FILES["SO_Ter"]["name"];
  $array = explode(".", $image_name);
  $extension = end($array);
  $temporary_name = $_FILES["SO_Ter"]["tmp_name"];
  $allowed_extension = array("jpg","png","xlse","csv","pdf","zip","doc");
  if(!in_array($extension, $allowed_extension))
  {
   $error .= '<p>Invalid SO_Ter</p>'; 
  }
  else
  {
   $SO_Ter = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, '../project/Uploadfile/SO_Ter/' . $SO_Ter);
   $SO_Terr = '../project/Uploadfile/SO_Ter/' . $SO_Ter;

  }
 }

 if(empty($_POST["Start_Date"]))
 {
  $error .= '<p>Start_Date is Required</p>';
 }
 else
 {
  $Start_Date = $_POST["Start_Date"];
 }
 if(empty($_POST["END_Date"]))
 {
  $error .= '<p>END_Date is Required</p>';
 }
 else
 {
  $END_Date = $_POST["END_Date"];
 }
 if(isset($_FILES["Diagram"]["name"]) && $_FILES["Diagram"]["name"] != '')
 {
  $Diagram_name = $_FILES["Diagram"]["name"];
  $array = explode(".", $Diagram_name);
  $extension = end($array);
  $temporary_name = $_FILES["Diagram"]["tmp_name"];
  $allowed_extension = array("jpg","png","xlse","csv","pdf","zip","doc");
  if(!in_array($extension, $allowed_extension))
  {
   $error .= '<p>Invalid Diagram</p>';
  }
  else
  {
   $Diagram = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, '../project/Uploadfile/Diagram/' . $Diagram);
   $Diagramm = '../project/Uploadfile/Diagram/' . $Diagram;

  }
 }
 if(isset($_FILES["UAT"]["name"]) && $_FILES["UAT"]["name"] != '')
 {
  $UAT_name = $_FILES["UAT"]["name"];
  $array = explode(".", $UAT_name);
  $extension = end($array);
  $temporary_name = $_FILES["UAT"]["tmp_name"];
  $allowed_extension = array("jpg","png","xlse","csv","pdf","zip","doc");
  if(!in_array($extension, $allowed_extension))
  {
   $error .= '<p>Invalid UAT</p>';
  }
  else
  {
   $UAT = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, '../project/Uploadfile/UAT/' . $UAT);
   $UATT = '../project/Uploadfile/UAT/' . $UAT;

  }
 }
 if(isset($_FILES["Confirm_UAT"]["name"]) && $_FILES["Confirm_UAT"]["name"] != '')
 {
  $Confirm_UAT_name = $_FILES["Confirm_UAT"]["name"];
  $array = explode(".", $Confirm_UAT_name);
  $extension = end($array);
  $temporary_name = $_FILES["Confirm_UAT"]["tmp_name"];
  $allowed_extension = array("jpg","png","xlse","csv","pdf","zip","doc");
  if(!in_array($extension, $allowed_extension))
  {
   $error .= '<p>Invalid UAT</p>';
  }
  else
  {
   $Confirm_UAT = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, '../project/Uploadfile/Confirm_UAT/' . $Confirm_UAT);
   $Confirm_UATT = '../project/Uploadfile/Confirm_UAT/' . $Confirm_UAT;

  }
 }
 if(empty($_POST["Status"]))
 {
  $error .= '<p>Status is Required</p>';
 }
 else
 {
  $Status = $_POST["Status"];
 }





 if($error == '')
 {
  $data = array(
   ':Customer_Name' => $Customer_Name,
   ':Num_ID'  => $Num_ID,
   ':Customer_info'  => $Customer_info,
   ':Sale_Name' => $Sale_Name,
   ':Pre_sale'   => $Pre_sale,
   ':Service'  => $Service,
   ':SO_Num'  => $SO_Num,
   ':SO_File' => $SO_Filee,
   ':SO_Ter' => $SO_Terr,
   ':Start_Date'   => $Start_Date,
   ':END_Date'  => $END_Date,
   ':PM_Name' => $PM_Name,
   ':UAT'  => $UATT,
   ':Confirm_UAT'  => $Confirm_UATT,
   ':Status'  => $Status,
   ':Diagram' => $Diagramm
  );

  $query = "
  INSERT INTO pm_mnsp 
  (Customer_Name, SO_Ter, Customer_id, Customer_info, PM_Name, Sale_Name, Pre_Sale, Service, SO_Num, SO_file, Start_Con, End_Date, Diagram, UAT, Confirm_UAT, Status) 
  VALUES (:Customer_Name, :SO_Ter, :Num_ID, :Customer_info, :PM_Name, :Sale_Name, :Pre_sale, :Service, :SO_Num, :SO_File, :Start_Date, :END_Date, :Diagram, :UAT, :Confirm_UAT, :Status)
  ";
  // $query = "
  // INSERT INTO pm_mnsp 
  // (Customer_Name, Num_ID, Customer_info, PM_Name, Sale_Name, Pre_Sale, Service, SO_Num, SO_file, Start_Con, End_Date) 
  // VALUES (:Customer_Name, :Num_ID, :Customer_info, :PM_Name, :Sale_Name, :Pre_sale, :Service, :SO_Num, :SO_File, :Start_Date, :END_Date)
  // ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $success = 'Employee Data Inserted';
 }
 $output = array(
  'success'  => $data,
  'error'   => $error
 );
 echo json_encode($output);
}

?>