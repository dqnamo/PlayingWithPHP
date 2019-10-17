<?php

	session_start();

	$creator="";
	$title="";
	$type="";
	$identifier="";
	$date="";
	$language="";
	$description="";
	$id=0;
	$update=false;

	$db=mysqli_connect('localhost','root','','mysql');

	if(isset($_POST['save'])){
	$creator=$_POST['creator'];
	$title=$_POST['title'];
	$type=$_POST['type'];
	$identifier=$_POST['identifier'];
	$date=$_POST['date'];
	$language=$_POST['language'];
	$description=$_POST['description'];

	$query= "INSERT INTO eBook_MetaData(creator,title,type,identifier,date,language,description) VALUES ('$creator','$title','$type','$identifier','$date','$language','$description')";
	mysqli_query($db,$query);
	header('location:index.php');
	}

	if(isset($_POST['update'])){
	$id = $_POST['id'];
	$creator=$_POST['creator'];
	$title=$_POST['title'];
	$type=$_POST['type'];
	$identifier=$_POST['identifier'];
	$date=$_POST['date'];
	$language=$_POST['language'];
	$description=$_POST['description'];


	mysqli_query($db,"UPDATE eBook_MetaData SET creator='$creator',title='$title',type='$type',identifier='$identifier',date='$date', language='$language',description='$description' WHERE id='$id'");
	header('location: index.php');
	}

	if(isset($_GET['del'])){
	$id=$_GET['del'];
	mysqli_query($db,"DELETE FROM eBook_MetaData WHERE id=$id");
	header('location: index.php');
	}

	$results=mysqli_query($db,"SELECT * FROM eBook_MetaData");










?>
