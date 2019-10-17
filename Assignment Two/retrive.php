<?php
include 'con.php';

$ID = $_POST['ID'];


$getData = "select * from readingList WHERE `ID` = '$ID'";
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
