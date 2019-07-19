<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
   body{
       background-image: url("pattern.jpg");
	   height: 100%;
	   background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
      }
  table {
   border-collapse: collapse;
   width: 100%;
   color: #FFFFFF;
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
  <th>Gid</th> 
  <th>Game</th> 
  <th>Release Date</th>
  <th>Exclusive</th>
  <th>ESRB Rating</th>
 </tr>
 <?php
$conn = mysqli_connect("localhost", "root", "", "player");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Player_id, Name, DOB, Country, Role FROM player";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Player_id"]. "</td><td>" . $row["Name"] . "</td><td>" . $row["DOB"] . "</td><td>" . $row["Country"]. "</td><td>" . $row["Role"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>