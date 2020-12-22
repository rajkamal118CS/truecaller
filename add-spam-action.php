<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
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
							
							$sql = "CREATE TABLE IF NOT EXISTS spam_database (
								spam_no VARCHAR(50) PRIMARY KEY,
								spam_name VARCHAR(50), 
								user VARCHAR(50),
								type VARCHAR(50),
								count INT
							)";
							

							if ($conn->query($sql) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}
							$sql2 = "CREATE TABLE IF NOT EXISTS spam_relation (
							serial_no INT AUTO_INCREMENT PRIMARY KEY,
								spam_no VARCHAR(50),
								spam_name VARCHAR(50), 
								user VARCHAR(50),
								type VARCHAR(50)
							
							)";
							if ($conn->query($sql2) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}
							
							$spamnumber = filter_input(INPUT_GET,'spamnumber');
							$spamname = filter_input(INPUT_GET,'spamname');
							$type = filter_input(INPUT_GET,'type');
							$user = filter_input(INPUT_GET,'user');
							$count=1;
							


							$sql = "INSERT INTO spam_database (spam_no, spam_name, user, type,count) 
							VALUES ('$spamnumber', '$spamname','$user','$type','$count') ON DUPLICATE KEY UPDATE count=count+1 ";

							


							if ($conn->query($sql) === TRUE) {
							//echo "New record created successfully";
							echo "<h3 class='text-center m-4'>New Spam Added successfully</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							
							
							} else {
							$count=$count+1;
							$sql = "INSERT INTO spam_database (count) 
							VALUES ('$count') where spam_no='$spamnumber' ";
								echo "<h3 class='text-center m-4'>spam number Already Taken!!! and increased</h3><form action='add-contact.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							}

							$sql1 = "INSERT INTO spam_relation (spam_no, spam_name, user, type) 
							VALUES ('$spamnumber', '$spamname','$user','$type') ";
							if ($conn->query($sql1) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}

							$conn->close();
							
							?>
							</div>
                
				</div>
			  </div>
				
			</div>
</body>
</html>