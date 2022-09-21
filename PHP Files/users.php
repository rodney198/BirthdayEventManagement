<?php

$connect = mysqli_connect("localhost", "root", "", "tvm");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM users
	WHERE name LIKE '%".$search."%'
	OR location LIKE '%".$search."%'
	OR package LIKE '%".$search."%'
    OR rate LIKE '%".$search."%'
    OR gender LIKE '%".$search."%';";
}
else
{
	$query = "SELECT * FROM users ORDER BY id";
}
$result = mysqli_query($connect, $query);
$numrows = mysqli_num_rows($result);
if($numrows != 0)
{
	$output .= '
	<div class="table-responsive">
	<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Location</th>
			<th scope="col">Package</th>
			<th scope="col">Rate</th>
            <th scope="col">Gender</th>
            
		</tr>
	</thead>
	<tbody>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<tr>
			<th scope="row">'.$row["id"].'</th>
            <td>'.$row["name"].'</td>
			<td>'.$row["location"].'</td>
			<td>'.$row["package"].'</td>
			<td>'.$row["rate"].'</td>
            <td>'.$row["gender"].'</td>
		</tr>';
	}
	$output .= '</tbody></table>';
	echo $output;
}
else
{
	echo 'No such users found';
}

?>
