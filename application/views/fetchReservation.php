<?php
$connect = mysqli_connect("localhost", "root", "", "loginphp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM reservation 
	WHERE customer_id LIKE '%".$search."%'
	OR room_id LIKE '%".$search."%' 
	OR checkin_date LIKE '%".$search."%' 
	OR employee_id LIKE '%".$search."%' 
	OR reservation_date LIKE '%".$search."%'
	OR reservation_price LIKE '%".$search."%'
	OR Status LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM reservation ORDER BY customer_id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table-striped">
						<tr class="table-info">
							<th>Customer ID</th>
							<th>Checkin Date</th>
							<th>Employee Id</th>
							<th>Reservation Date</th>
							<th>Reservation Price</th>
							<th>Status</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		if ($row["Status"] == '0') {
			$paidStatus = 'Unpaid';
		}
		else {
			$paidStatus = 'Paid';
		}

		$output .= '
			<tr>
				<td>'.$row["customer_id"].'</td>
				<td>'.$row["checkin_date"].'</td>
				<td>'.$row["employee_id"].'</td>
				<td>'.$row["reservation_date"].'</td>
				<td>'.$row["reservation_price"].'</td>
				<td>'.$paidStatus.'</td>
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