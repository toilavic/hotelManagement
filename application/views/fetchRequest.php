<?php
$connect = mysqli_connect("localhost", "root", "", "loginphp");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM payment 
	WHERE id LIKE '%".$search."%'
	OR stuff_name LIKE '%".$search."%' 
	OR staff_id LIKE '%".$search."%' 
	OR date LIKE '%".$search."%' 
	OR status LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM payment ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr class="table-primary">
							<th>ID</th>
							<th>Stuff</th>
							<th>Staff ID</th>
							<th>Date</th>
							<th>Action</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		
		$output .= '
			<tr id = "btn">
				<td id="btnID">'.$row["id"].'</td>
				<td>'.$row["stuff_name"].'</td>
				<td>'.$row["staff_id"].'</td>
				<td>'.$row["date"].'</td>
				<td>
                        <button type="button" class="btn btn-success">
                                            <span class="fas fa-check"></span>
                        </button>
                        <button type="button" class="btn btn-danger" onClick="deleteAjax()">
                                            <span class="fas fa-trash-alt"></span>
                        </button>
				</td>
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


<script type="text/javascript">
	function deleteAjax() {
		var id = document.getElementById('btnID').innerText ;
		var arr =[];
		arr.push(id);
		console.log(id);
		if(confirm('are you sure?')) {
			$.ajax({
				type: 'POST',
				url: 'deleteBtn',
				data: {delete_id : id},
				success: function(data) {
					$('#delete'+id).hide();
				}
			});
		}
	}
</script>

<script>
	$(document).ready(function(){
  $("button").click(function(){
    $("#btn").remove();
  });
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>