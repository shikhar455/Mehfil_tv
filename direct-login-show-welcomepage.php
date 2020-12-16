<?php
    include("connect/config.php");
    error_reporting(0);
?>

<?php
  session_start();
  (!isset($_SESSION['uname'])){
    if(isset($_REQUEST['username']) || isset($_REQUEST['password'])){
  if    $uname = $_REQUEST['username'];
      $pass = $_REQUEST['password'];
      $_SESSION['uname'] = $uname;
      $_SESSION['pass'] = $pass;

      echo "<script> location.href='welcome.php' </script>";
    }
  }
  else{
    echo "<script> location.href='welcome.php' </script>";
  }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!------ head ------>
    <title>MEHFIL-TV | Web Series</title>

    <!-------Icon------>
    <link rel="icon" href="img\icon-h.png" type="image/jpg" sizes="16x16">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>

<body style="background-color: black;">

  <div class="container">
    <div class="icon-bar">
      <a class="active" href="index.php" data-toggle="tooltip" data-placement="right" title="Home"><i class="fa fa-home"></i></a> 
      <a href="#" data-toggle="tooltip" data-placement="right" title="Watch | Video"><i class="fa fa-play-circle"></i></a> 
      <a href="form.php" data-toggle="tooltip" data-placement="right" title="Register"><i class="fa fa-user-plus"></i></a>
      <a href="#" data-toggle="tooltip" data-placement="right" title="Contact"><i class="fa fa-globe"></i></a>
      <a style="color: #ea57a3;"><i class="fa fa-spinner fa-pulse"></i></a>
      </div>
  </div>

  <!---------- Form Panel -------------->

  <div id="wrapper" style="background-image: url(img/bg.jpg);">
    <div class="wrapper1">
      <div class="container" style="padding-top: 10px;">
        <div class="row">        
          <div class="col-md-6">
            <audio src="horse.ogv" type="audio/mpeg" controls style="width: 80%;"></audio>
          </div>
          <div class="col-md-6">
              <!-- Actual search box -->
              <div class="form-group has-search">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="search" class="form-control" name="search">
              </div>
          </div>
        </div>
      </div>
   </div>

    <div class="container1">
      <div class="card">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">Sign | Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">User login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Admin Login</a>
          </li>
        </ul>

         <!-- Tab panes -->
         <div class="tab-content">
          <div id="home" class="container tab-pane active"><br>
            <h2>Sign Up | Customer Details</h2>
            <p><strong><i>Please enter the correct detail</i></strong></p><hr>

            <form action="" method="POSt">

              <div class="grid-container">
                <div class="grid-item">
                  <label for="username">User Name :</label>
                    <input type="text" class="form-input" placeholder="Enter User Name" name="username">				
                </div>
                <div class="grid-item">
                  <label for="phone">Phone Number :</label>
                    <input type="tel" class="form-input" placeholder="123-456-7890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" name="num" > 
                </div>
              </div>

              <div class="grid-container">
                <div class="grid-item">
                    <label for="email">Email :</label>
                      <input type="email" class="form-input" placeholder="Enter Email" name="email">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>
              
              <div class="grid-container">                
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="password">
                </div>
                <div class="grid-item">
                  <label for="passid">Confirme Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password again" name="cpassword">
                </div>
              </div>
              
              <label class="form-check-label"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
              
              <div class="grid-container">
                <div class="grid-item">
                  <button type="submit" class="btn1" name="submit" value="Submit">Submit</button>
                  <button type="reset" class="btn1" value="reset">Reset</button>
                </div>
              </div>
        
            </form>
          </div>
          <div id="menu1" class="container tab-pane fade"><br>
            <h2>Login | Customer Profile</h2>
            <p><strong><i>Please enter the correct detail</i></strong></p><hr>

            <form action="" method="POSt">
              
              <div class="grid-container">
                <div class="grid-item">
                  <label for="username">User Name :</label>
                    <input type="text" class="form-input" placeholder="Enter User Name" name="username">				
                </div>
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="password">
                </div>
              </div>           
              <div class="grid-container">
                <div class="grid-item">
                  <button type="submit" class="btn1" name="login" value="Login">Login</button>
                  <button type="reset" class="btn1" value="reset">Reset</button>
                </div>
              </div>
        
            </form>
          </div>
          <div id="menu2" class="container tab-pane fade"><br>
            <h2>Admin Panel | Admin Profile</h2>
            <p><strong><i>Please enter the correct detail</i></strong></p><hr>

            <form>
              
              <div class="grid-container">
                <div class="grid-item">
                  <label for="username">User Name :</label>
                    <input type="text" class="form-input" placeholder="Enter User Name" name="username">				
                </div>
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="passid">
                </div>
              </div>           
              <div class="grid-container">
                <div class="grid-item">
                  <button type="submit" class="btn1" name="submit" value="Submit">Submit</button>
                  <button type="reset" class="btn1" value="reset">Reset</button>
                </div>
              </div>
        
            </form>
          </div>
        </div>           
      </div>
    </div>
  </div>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><a href="index.php"><img src="img/icon.png" class="img-responsive" alt="logo"></a></h3>
            <br><p><strong>SK | Web Series</strong></p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Albums</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form.php">Login</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              123,  <br>
              abc Nagar<br>
              Indore(M.P.)<br>
              <strong>Phone:</strong> +91 9754346852<br>
              <strong>Email:</strong> sk.webseries@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>FAQ's</h4>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>MEHFIL-TV | WEB SERIES</strong> All Rights Reserved | Design by <strong>SHIKHAR</strong>
      </div>
    </div>
  </footer>
  
  <!------------- #footer ----------->
  
  <script>
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body>
</html> 

<!------------ Resgister php --------------->

<?php

  if(isset($_REQUEST['submit'])){

    // checking for EMPTY fields
    if(($_REQUEST['username'] == "" ) || ($_REQUEST['num'] == "" ) || ($_REQUEST['email'] == "" ) || ($_REQUEST['password'] == "" ) || ($_REQUEST['cpassword'] == "" )){

      echo '<script>alert("Fill EMPTY Field..")</script>';
    
    }
    else {
      $name = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $pass = $_REQUEST['password'];
      $cpass = $_REQUEST['cpassword'];
      $mno = $_REQUEST['num'];

      $sql = "INSERT INTO user_table (username, email, password, cpassword, num) VALUES ('$name', '$email', '$pass', '$cpass', '$num')";

      if(mysqli_query($conn,$sql)){
        echo '<script>alert("New Record Created")</script>';
      }
      else{
        echo "Enable to Insert data";
      }
    }

  }
?>

<!------------ Resgister php --------------->

<?php

  if(isset($_REQUEST['login'])){

    // checking for EMPTY fields
    if(($_REQUEST['username'] == "" ) || ($_REQUEST['password'] == "" ) ){

      echo '<script>alert("Fill EMPTY Field..")</script>';
    
    }
    else {
      $name = $_REQUEST['username'];
      $pass = $_REQUEST['password'];

      $sql = "SELECT * FROM user_table WHERE username = '$name' and password = '$pass'";

      if(mysqli_query($conn,$sql)){
        echo "<script> location.href='welcome.php' </script>";
      }
      else{
        echo "login failed";
      }
    }

  }
?>

