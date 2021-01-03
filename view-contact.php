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
        <button class="btn btn-outline logout-btn" onclick="location.href='view_main.php'">Back</button>
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
          <div class="col-12 mx-auto">

                <div class="mt-2">
                    <div class="text-center p-3">
                        <h3 class="theme-color">Local Contact</h3>
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
                  $usernumber = $_SESSION["userid"];

                  $sql="SELECT * FROM contact_database where user='$usernumber'";
                  $ret=mysqli_query($conn,$sql);

                  if(mysqli_num_rows($ret)>0)
                  {
					          
                    echo"<table class='table table-striped'><thead><tr><th scope='col'>Contact Number</th><th scope='col'>Contact Name</th><th scope='col'>User</th><th scope='col'>Type</th><th scope='col'>pin</th></tr></thead><tbody>";
                
					          while($row=mysqli_fetch_assoc($ret))
					          {
						          echo"<tr><th scope='row'>{$row['contact_number']}</th><td>{$row['contact_name']}</td><td>{$row['user']}</td><td>{$row['type']}</td><td>{$row['pin']}</td></tr>";
					          }
            
			            echo"</tbody></table>";
                     
                  echo"<form action='view_main.php'><button class='btn bg-light' type='submit'>Go Back</button></form>";
                  echo"</div>";
                  }
                  if(mysqli_num_rows($ret)==0)
                  {
                      echo "<div id='card'><h1>No Contact are thier to view....</h1><form action='dashboard.php'><button type='submit' id='done'>Done</button></form></div>";


		
                  }?>
<div class="mt-2">
                    <div class="text-center p-3">
                        <h3 class="theme-color">
                          
                        Spam number reported by user 

                      </h3>
                    </div>
                </div>
                 <?php
                  $sql="SELECT * FROM spam_database where user='$usernumber'";
                  $ret=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($ret)>0)
                  {
                    
                    echo"<table class='table table-striped'><thead><tr><th scope='col'>Contact Number</th><th scope='col'>Contact Name</th><th scope='col'>User</th><th scope='col'>Type</th><th scope='col'>count</th></tr></thead><tbody>";
                
                    while($row=mysqli_fetch_assoc($ret))
                    {
                      echo"<tr><th scope='row'>{$row['spam_no']}</th><td>{$row['spam_name']}</td><td>{$row['user']}</td><td>{$row['Type']}</td><td>{$row['count']}</td></tr>";
                    }
            
                  echo"</tbody></table>";
                     
                  echo"<form action='view_main.php'><button class='btn bg-light' type='submit'>Go Back</button></form>";
                  echo"</div>";
                  }
                  if(mysqli_num_rows($ret)==0)
                  {
                      echo "<div id='card'><h1>No Contact are thier to view....</h1><form action='dashboard.php'><button type='submit' id='done'>Done</button></form></div>";
                    }?>
                
          </div>
        </div>
          
      </div>
</body>
</html>