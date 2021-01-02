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
    <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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
        <h3>search An unknown number:</h3>
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


      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4">
                    <div class="col form-header text-center p-3">
                        Search Emergency Contact In ur Area
                    </div>
                    <form action="search-emergency.php" method="get">
                        
                        <div class="form-group mx-4 mt-4">
                            Area code:
                            <input type="text" name="code" class="form-control" placeholder="Postal-code">
                        </div>
                        <div class="form-group mx-4 mt-4">
                            <label for="cars">profession:</label>
  <select name="profession" class="form-control" >
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
    


  </select>
                        </div>
                        
                       
                        <button type="submit" class="btn login-btn btn-block my-4">Search contact in ur Area</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>





      <div class="container h-100">
        <div class="row align-items-center h-100" >
            
            
          <div class="col-8 mx-auto">

                <div class="shadow-lg bg-white mt-4">
                    <div class="col form-header text-center p-3">
                        Search Emergency Contact In ur City
                    </div>
                    <form action="search-emergency-statecity.php" method="get">
                        
                        
                        <div class="form-group mx-4 mt-4">
                            <label for="cars">profession:</label>
  <select name="profession" class="form-control" >
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
    


  </select>
                        </div>

 <div class="form-group mx-4 mt-4">                       
<div class="form-group" >
    <label class="control-label col-sm-2">Country</label>
    <div class="col-sm-4">
      <select class="form-control countries" name="country">
       <option value="">--Select--</option>
     </select>
   </div>
 </div>
 <div class="form-group">
  <label class="control-label col-sm-2">State</label>
  <div class="col-sm-4">
   <select class="form-control states" name="state">
     <option value="">--Select--</option>
   </select>
 </div>
</div>
<div class="form-group">
  <label class="control-label col-sm-2">City</label>
  <div class="col-sm-4">
   <select class="form-control cities" name="city">
     <option value="">--Select--</option>
   </select>
 </div>
 </div>
</div>

                        
                       
                        <button type="submit" class="btn login-btn btn-block my-4">Search contact in ur Area</button>
                    </form>
                </div>
                
          </div>
        </div>
          
      </div>



      <br>
 <form role="form" class="form-horizontal" >
  

</form>














<div class="div">
  
</div>

<script type="text/javascript">
  
  $(document).ready(function(){


    /*Get the country list */

      $.ajax({
        type: "GET",
        url: "get_countries.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $('.countries').find("option:eq(0)").html("Please wait..");
        },                         
        success: function (data) {
          /*get response as json */
           $('.countries').find("option:eq(0)").html("Select Country");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.countries').append(option);
         });  

          /*ends */
          
        }
      });



    /*Get the state list */


    $('.countries').change(function(){
      $.ajax({
        type: "POST",
        url: "get_states.php",
        data:{id:$(this).val()}, 
        beforeSend :function(){
      $(".states option:gt(0)").remove(); 
      $(".cities option:gt(0)").remove(); 
      $('.states').find("option:eq(0)").html("Please wait..");

        },                         
        success: function (data) {
          /*get response as json */
           $('.states').find("option:eq(0)").html("Select State");
          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);           
           $('.states').append(option);
         });  

          /*ends */
          
        }
      });
    });




    /*Get the state list */


    $('.states').change(function(){
      $.ajax({
        type: "POST",
        url: "get_cities.php",
        data:{id:$(this).val()}, 
          beforeSend :function(){
   
      $(".cities option:gt(0)").remove(); 
      $('.cities').find("option:eq(0)").html("Please wait..");

        },  

        success: function (data) {
          /*get response as json */
            $('.cities').find("option:eq(0)").html("Select City");

          var obj=jQuery.parseJSON(data);
          $(obj).each(function()
          {
           var option = $('<option />');
           option.attr('value', this.value).text(this.label);
           $('.cities').append(option);
         });  
          
          /*ends */
          
        }
      });
    });




  });





</script>
      

      




</body>
</html>