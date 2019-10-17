
<!DOCTYPE html>
<html>
<head>
	<title>CS230 A5</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
	<div class="box">
	<form method="post" action="insert.php" >
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>
		<div class="input-group">
			<label>URL</label>
			<input type="text" name="URL" value="">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="theDesc" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="create" action="select.php">Create</button>
		</div>
	</form>
</div>

<div class="box">
<form method="post" action="retrive.php">
	<div class="input-group">
		<label>ID</label>
		<input type="text" name="ID" value="">
	</div>
	<div class="input-group">
		<button class="btn" type="submit" name="save" >Retrive</button>
	</div>
</form>
</div>

<div class="box">
<form method="post" action="retrive1.php">
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="">
	</div>
	<div class="input-group">
		<button class="btn" type="submit" name="save" >Retrive</button>
	</div>
</form>
</div>

<div class="box">
<form method="post" action="update.php" >
	<div class="input-group">
		<label>Row ID you want to change</label>
		<input type="text" name="ID" value="">
	</div>
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" value="">
	</div>
	<div class="input-group">
		<label>URL</label>
		<input type="text" name="URL" value="">
	</div>
	<div class="input-group">
		<label>Description</label>
		<input type="text" name="theDesc" value="">
	</div>
	<div class="input-group">
		<button class="btn" type="submit" name="save" >Update</button>
	</div>
</form>
</div>

<div class="box">
<form method="post" action="delete.php" >
	<div class="input-group">
		<label>ID</label>
		<input type="text" name="ID" value="">
	</div>
	<div class="input-group">
		<button class="btn" type="submit" name="save" >Delete</button>
	</div>
</form>
</div>
</center>
<?php
$url = 'data.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed


?>
<table>
	<tbody>
		<tr>
			<th>ID</th>
			<th>Date</th>
			<th>Name</th>
			<th>URL</th>
			<th>Desc</th>
		</tr>

		<?php
		foreach ($characters as $character) : ?>
        <tr>
            <td> <?php echo $character->ID; ?> </td>
            <td> <?php echo $character->theDate; ?> </td>
						<td> <?php echo $character->name; ?> </td>
						<td> <?php echo $character->URL; ?> </td>
						<td> <?php echo $character->theDesc; ?> </td>
        </tr>
		<?php endforeach;

	?>
	</tbody>
</table>
</body>
</html>
