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
<div class="mt-2">
                    <div class="text-center p-3">
                        <h3 class="theme-color">
                          
                        Spam number reported by users

                      </h3>
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
                  $sql="SELECT * FROM spam_database ";
                  $ret=mysqli_query($conn,$sql);
                  if(mysqli_num_rows($ret)>0)
                  {
                    
                    echo"<table class='table table-striped'><thead><tr><th scope='col'>Contact Number</th><th scope='col'>Contact Name</th><th scope='col'>User</th><th scope='col'>Type</th><th scope='col'>count</th></tr></thead><tbody>";
                
                    while($row=mysqli_fetch_assoc($ret))
                    {
                      echo"<tr><th scope='row'>{$row['spam_no']}</th><td>{$row['spam_name']}</td><td>{$row['user']}</td><td>{$row['Type']}</td><td>{$row['count']}</td></tr>";
                    }
            
                  echo"</tbody></table>";
                     
                  echo"<form action='dashboard_admin.php'><button class='btn bg-light' type='submit'>Go Back</button></form>";
                  echo"</div>";
                  }
                  if(mysqli_num_rows($ret)==0)
                  {
                      echo "<div id='card'><h1>No Contact are thier to view....</h1><form action='dashboard_admin.php'><button type='submit' id='done'>Done</button></form></div>";
                    }?>
                
          </div>
        </div>
          
      </div>
</body>
</html>