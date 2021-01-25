<?php
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "Customer";
   $mysqli = new mysqli($serverName,$userName,$userPassword,$dbName);
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT Customer_Name, Status, Due_Date, End_Date, Start_Con, PM_Name, Sale_Name
FROM pm_mnsp ";

$stmt = $mysqli->prepare($sql);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($cid, $cname, $name, $adr, $city, $pcode, $country);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Customer_Name</th>";
echo "<th>Status</th>";
echo "<th>Due_Date</th>";
echo "<th>End_Date</th>";
echo "<th>Start_Con</th>";
echo "<th>PM_Name</th>";
echo "<th>Sale_Name</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $cid . "</td>";
echo "<td>" . $cname . "</td>";
echo "<td>" . $name . "</td>";
echo "<td>" . $adr . "</td>";
echo "<td>" . $city . "</td>";
echo "<td>" . $pcode . "</td>";
echo "<td>" . $country . "</td>";
echo "</tr>";
echo "</table>";

?>