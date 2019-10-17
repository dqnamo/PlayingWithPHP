<?php include('code.php'); 

	if(isset($_GET['edit'])){
	$id=$_GET['edit'];
	$update=true;
	$rec=mysqli_query($db,"SELECT * FROM eBook_MetaData WHERE id=$id");
	if (count($rec) == 1 ) {
	$record=mysqli_fetch_array($rec);
	$creator=$record['creator'];
	$title=$record['title'];
	$type=$record['type'];
	$identifier=$record['identifier'];
	$date=$record['date'];
	$language=$record['language'];
	$description=$record['description'];
	}
	}

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<center><h1>eBook Metadata</h1></center>
<center><h4>John Paul</h4></center>

<form method="post" action="code.php">
	<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>Creator</label>
			<input type="text" name="creator" value="<?php echo $creator; ?>">
		</div>
		<div class="input-group">
			<label>Title</label>
			<input type="text" name="title" value="<?php echo $title; ?>">
		</div>
		<div class="input-group">
			<label>Type</label>
			<input type="text" name="type" value="<?php echo $type; ?>">
		</div>
		<div class="input-group">
			<label>Identifier</label>
			<input type="text" name="identifier" value="<?php echo $identifier; ?>">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="Date" name="date" value="<?php echo $date; ?>">
		</div>
		<div class="input-group">
			<label>Language</label>
			<input type="text" name="language" value="<?php echo $language; ?>">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="description" value="<?php echo $description; ?>">
		</div>
		<div class="input-group">
		<?php if($update == false): ?>
			<button type="submit" name="save" class="btn">Save</button>	
		<?php else: ?>
			<button type="submit" name="update" class="btn">Update</button>
		<?php endif ?>
		</div>
	</form>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>CREATOR</th>
				<th>TITLE</th>
				<th>TYPE</th>
				<th>IDENTIFIER</th>
				<th>DATE</th>
				<th>LANGUAGE</th>
				<th>DESCRIPTION</th>
			</tr>
		</thead>
		<tbody>
			<?php while($row=mysqli_fetch_array($results)) { ?>
				<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['creator']; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['type']; ?></td>
				<td><?php echo $row['identifier']; ?></td>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['language']; ?></td>
				<td><?php echo $row['description'];  ?></td>
				<td>
					<a class="edit_btn" href="index.php?edit=<?php echo $row['id']; ?>">edit</a>
				</td>
				<td>
					<a class="del_btn" href="code.php? del=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
		</tbody>
	<table>

	
</body>
</html>







