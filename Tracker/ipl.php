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
  <th>100's</th>
  <th>200's</th>
  <th>50's</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "player");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT * FROM ipl";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Player_no"]. "</td><td>" . $row["I_M"] . "</td><td>" . $row["IB_inn"] . "</td><td>" . $row["IBL_inn"]. "</td><td>" . $row["IB_runs"]. "</td><td>" . $row["IBL_runs"]. "</td><td>" . $row["I_HS"]. "</td><td>" . $row["I_Wkts"]. "</td><td>" . $row["IB_avg"]. "</td><td>" . $row["IBL_avg"]. "</td><td>" . $row["IB_sr"]. "</td><td>" . $row["IBL_sr"]. "</td><td>" . $row["I_Hundreds"]. "</td><td>" . $row["I_Two_hundreds"]. "</td><td>" . $row["I_Fiftys"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>