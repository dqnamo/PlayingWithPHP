<?php
include 'con.php';


$name = $_POST['name'];

$getData = "select * from readingList WHERE `name` = '$name'";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur))
{
  echo '<tr>';
    foreach($r as $field) {
        echo " ".'<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}


@mysqli_close($con);
?>
