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

//getting information
  $sql = "SELECT * FROM employees WHERE SL = $SL";
  $result = $con->query($sql);
  while($row = $result->fetch_assoc()){
    //$SL = $row['SL'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $designation = $row['designation'];
    $department = $row['department'];
    $extensionNo = $row['extension_no'];
  }

  //checking if data is entered or not
    $error="";
    $success="";
    if(isset($_POST['submitted'])){
      if(!$_POST['name']){
        $error.='<div class="alert alert-danger" role="alert">Please, enter the employee name.</div>';
      }
      if(!$_POST['email']){
        $error.='<div class="alert alert-danger" role="alert">Please, enter the employee email.</div>';
      }
      if(!$_POST['mobile']){
        $error.='<div class="alert alert-danger" role="alert">Please, enter the employee mobile no.</div>';
      }
      if(!$_POST['designation']){
        $error.='<div class="alert alert-danger" role="alert">Please, enter the employee designation.</div>';
      }
      if(!$_POST['department']){
        $error.='<div class="alert alert-danger" role="alert">Please, enter the employee department.</div>';
      }
      if(!$_POST['extensionNo']){
        $error.='<div class="alert alert-danger" role="alert">Please, enter the employee extension no.</div>';
      }
      if($error==""){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $designation = $_POST['designation'];
        $department = $_POST['department'];
        $extensionNo = $_POST['extensionNo'];
//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
      //inserting data to database table
        $sql = "UPDATE employees
                SET name = '$name', email='$email', designation='$designation', department='$department', mobile='$mobile', extension_no='$extensionNo' WHERE SL=$SL";
        if($con->query($sql)===true){
            $success = '<div class="alert alert-success" role="alert">Information Successfully updated!!</div>';
            header('Location: viewInfo.php');
        }
        else{
          	echo "error in data insertion." . $con->error;
      	}
      }

    }

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Employee</title>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top navb">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand active" href="index.php">Employee Info</a>
        </div>
        <ul id="navbb">
          <li><a href="index.php">Home</a></li>
          <li><a href="viewInfo.php">View_List</a></li>
        </ul>
      </div>
    </nav>
    <section id="content">

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-4">
            <h1>Employee Information</h1>
            <p>Edit employee information</p>

            <?php echo $error; ?>
            <?php echo $success; ?>

            <form method="POST" role="form">

              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Employee name" value="<?php if(isset($_POST['name'])){ echo  htmlentities($_POST['name']);}else{echo $name;} ?>">
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Employee Email" value="<?php if(isset($_POST['email'])){ echo  htmlentities($_POST['email']);}else{echo $email;} ?>">
              </div>

              <div class="form-group">
                <input type="number" name="mobile" class="form-control" placeholder="Employee mobile no." value="<?php if(isset($_POST['mobile'])){ echo  htmlentities($_POST['mobile']);}else{echo $mobile;} ?>">
              </div>

              <div class="form-group">
                <input type="text" name="designation" class="form-control" placeholder="Employee designation" value="<?php if(isset($_POST['designation'])){ echo  htmlentities($_POST['designation']);}else{echo $designation;} ?>">
              </div>

              <div class="form-group">
                <input type="text" name="department" class="form-control" placeholder="Employee department" value="<?php if(isset($_POST['department'])){ echo  htmlentities($_POST['department']);}else{echo $department;} ?>">
              </div>

              <div class="form-group">
                <input type="number" name="extensionNo" class="form-control" placeholder="Employee extension no." value="<?php if(isset($_POST['extensionNo'])){ echo  htmlentities($_POST['extensionNo']);} else{echo $extensionNo;} ?>">
              </div>
              <input type="hidden" name="submitted" value="true">
              <div align="center">
                <input type="submit" name="submit" value="Submit" class="btn btn-secondary">
              </div>

            </form>

          </div>

        </div>

      </div>

    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
