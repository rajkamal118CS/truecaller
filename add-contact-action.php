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
							
							$sql = "CREATE TABLE IF NOT EXISTS contact_database (
								contact_number VARCHAR(50) PRIMARY KEY,
								contact_name VARCHAR(50), 
								user VARCHAR(50),
								type VARCHAR(50),
								pin INT(11)
							)";

							if ($conn->query($sql) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}


							$sql2 = "CREATE TABLE IF NOT EXISTS profession_database (
							p_id INT AUTO_INCREMENT PRIMARY KEY,
							
								p_name VARCHAR(50)
								
							
							)";
							if ($conn->query($sql2) === TRUE) {
							//echo "Table admin_database created successfully";
							} else {
							echo "Error creating table: " . $conn->error;
							}
							
							$cnumber = filter_input(INPUT_GET,'cnumber');
							$cname = filter_input(INPUT_GET,'cname');
							//$user = filter_input(INPUT_GET,'user');
							$user=$_SESSION["userid"];
							$type = filter_input(INPUT_GET,'profession');
							$pin = filter_input(INPUT_GET,'pin');
							


							$sql = "INSERT INTO contact_database (contact_number, contact_name, user, type,pin) 
							VALUES ('$cnumber', '$cname','$user','$type','$pin')";


							if ($conn->query($sql) === TRUE) {
							//echo "New record created successfully";
							echo "<h3 class='text-center m-4'>New Local Contact Added successfully</h3><form action='dashboard.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							
							
							} else {
								echo "<h3 class='text-center m-4'>Local Contact Already exist</h3><form action='add-contact.php'><button class='btn btn-block login-btn' type='submit'>OK</button></form>";
							}

							$conn->close();
							
							?>
							</div>
                
				</div>
			  </div>
				
			</div>
</body>
</html>