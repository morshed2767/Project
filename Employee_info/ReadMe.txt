****This project will help to insert, update, delete or show data from database******

//database connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee_info";
  $con = new mysqli($servername, $username, $password, $dbname);

  if($con->connect_error){
    die ('Connection failed: ' . $con->connect_error);
  }

**this will connect to the local server, so please make sure local server is running.**

Important:
	Database name: "employee_info"
	table name: 	"employees"

*** Database have to be created manually into the local server 
	according to the avobe database name and table name. ***