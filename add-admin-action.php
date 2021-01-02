<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body>
    <?php
        if($_SESSION["userid"] === ""){
          echo $_SESSION['userid'];
          echo "login";
          header("Location: dashboard.php ");
        }
      ?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/simplelogo-dark.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" onclick="location.href='user-logout.php'">Logout</button>
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
          <div class="col-8 mx-auto">  
            <div class="shadow-lg bg-white mt-4 p-4">                
            <?php
		
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname ="librarydb";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                
                $sql = "CREATE TABLE IF NOT EXISTS admin_database (
                    user_number VARCHAR(50) PRIMARY KEY,
                    user_name VARCHAR(50), 
                    user_email VARCHAR(50),
                    user_password VARCHAR(50),
                    user_pin VARCHAR(50),
                    user_gender VARCHAR(50),
                    user_dob DATE
                )";

                if ($conn->query($sql) === TRUE) {
                //echo "Table admin_database created successfully";
                } else {
                echo "Error creating table: " . $conn->error;
                }
                
                $adminnumber = filter_input(INPUT_GET,'adminnumber');
                $adminname = filter_input(INPUT_GET,'adminName');
                $email = filter_input(INPUT_GET,'email');
                $userpass = md5(filter_input(INPUT_GET,'password'));
                $code = filter_input(INPUT_GET,'code');
                $gender = filter_input(INPUT_GET,'gender');
                $dob = filter_input(INPUT_GET,'dob');
                




                $sql2 = "INSERT INTO admin_database (user_number, user_name, user_email, user_password, user_pin, user_gender, user_dob) 
                VALUES ('$adminnumber', '$adminname','$email', '$userpass', '$code', '$gender', '$dob')";


                if ($conn->query($sql2) === TRUE) {
                //echo "New record created successfully";
                echo "<h3 class='text-center m-4'>New admin added is successfully....</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
                } else {
                    echo "<h3 class='text-center m-4'>Admin number is already taken!!!!</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
                }

                $conn->close();
                
                ?>
             </div>   
          </div>
        </div>
          
      </div>
      
</body>
</html>