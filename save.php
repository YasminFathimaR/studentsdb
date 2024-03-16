<?php
//Retrieve data from form

if (isset($_POST['submit'])){ 
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age']; 
$dob = $_POST['dob'];
}

if (empty($name) || empty($email) || empty($age) || empty($dob)) {
    // At least one variable is empty
    echo "Please fill in all the required fields.";
    return;
}

// Create connection
$conn = new mysqli('localhost', 'root', '', 'register');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
else{
$stmt = $conn->prepare("insert into studentsdb(name, email, age, dob) values(?, ?, ?, ?)");
$stmt->bind_param("ssis", $name, $email, $age, $dob);
$stmt->execute();
echo "Student Details Saved Successfully";
$stmt->close();
$conn->close();
}

?>