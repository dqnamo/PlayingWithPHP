<?php
include 'con.php';

$name = $_POST['name'];
$URL = $_POST['URL'];
$theDesc = $_POST['theDesc'];


$sql = "INSERT INTO `mysql`.`readingList` (`name`,`URL`,`theDesc`) VALUES ('$name','$URL','$theDesc');";

if($connection->query($sql))
{
  $msg = array("msg" => "Insert Success");
}
else
{
  echo "Error: ".$sql."<br>".mysqli_error($connection);
}

$json = $msg;
header('content-type: application/json');
echo json_encode($json);

$getData = "select * from readingList";
$qur = $connection->query($getData);

while($r = mysqli_fetch_assoc($qur))
{
  $msg1[] = array("ID" => $r['ID'], "theDate" => $r['theDate'], "name" => $r['name'], "URL" => $r['URL'], "theDesc" => $r['theDesc']);
}
$json1 = $msg1;
header('content-type: application/json');

$fp = fopen('data.json', 'w');
fwrite($fp, json_encode($json1));
fclose($fp);

@mysqli_close($con);
header("Location: index.php");
?>
