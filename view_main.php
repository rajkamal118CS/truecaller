<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View-Dashboard</title>
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
                <button class="btn btn-block action-btn p-3" onclick="location.href='view-contact.php'">
                    <i class="fas fa-stream pr-3"></i> View your local contact
                </button>
            </div>

          </div>
            <div class="row my-4">
            <div class="col-sm">
                <button class="btn btn-block action-btn p-3" onclick="location.href='view_contact_all.php'">
                    <i class="fas fa-stream pr-3"></i> View All Contact
                </button>
            </div>
            <div class="col-sm">
                <button class="btn btn-block action-btn p-3" onclick="location.href='view_spam.php'">
                    <i class="fas fa-stream pr-3"></i> View Spam contacts
                </button>

            </div>
          </div>
          <!-- <div class="row my-4"> -->
             <form action="search-contact-profession.php" method="get">
                        
                        
                            <label for="cars">Profession:</label>
  <select required name="profession" class="form-control" >
    <option value="None">None</option>
    <option value="Teacher">Teacher</option>
    <option value="Doctor">Doctor</option>
    <option value="Student">Student</option>
    <option value="Accountant">Accountant</option>
    <option value="Technician">Technician</option>
    <option value="Laborer">Laborer</option>
    <option value="Psychologist">Psychologist</option>
    <option value="Pharmacist">Pharmacist</option>
    <option value="Dietitian">Dietitian</option>
    <option value="Mechanic">Mechanic</option>
    <option value="Dentist">Dentist</option>
    <option value="Electrician">Electrician</option>
    <option value="Programmer">Programmer</option>
    <option value="Consultant">Consultant</option>
    <option value="Police">Police</option>
    <option value="Designer">Designer</option>
    


  </select>
                        
                        
                        <button type="submit" class="btn login-btn btn-block my-4">Search Contact by profession</button>
                    </form>
            
          </div>
          </div>
          
        
          
          
          
      </div>
      
</body>
</html>