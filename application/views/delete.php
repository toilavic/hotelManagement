<!-- database conncection -->
<?php
 
 $con = mysqli_connect("localhost","root","","loginphp");
 if(!$con){
    echo "failed to connect";
 }


	$id = $_POST['delete_id'] ;
	$query = mysqli_query($con, "DELETE FROM payment WHERE id ='$id'");
?>