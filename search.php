<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search main page</title>
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

      <div class="container">
          <div class="row my-4">
              
                          <div class="col-sm">
                
                <form action="search-action.php" method="get">
                  <div class="input-group md-form form-md form-2 pl-0">
                    <input class="form-control my-0 py-1" name="query" type="text" placeholder="Enter Number to know its true identity" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn">
                      <span class="input-group-text search-btn" id="basic-text1"><i class="fas fa-search search-icon"
                          aria-hidden="true"></i></span>
                      </button>
                    </div>
                    </div>
                  </form>
            </div>
          </div>
            
          </div>
          
        
          
          
          
      </div>
      
</body>
</html>