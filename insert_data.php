
<?php

//insert_data.php

include('connect_db.php');

if(isset($_POST["name"]))
{
 $error = '';
 $success = '';
 $name = '';
 $address = '';
 $designation = '';
 $age = '';
 $images = '';
 $ENDDate = '';
 $gender = $_POST["gender"];
 if(empty($_POST["name"]))
 {
  $error .= '<p>Name is Required</p>';
 }
 else
 {
  $name = $_POST["name"];
 }
 if(empty($_POST["address"]))
 {
  $error .= '<p>Address is Required</p>';
 }
 else
 {
  $address = $_POST["address"];
 }
 if(empty($_POST["designation"]))
 {
  $error .= '<p>Designation is Required</p>';
 }
 else
 {
  $designation = $_POST["designation"];
 }
 if(empty($_POST["age"]))
 {
  $error .= '<p>Age is Required</p>';
 }
 else
 {
  $age = $_POST["age"];
 }

 if(isset($_FILES["images"]["name"]) && $_FILES["images"]["name"] != '')
 {
  $image_name = $_FILES["images"]["name"];
  $array = explode(".", $image_name);
  $extension = end($array);
  $temporary_name = $_FILES["images"]["tmp_name"];
  $allowed_extension = array("jpg","png");
  if(!in_array($extension, $allowed_extension))
  {
   $error .= '<p>Invalid Image</p>';
  }
  else
  {
   $images = rand() . '.' . $extension;
   move_uploaded_file($temporary_name, 'images/' . $images);
  }
 }
 if(empty($_POST["ENDDate"]))
 {
  $error .= '<p>END is Required</p>';
 }
 else
 {
  $ENDDate = $_POST["ENDDate"];
 }

 if($error == '')
 {
  $data = array(
   ':name'   => $name,
   ':address'  => $address,
   ':gender'  => $gender,
   ':designation' => $designation,
   ':age'   => $age,
   ':images'  => $images,
   ':ENDDate'  => $ENDDate
  );

  $query = "
  INSERT INTO tbl_employee 
  (name, address, gender, designation, age, images, BTH) 
  VALUES (:name, :address, :gender, :designation, :age, :images, :ENDDate)
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
  $success = 'Employee Data Inserted';
 }
 $output = array(
  'success'  => $success,
  'error'   => $error
 );
 echo json_encode($output);
}

?>