<?php
$connect = mysqli_connect("localhost", "root", "", "loginphp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM register_tr2k 
	WHERE id LIKE '%".$search."%'
	OR fullName LIKE '%".$search."%'
	OR username LIKE '%".$search."%' 
	OR type LIKE '%".$search."%' 
	OR telephone LIKE '%".$search."%' 
	OR postalCode LIKE '%".$search."%'
	OR email LIKE '%".$search."%' 
	OR department LIKE '%".$search."%' 
	OR salary LIKE '%".$search."%'
	OR hiring_date LIKE '%".$search."%'
	OR address LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM register_tr2k ORDER BY id";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table-bordered">
						<tr class="table-success">
							<th>ID</th>
							<th>Name</th>
							<th>Username</th>
							<th>Position</th>
							<th>Email</th>
							<th>Address</th>
							<th>Postal code</th>
							<th>Department</th>
							<th>Salary</th>
							<th>Hiring Date</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{	
		//position rules
		if ($row["type"] == '0') {
			$test = 'Admin';
		}
		else {
			$test = 'Staff';
		}

		// print
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["fullName"].'</td>
				<td>'.$row["username"].'</td>
				<td>'.$test.'</td> 
				<td>'.$row["email"].'</td>
				<td>'.$row["address"].'</td>
				<td>'.$row["postalCode"].'</td>
				<td>'.$row["department"].'</td>
				<td>'.$row["salary"].' €'.'</td>
				<td>'.$row["hiring_date"].'</td>
				
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>