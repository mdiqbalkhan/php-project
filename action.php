<?php 
session_start();


// Database Connection
$mysqli= new mysqli('localhost', 'root', '', 'marksheet') or die(mysqli_error($mysqli));




// Create Logic
if (isset( $_POST['add'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $registration = $_POST['registration'];
    $bangla = $_POST['bangla'];
    $math = $_POST['math'];
    $english = $_POST['english'];
    $bgs = $_POST['bgs'];
    $science = $_POST['science'];
    $religion = $_POST['religion'];
    $total = $bangla + $math + $english + $bgs + $science + $religion;
    $percentage = $total / 6 ;

    
  
  
    $mysqli->query("INSERT INTO marksheet ( `name`, `roll` ,`registration`,`bangla`,`math`,`english`,`bgs`,`science`,`religion`,`total`,`percentage` ) VALUES ('$name','$roll','$registration','$bangla','$math','$english','$bgs','$science','$religion','$total','$percentage')") or die( mysqli->error);
  
  
  
    $_SESSION['message']="user has been added";
    $_SESSION['message_type']='success';
    header("location:index.php");
  
  }

  if (isset($_POST['edit'])) {
    $ID = $_POST['ID'];
    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $registration=$_POST['registration'];
    $bangla=$_POST['bangla'];
    $math=$_POST['math'];
    $english=$_POST['english'];
    $bgs=$_POST['bgs'];
    $science=$_POST['science'];
    $religion=$_POST['religion'];
    $total = $bangla + $math + $english + $bgs + $science + $religion;
    $percentage = $total / 6 ;
    $mysqli->query("UPDATE `marksheet` SET `name` = '$name', `roll` = '$roll', `registration` = '$registration', `bangla` = '$bangla', `math` = '$math', `english` = '$english', `bgs` = '$bgs', `science` = '$science', `religion` = '$religion', `total` = '$total', `percentage` = '$percentage' WHERE `ID` = $ID;") or die($mysqli->error());
    
    $_SESSION['message']="Record has been updated";
    $_SESSION['message_type']='warning';
    header('location:index.php');                 
  }


// Delete Logic
if (isset($_GET['delete'])) {
    $ID = $_GET['delete'];

    $mysqli->query("DELETE FROM marksheet WHERE ID=$ID") or die(mysqli->error);

    $_SESSION['message']="user has been deleted";
    $_SESSION['message_type']='danger';
    header("location:index.php");
}


 ?>