<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
   body{
       background-color: powderblue;
      }
  table {
   border-collapse: collapse;
   width: 100%;
   color: #00000;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #B71C1C;
   color: white;
    }
  // for zebra pattern tr:nth-child(even) {background-color: #f2f2f2}
 </style>
</head>
<body>
 <table>
 <tr>
  <th>Pno</th> 
  <th>M</th> 
  <th>BTinn</th>
  <th>BLinn</th>
  <th>BTruns</th>
  <th>BLruns</th>
  <th>HS</th>
  <th>Wkts</th>
  <th>BTavg</th>
  <th>BLavg</th>
  <th>BTsr</th>
  <th>BLsr</th>
  <th>Hundred_S</th>
  <th>Two_hundreds</th>
  <th>Fifty_s</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "player");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM tst";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Pno"]. "</td><td>" . $row["M"] . "</td><td>" . $row["BTinn"] . "</td><td>" . $row["BLinn"]. "</td><td>" . $row["BTruns"]. "</td><td>" . $row["BLruns"]. "</td><td>" . $row["HS"]. "</td><td>" . $row["Wkts"]. "</td><td>" . $row["BTavg"]. "</td><td>" . $row["BLavg"]. "</td><td>" . $row["BTsr"]. "</td><td>" . $row["BLsr"]. "</td><td>" . $row["Hundred_s"]. "</td><td>" . $row["Two_hundreds"]. "</td><td>" . $row["Fifty_s"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>