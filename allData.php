<?php
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "Customer";
   $mysqli = new mysqli($serverName,$userName,$userPassword,$dbName);
if($mysqli->connect_error) {
  exit('Could not connect');
}
$sql = "SELECT Num_ID, Customer_Name, Status, Due_Date, End_Date, Start_Con, PM_Name, Sale_Name, Pre_sale, Design, Actionplan, UAT, Service, SO
FROM pm_mnsp ";

// $stmt = $mysqli->prepare($sql);
// $stmt->execute();
// $stmt->store_result();
// $stmt->bind_result($cid, $cname, $status, $due, $end, $start, $pm, $sale, $pre, $design);
// $stmt->fetch();
// $stmt->close();

// $result = mysqli_query($mysqli, $sql);
// echo $result;
if($result = mysqli_query($mysqli, $sql))
{
if (mysqli_num_rows($result) > 0) {
  // output data of each row

  while($row = mysqli_fetch_array($result)) {
   
    echo "<tr>";
    echo "<td>" . $row["Num_ID"]. "</td>";
    echo "<td>" . $row["Customer_Name"]. "</td>";
    echo "<td>" . $row["Status"]. "</td>";
    echo "<td>" . $row["End_Date"]. "</td>";
    echo "<td>" . $row["Start_Con"]. "</td>";
    echo "<td>" . $row["PM_Name"]. "</td>";
    echo "<td>" . $row["Sale_Name"]. "</td>";
    echo "<td>" . $row["Pre_sale"]. "</td>";
    echo "<td>" . $row["Design"]. "</td>";
    echo "<td>" . $row["Actionplan"]. "</td>";
    echo "<td>" . $row["UAT"]. "</td>";
    echo "<td>" . $row["Service"]. "</td>";
    echo "<td>" . $row["SO"]. "</td>";
    echo "</tr>";
    
      }
     echo "</table>";
} 
 else {
  echo "0 results";
}
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
$mysqli->close();
?>
