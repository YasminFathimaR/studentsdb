<?php

//connect to database
$conn = new mysqli('localhost', 'root', '', 'register');

//check connection
if ($conn->connect_error) { 
      die("Connection failed: " . $conn->connect_error); 
  } 
  
$sql = 'SELECT * FROM studentsdb';

$data = mysqli_query($conn, $sql);
$total = mysqli_num_rows($data);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
<meta http-equiv = "X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<title> Students Database - 2024 </title>
</head>

<body>
<table border="2">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Age</th>
<th>DOB</th>
</tr>
<?php

if($total!=0)
{
	while($result=mysqli_fetch_assoc($data))
	{
		echo "
		<tr>
		<td>".$result['ID']."</td>
		<td>".$result['Name']."</td>
		<td>".$result['Email']."</td>
		<td>".$result['Age']."</td>
		<td>".$result['DOB']."</td>
		</tr>
		";
	}
}
else
{
	echo "No Students Details available in the Database";
}

?>
</table>
</body
</html>

