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

      <div class="container">
          <div class="row my-4">
              <div class="col-sm">
                <button class="btn btn-block action-btn p-3" onclick="location.href='add-contact.php'">
                    <i class="far fa-plus-square pr-3"></i> Add Local contact
                </bu-tton>
              </div>
              <div class="col-sm">
                <button class="btn btn-block action-btn p-3" onclick="location.href='search-books.php'">
                    <i class="fas fa-search pr-3"></i> Search
                </button>
            </div>
           
          </div>
          <div class="row my-4">
          <div class="col-sm">
              <button class="btn btn-block action-btn p-3" onclick="location.href='add-admin.php'">
                <i class="fas fa-user-shield pr-3"></i> Admin
              </button>
          </div>
           <div class="col-sm">
                <button class="btn btn-block action-btn p-3" onclick="location.href='add-spam.php'">
                    <i class="fas fa-search pr-3"></i> Add spam
                </button>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-sm">
              <button class="btn btn-block action-btn p-3" onclick="location.href='address.php'">
                <i class="fas fa-book pr-3"></i> Add address detail
              </button>
            </div>
            <div class="col-sm">
              <button class="btn btn-block action-btn p-3" onclick="location.href='view_address.php'">
                <i class="fas fa-book pr-3"></i> View Addresss
              </button>
            </div>
          </div>
          <div class="row my-4">
            <div class="col-sm">
              <button class="btn btn-block action-btn p-3" onclick="location.href='view_main.php'">
                <i class="fas fa-book pr-3"></i> View Contacts.
              </button>
            </div>
          </div>
      </div>
      
</body>
</html>