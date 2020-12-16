<?php
session_start();
    include("connect/config.php");
    error_reporting(0);
    
    
  
  ?>


<!------------ Login php --------------->

<?php

  if(isset($_REQUEST['login'])){
     
      $uemail = $_REQUEST['email'];
      $uname = $_REQUEST['username'];
      $pass = $_REQUEST['password'];

      $sql = "SELECT * FROM user_table WHERE email = '".$uemail."' || username = '".$uname."' || password = '".$pass."'";

      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) == true)
      {        
        $_SESSION['user'] = $uname;
        $_SESSION['email'] = $uemail;
        echo "<script> location.href= 'welcome.php' </script>";
      }
      else
        {
          echo '<script>alert("User Email Or Passwword invalid")</script>';
        }
  }

?>

<!------------ Admin php --------------->

<?php

  if(isset($_POST['Alogin'])){

      $uemail = $_POST['email'];
      $uname = $_POST['username'];
      $pass = $_POST['password'];

      $sql = "SELECT * FROM admin_table WHERE email = '$uemail' || username = '$uname' || password = '$pass'";

      $result = mysqli_query($conn, $sql);
      
      if(mysqli_num_rows($result) == true)
      {        
        $_SESSION['user']=$uname;
        $_SESSION['email'] = $uemail;
        header('location:admin.php');
      }
      else{
          echo '<script>alert("Admin Email Or Passwword Invalid")</script>';
        }
    }
    
?>

<?php
include 'head.php'
?>
<body style="background-color: black;">

  <div class="container">
    <div class="icon-bar">
      <a class="active" href="index.php" data-toggle="tooltip" data-placement="right" title="Home"><i class="fa fa-home"></i></a> 
      <a href="watch.php" data-toggle="tooltip" data-placement="right" title="Watch | Video"><i class="fa fa-play-circle"></i></a>
      <a href="#" ></a>
      <a href="#" ></a>
      <a href="form.php" data-toggle="tooltip" data-placement="right" title="Register"><i class="fa fa-user-plus"></i></a>
      <a style="color: #ea57a3;"><i class="fa fa-spinner fa-pulse"></i></a>
      </div>
  </div>

  <!---------- Form Panel -------------->

  <div id="wrapper" style="background-image: url(img/banner.png);background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;">
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
            <a class="nav-link " data-toggle="tab" href="#menu">Admin Sign | Up</a>
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
                    <input type="text" class="form-input" placeholder="Enter User Name" name="username" required>				
                </div>
                <div class="grid-item">
                  <label for="phone">Phone Number :</label>
                    <input type="text" class="form-input" placeholder="123-456-7890" name="num" required> 
                </div>
              </div>

              <div class="grid-container">
                <div class="grid-item">
                    <label for="email">Email :</label>
                      <input type="email" class="form-input" placeholder="Enter Email" name="email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>
              
              <div class="grid-container">                
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="password" required>
                </div>
                <div class="grid-item">
                  <label for="passid">Confirme Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password again" name="cpassword" required>
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
                  <label for="username">User Email :</label>
                    <input type="text" class="form-input" placeholder="Enter User Email" name="username" required>				
                </div>
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="password" required>
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
          <div id="menu" class="container tab-pane"><br>
            <h2>Admin Sign Up | Customer Details</h2>
            <p><strong><i>Please enter the correct detail</i></strong></p><hr>

            <form action="" method="POSt">

              <div class="grid-container">
                <div class="grid-item">
                  <label for="username">User Name :</label>
                    <input type="text" class="form-input" placeholder="Enter User Name" name="username" required>				
                </div>
              </div>

              <div class="grid-container">
                <div class="grid-item">
                    <label for="email">Admin Email :</label>
                      <input type="email" class="form-input" placeholder="Enter Email" name="email" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
              </div>
              
              <div class="grid-container">                
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="password" required>
                </div>
              </div>
              
              <label class="form-check-label"><input type="checkbox"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
              
              <div class="grid-container">
                <div class="grid-item">
                  <button type="submit" class="btn1" name="asubmit" value="Submit">Submit</button>
                  <button type="reset" class="btn1" value="reset">Reset</button>
                </div>
              </div>
        
            </form>
          </div>

          <div id="menu2" class="container tab-pane fade"><br>
            <h2>Admin Panel | Admin Profile</h2>
            <p><strong><i>Please enter the correct detail</i></strong></p><hr>

            <form action="" method="POST">
              
              <div class="grid-container">
                <div class="grid-item">
                  <label for="username">Admin Email :</label>
                    <input type="text" class="form-input" placeholder="Enter Admin Email" name="username" required>				
                </div>
                <div class="grid-item">
                  <label for="passid">Password :</label>
                    <input type="password" class="form-input" placeholder="Enter Password" name="password" required>
                </div>
              </div>           
              <div class="grid-container">
                <div class="grid-item">
                  <button type="submit" class="btn1" name="Alogin" value="ALogin">Submit</button>
                  <button type="reset" class="btn1" value="reset">Reset</button>
                </div>
              </div>
        
            </form>
          </div>
        </div>           
      </div>
    </div>
  </div>

<?php
include 'footer.php'
?>
<!------------ Resgister php --------------->

<?php

  if(isset($_REQUEST['submit'])){

      $name = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $pass = $_REQUEST['password'];
      $cpass = $_REQUEST['cpassword'];
      $mno = $_REQUEST['num'];

      $sql = "INSERT INTO user_table (username, email, password, cpassword, num) VALUES ('$name', '$email', '$pass', '$cpass', '$mno')";

      if(mysqli_query($conn,$sql))
      {
        echo '<script>alert("New Record Created")</script>';
        echo "<script> location.href= 'index.php' </script>";
      }
      else{
        echo "Enable to Insert data";
      }
    }

?>

<!------------ Resgister php --------------->

<?php

  if(isset($_REQUEST['asubmit'])){

      $name = $_REQUEST['username'];
      $email = $_REQUEST['email'];
      $pass = $_REQUEST['password'];

      $sql = "INSERT INTO admin_table (username, email, password) VALUES ('$name', '$email', '$pass')";

      if(mysqli_query($conn,$sql))
      {
        echo '<script>alert("New Record Created")</script>';
        echo "<script> location.href= 'index.php' </script>";
      }
      else{
        echo "Enable to Insert data";
      }
    }

?>




