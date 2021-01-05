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
                        <h3 class="theme-color">Contact detail</h3>
                        <h6> The image generated is random ony for display purpose.</h6>
                        <img src='https://thispersondoesnotexist.com/image' width="300px" height="300px" />
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
		
		$query = filter_input(INPUT_GET,'query');
		
		$sql="SELECT * FROM contact_database WHERE contact_number='$query' ";
		$ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
            
                
            while($row=mysqli_fetch_assoc($ret))
            {
                echo"<table class='table table-striped'><thead>
                <tr><th scope='col'>Contact Number</th><td scope='row'>{$row['contact_number']}</td></tr>
                <tr><th scope='col'>Contact Name</th><td scope='row'>{$row['contact_name']}</td></tr>
                <tr><th scope='col'>User who added this contact</th><td>{$row['user']}</td></tr>
                <tr><th scope='col'>Profession</th><td>{$row['type']}</td></tr>
                <tr><th scope='col'>Area code</th><td>{$row['pin']}</td></tr>
                
                </thead><tbody></tbody></table>";
                
            }

            
            }
            if(mysqli_num_rows($ret)==0)
            {
              $sql="SELECT * FROM spam_database WHERE spam_no='$query' ";
    $ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
              echo "<h3>Its a spam number</h3>";
            
                
            while($row=mysqli_fetch_assoc($ret))
            {  
                echo"<table class='table table-striped'><thead>
                <tr><th scope='col'>Spam Number</th><td scope='row'>{$row['spam_no']}</td></tr>
                <tr><th scope='col'>Spam Name</th><td scope='row'>{$row['spam_name']}</td></tr>
                <tr><th scope='col'>User who reported this spam</th><td>{$row['user']}</td></tr>
                <tr><th scope='col'>Type of spam</th><td>{$row['Type']}</td></tr>
                <tr><th scope='col'>No. of times reported</th><td>{$row['count']}</td></tr>
                
                </thead><tbody></tbody></table>";
                
            }
            $sql="SELECT  r.spam_name ,r.type ,r.user FROM spam_database s,spam_relation r WHERE  s.spam_no=r.spam_no AND s.spam_no='$query' ";
    $ret=mysqli_query($conn,$sql);
            if(mysqli_num_rows($ret)>0)
            {
             
               echo "<h3>More detail</h3>";
               echo "<h5>Other name and type given by users</h5>"; 
               echo"<table class='table table-striped'><thead><tr><th scope='col'>Spam name</th><th scope='col'>Type of spam</th><th scope='col'>User who reported it</th></tr></thead><tbody>";
            while($row=mysqli_fetch_assoc($ret))
            {  
              
                echo"<table class='table table-striped'><thead>
                <tr><td scope='row'>{$row['spam_name']}</td>
                <td scope='row'>{$row['type']}</td>
                <td scope='row'>{$row['user']}</td></tr>
                
                
                
                </thead><tbody></tbody></table>";
                
            }



            
            }}
            if(mysqli_num_rows($ret)==0)
            {

                      echo "<h3 class='text-center'>No such Contacts are their....</h3><div class='col'><form action='dashboard.php'><button type='submit' class='btn bg-light btn-block mt-4'>Done</button></form></div>";
    
            }

                     
            }?>
                
          </div>
        </div>
          
      </div>
      
</body>
</html>