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
	<?php
        if($_SESSION["userid"] === ""){
          echo $_SESSION['userid'];
          echo "login";
          header("Location: index.php ");
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
							
							$sql = "CREATE TABLE IF NOT EXISTS feedback (
								id int PRIMARY KEY AUTO_INCREMENT,
								name VARCHAR(50), 
								email VARCHAR(50),
								contact_no VARCHAR(50),
								subject VARCHAR(50),
								message VARCHAR(100)

							)";

							if ($conn->query($sql) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}
							
							$name = filter_input(INPUT_GET,'name');
							$email = filter_input(INPUT_GET,'email');
							$subject = filter_input(INPUT_GET,'subject');
							$message = filter_input(INPUT_GET,'message');
							$contact_no= $_SESSION['userid'];
						


							$sql = "INSERT INTO feedback (name, email, contact_no, subject, message) 
							VALUES ('$name', '$email','$contact_no','$subject','$message')";


							if ($conn->query($sql) === TRUE) {
							//echo "New record created successfully";
							echo "<h3 class='text-center m-4'>Your feedback is submitted. Thank you</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							
							
							} else {
								echo "<h3 class='text-center m-4'>error</h3><form action='address.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							}

							$conn->close();
							
							?>
							</div>
                
				</div>
			  </div>
				
			</div>
</body>
</html>