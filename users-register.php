<?php
session_start();
    include("connect/config.php");
    error_reporting(0);
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
      <a class="active" href="#" data-toggle="tooltip" data-placement="right" title="Home"><i class="fa fa-home"></i></a> 
      <a href="#" data-toggle="tooltip" data-placement="right" title="Watch | Video"><i class="fa fa-play-circle"></i></a>
      <a href="#" ></a>
      <a href="#" ></a>
      <a href="users-register.php" data-toggle="tooltip" data-placement="right" title="User-Details"><i class="fa fa-user"></i></a>
      <a style="color: #ea57a3;"><i class="fa fa-spinner fa-pulse"></i></a>
      </div>
  </div>

  <div id="wrapper">
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

   
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>User Register | Details</h1>      
        
        <?php

            $sql = "SELECT * FROM user_table";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                echo '<table class="table">';
                    echo "<thead>";
                        echo "<tr>";
                            echo "<th>ID</th>";
                            echo "<th>Username</th>";
                            echo "<th>Number</th>";
                            echo "<th>Email</th>";
                        echo "</tr>";
                    echo "</thead>";
                    
                    echo "<tbody>";
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                                echo "<td>"  .$row["ID"] . "</td>";
                                echo "<td>"  .$row["username"] . "</td>";
                                echo "<td>"  .$row["num"] . "</td>";
                                echo "<td>"  .$row["email"] . "</td>";
                            echo "</tr>";
                        }
                    echo "</tbody>";
                echo '</table>';
            } else{
                echo "No Results";
            }
        ?>
                
                <form method="POST">
                  <div class="grid-container">
                    <div class="grid-item" style="background-color:#e9ecef;">
                      <input type="text" class="form-input" placeholder="Enter User Id" name="ID">
                    </div>
                    <div class="grid-item" style="background-color:#e9ecef;">
                      <input type="submit" class="btn1" name="delete" value="Delete">
                    </div>
                  </div>
                </form>

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
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Video</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="form.php">Register</a></li>
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
              <strong>Email:</strong> mehfil_tv.webseries@gmail.com<br>
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


<!----------- Delete user ----------->

<?php

    if(isset($_POST['delete']))
    {
      $Delete = $_POST['ID'];

      $sql = "DELETE FROM user_table WHERE id = '$Delete' ";
      if(mysqli_query($conn,$sql))
      {
        echo "<script> location.href= 'users-register.php' </script>";
      }
      else{
        echo "Enable to Insert data";
      }
    }


?>
