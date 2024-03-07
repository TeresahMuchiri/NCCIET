<?php
include("database.php");
?>

<?php 
// Access form data
$employeeid = $_POST["employeeid"];
$name = $_POST["name"];
$position = $_POST["position"];
$phoneNo = $_POST["phoneNo"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirm_password"];
  if ($_SERVER["REQUEST METHOD"]=="POST"){  
    if(empty($employeeid)){
        echo"Please enter id";
    }
    elseif(empty($name)){
        echo"Please enter name";
    }
    elseif(empty($position)){
        echo"Please enter work position";
    }
    elseif(empty($phoneNo)){
        echo"Please enter PhoneNo";
    }
    elseif(empty($password)){
            echo"Please enter password";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare= ("INSERT INTO employees (employeeID, Name, Position, PhoneNo, Password)
               VALUES ('?', '?', '?', '?', '?')";)
    

$stmt->bind_param("issss", $employeeid, $name, $position, $phoneNo, $hash);

$stmt->execute();


if (mysqli_stmt_error($stmt)) {
  echo "Error: " . mysqli_stmt_error($stmt);
} else {
  echo "You are now signed up!";
}

mysqli_stmt_close($stmt);
}}
    
mysqli_close($conn);
?>