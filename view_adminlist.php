<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view contact</title>
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
          header("Location: index.php ");
        }?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/simplelogo-dark.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
        </a>
        
        <button class="btn btn-outline logout-btn" onclick="location.href='user-logout.php'">Logout</button>
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
          <div class="col-12 mx-auto">

                <div class="mt-2">
                    <div class="text-center p-3">
                        <h3 class="theme-color">Detailed information of contacts</h3>
                    </div>
                </div>

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

                  $sql='SELECT * FROM admin_database ';
                  $ret=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($ret)>0)
                  {
					          
                    echo"<table class='table table-striped'><thead><tr><th scope='col'>User Number</th><th scope='col'>User Name</th><th scope='col'>Email</th><th scope='col'>Password</th><th scope='col'>Area code</th><th scope='col'>Gender</th><th scope='col'>DOB</th></tr></thead><tbody>";
                
					          while($row=mysqli_fetch_assoc($ret))
					          {
						          echo"<tr><th scope='row'>{$row['user_number']}</th><td>{$row['user_name']}</td><td>{$row['user_email']}</td><td>{$row['user_password']}</td><td>{$row['user_pin']}</td><td>{$row['user_gender']}</td><td>{$row['user_dob']}</td></tr>";
					          }
            
			            echo"</tbody></table>";
                     
                  echo"<form action='dashboard_admin.php'><button class='btn bg-light' type='submit'>Go Back</button></form>";
                  echo"</div>";
                  }
                  if(mysqli_num_rows($ret)==0)
                  {
                      echo "<div id='card'><h1>No contacts are thier to view....</h1><form action='dashboard_admin.php'><button type='submit' id='done'>Done</button></form></div>";
		
                  }?>
                
          </div>
        </div>
          
      </div>
</body>
</html>