<?php
  $SL = $_GET['sl'];
  //echo "the sl no is " . $SL;

  //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee_info";
    $con = new mysqli($servername, $username, $password, $dbname);

    if($con->connect_error){
      die ('Connection failed: ' . $con->connect_error);
    }
//delete data
  $sql = "DELETE FROM employees WHERE SL=$SL";
  if ($con->query($sql) === TRUE) {
    //echo "Record deleted successfully";
    header('Location: viewInfo.php');
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $con->close();

?>
