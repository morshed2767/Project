<?php
//connecting to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee_info";
  $con = new mysqli($servername, $username, $password, $dbname);

  if($con->connect_error){
    die ('Connection failed: ' . $con->connect_error);
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
           <a class="navbar-brand" href="index.php">Employee Info</a>
         </div>
         <ul id="navbb">
           <li><a href="index.php">Home</a></li>
           <li><a href="viewInfo.php" class="active">View_List</a></li>
         </ul>
       </div>
     </nav>

     <section id="content">

       <div class="container">
         <div class="row">
           <div class="col-md-12 col-md-offset-6">
             <h1>Employee Information</h1>
             <?php
               //getting data from database
                  echo "<table border=1 width='100%' style=margin-top:20px>
                      <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>extensionNo</th>
                      </tr>";
                 $sql = "SELECT * FROM employees";
                 $result = $con->query($sql);
                 while($row = $result->fetch_assoc()){
                   $SL = $row['SL'];
                   $name = $row['name'];
                   $email = $row['email'];
                   $mobile = $row['mobile'];
                   $designation = $row['designation'];
                   $department = $row['department'];
                   $extensionNo = $row['extension_no'];
                   echo "<tr><td>". $SL . "</td><td>" . $name . "</td><td>" . $designation . "</td><td>". $department. "</td><td>". $email . "</td><td>". $mobile . "</td><td>". $extensionNo . "</td>";

                   echo " <td><a href='edit.php?sl=$SL'>edit</a></td> <td><a href='delete.php?sl=$SL'>delete</a></td></tr>";

                   //echo $name . " " . $email . " " . $mobile . " " . $designation . " ". $department . " " . $extensionNo . "<br/>";
                 }

                 echo "</table>";


              ?>

           </div>

         </div>

       </div>

     </section>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   </body>
 </html>
