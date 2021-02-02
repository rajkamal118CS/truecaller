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
        <button class="btn btn-outline logout-btn" onclick="location.href='search.php'">Back</button>
      </div>

      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
          <div class="col-8 mx-auto">
                <div class="mt-4">
                    <div class="text-center p-3">
                        <h3 class="theme-color">availabe contact in ur area</h3>
                        
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
    
    $areacode = filter_input(INPUT_GET,'code');
    $profession = filter_input(INPUT_GET,'profession');

    
    $sql="SELECT * FROM contact_database WHERE pin='$areacode' AND type='$profession'";
    $ret=mysqli_query($conn,$sql);
    

           
            if(mysqli_num_rows($ret)==0)
            {
                      echo "<h3 class='text-center'>No contact in ur area</h3><div class='col'><form action='dashboard.php'><button type='submit' class='btn bg-light btn-block mt-4'>Done</button></form></div>";


            }

             if(mysqli_num_rows($ret)>0)
            {
            $serialno=1;
                
            while($row=mysqli_fetch_assoc($ret))
            {
                echo"<h3>$serialno</h3>
                <table class='table table-striped'><thead>
                <tr><th scope='col'>Contact Number</th><td scope='row'>{$row['contact_number']}</td></tr>
                <tr><th scope='col'>Contact Name</th><td scope='row'>{$row['contact_name']}</td></tr>
                <tr><th scope='col'>Added by user</th><td>{$row['user']}</td></tr>
                <tr><th scope='col'>Profession</th><td>{$row['type']}</td></tr>
                <tr><th scope='col'>area code</th><td>{$row['pin']}</td></tr>
                
                </thead><tbody></tbody></table>";
                $serialno=$serialno+1;
                
            }

            
            }?>
                
          </div>
        </div>
          
      </div>
      
</body>
</html>