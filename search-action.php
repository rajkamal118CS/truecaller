<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                <div class="mt-4">
                    <div class="text-center p-3">
                        <h3 class="theme-color">Search Result</h3>
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
		
		$book = filter_input(INPUT_GET,'query');
		
		$sql="SELECT * FROM book_database WHERE book_id='$book' OR book_name='$book'";
		$ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
            echo"<table class='table table-striped'><thead><tr><th scope='col'>Book ID</th><th scope='col'>Book Name</th><th scope='col'>Author</th><th scope='col'>Publisher</th><th scope='col'>Number of Copies</th></tr></thead><tbody>";
                
            while($row=mysqli_fetch_assoc($ret))
            {
                echo"<tr><th scope='row'>{$row['book_id']}</th><td>{$row['book_name']}</td><td>{$row['aut_name']}</td><td>{$row['pub']}</td><td>{$row['qty']}</td></tr>";
            }

            echo"</tbody></table>";
            }
            if(mysqli_num_rows($ret)==0)
            {
                      echo "<h3 class='text-center'>No such Books are thier....</h3><div class='col'><form action='dashboard.php'><button type='submit' class='btn bg-light btn-block mt-4'>Done</button></form></div>";
		
            }?>
                
          </div>
        </div>
          
      </div>
      
</body>
</html>