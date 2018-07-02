<?php 
	include "global.php"; 
?>

<!-- form submission -->

<?php
$status = "2";

if(isset($_POST["loc_submit"])){
	require_once "map.php";
	$loc_name 	 = $_POST["loc_name"];
	$loc_address = $_POST["loc_address"];
	$loc_cat     = $_POST["loc_cat"];
	$db = new Map;
	$status = $db->insertFormData($loc_name,$loc_address,$loc_cat);
}
?>

<!-- form for getting location details -->

<div class="container">
	<h2>Location Details</h2>
	<form action="" method="post">
		<div class="form-group">
			<label for="loc_name">Location Name</label>
			<input type="text" name="loc_name" class="form-control" id="loc_name" placeholder="Location Name" required>
		</div>
		<div class="form-group">	
			<label for="loc_address">Location Address</label>
			<textarea name="loc_address" class="form-control" id="loc_address" placeholder="Location Address" required></textarea>
		</div>
		<div class="form-group">
			<label for="loc_cat">Select Location Category</label>
				<select class="form-control" name="loc_cat" id="loc_cat" required>
					<option disabled selected value>Select Location Category</option>
					<option value="a">a</option>
					<option value="b">b</option>
				</select>
		</div>
		<div>
			<input type="submit" name="loc_submit" class="btn btn-default" id="loc_submit" value="SUBMIT">
		</div>
	</form>
	<?php if($status == 1){ ?>
		<div class="alert alert-success">
			Location have been updated successfully!
		</div>
	<?php } elseif($status == 0){ ?>	
		<div class="alert alert-danger">
			Error!
		</div>
	<?php } else {  }?>	
</div>

