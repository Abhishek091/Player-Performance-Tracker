<?php
echo "Query Entered is :";
$query= $_GET['Query'];
echo $query;
$mysqli = new mysqli("localhost", "root", "", "player");
$result = $mysqli->query($query);
if (!$result)
{
    $message = 'ERROR:' . mysql_error();
    return $message;
}
else
{
    $i = 0;
    echo '<html><body><table border=1><tr>';
    while ($i < mysqli_num_fields($result))
    {
        $meta = mysqli_fetch_field($result);
        echo '<td>' . $meta->name . '</td>';
        $i = $i + 1;
    }
    echo '</tr>';
    $i = 0;
    while ($row = mysqli_fetch_row($result))
    {
        echo '<tr>';
        $count = count($row);
        $y = 0;
        while ($y < $count)
        {
            $c_row = current($row);
            echo '<td>' . $c_row . '</td>';
            next($row);
            $y = $y + 1;
        }
        echo '</tr>';
        $i = $i + 1;
    }
    echo '</table></body></html>';
    mysqli_free_result($result);
}
echo '<a href="http://localhost/mp/queries.php">Click to Enter another query!</a>';
mysqli_close($mysqli);
?>