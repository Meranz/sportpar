<?php
include 'config.php';
$sql="insert into register(name,ic,phone,gender) values
 ('$_POST[name]','$_POST[ic]','$_POST[phone]','$_POST[gender]')";
if(!mysqli_query($conn,$sql)){
		die ('Error: ' .mysqli_error($conn));
	}
	else {
echo "<script type='text/jscript'>alert('Registration has been submitted!')</script>";
header('refresh:0 url=index.html');
    }
?>