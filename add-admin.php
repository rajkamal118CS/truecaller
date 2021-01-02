<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Admin</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vender/css/all.css">
</head>
<body>
<?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        // Create database
        $sql = "CREATE DATABASE IF NOT EXISTS librarydb";
        if ($conn->query($sql) === TRUE) {
            //echo "Database created successfully";
            
        
        
        $conn->close();
        }
        ?>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <a class="navbar-brand my-0 mr-md-auto" href="dashboard.php">
            <img src="images/simplelogo-dark.svg" alt="logo" width="130" height="30" alt="Logo" loading="lazy">
        </a>
        
        
        
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4">
                    <div class="col form-header text-center p-3">
                        Add New Admin
                    </div>
                    <form action="add-admin-action.php" method="get">
                        <div class="form-group mx-4 mt-4">
                            Full Name:
                            <input type="text" required name="adminName" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Contact Number:
                            <input type="text" required name="adminnumber" class="form-control" placeholder="contact Number">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Email address:
                            <input type="email" required  name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Enter Password:
                            <input type="password" required  name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Retype Password:
                            <input type="password" required  name="password" class="form-control" placeholder="Renter Password">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Area code:
                            <input type="text" required name="code" class="form-control" placeholder="Postal-code">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Gender:
                            <label class="radio-inline"><input type="radio" name="gender" value="Male"checked>Male</label>
<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
<label class="radio-inline"><input type="radio" name="gender" value="other">Other</label>
                        </div>
                        <div class="form-group mx-4 mt-4">
                            Date of birth:
                            <input type="date" required name="dob" class="form-control" placeholder="Date of birth">
                        </div>
                        <button type="submit" class="btn login-btn btn-block my-4">Add Admin</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>
</body>
</html>