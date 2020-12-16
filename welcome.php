<?php
    include("connect/config.php");
    error_reporting(0);
    
    if(isset($_SESSION['username']) || ($_SESSION['email']))
    {
      header('location:index.php');
      exit();
    }
?>

<?php
session_start();
  
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='index.php' </script>";
  
}
?>

<?php
include 'head.php'
?>

<body style="background-color: black;">

  <div class="container">
    <div class="icon-bar">
      <a class="active" href="#" data-toggle="tooltip" data-placement="right" title="Home"><i class="fa fa-home"></i></a> 
      <a href="#" data-toggle="tooltip" data-placement="right" title="Watch | Video"><i class="fa fa-play-circle"></i></a>
      <a href="#" ></a>
      <a href="#" ></a>
      <a href="#"><i class="fa fa-amazon"></i></a>
      <a style="color: #ea57a3;"><i class="fa fa-spinner fa-pulse"></i></a>
    </div>
  </div>

  
    <div class="wrapper1">
      <div class="container" style="padding-top: 10px;color:white;">
        <div class="row">        
          <div class="col">
            <h3><?php echo "Welcome User : ".$_SESSION['user']; ?> </h3>      
          </div>
          <div class="col"  style="max-width: fit-content;">
                <form action="" method="POST">
                    <input type="submit" class="btn1" value="logout" name="logout">
                </form>
          </div>
        </div>
      </div>    
    </div>    

    <!---------- Fetch webseries data ------------>

    <!-------- Fetch data ------------->

<?php
      $fetchImage = mysqli_query($conn, "SELECT * FROM video_table ORDER BY web_id DESC");
      while($row = mysqli_fetch_assoc($fetchImage)){
          
        $image = $row['web_img'];
        $name = $row['web_name'];
        $genre = $row['genre'];
        $episode = $row['episode_num'];
        $video = $row['webvideo'];
      
?>    

          <div class="main" style="background-color:white;">
            <div class="row" style="max-width: fit-content;">
              <div class="col">
                <div class="card" style="width:400px;background-color: white;border-radius: 5px;margin:50px;padding: 10px;">
                    <img class="card-img-top" src="<?php echo $image; ?>" alt="Card image" style="width:380px;height:200px;">
                      <div class="card-body">
                        <h3 class="card-title" style="color:black;">Web-Series : <?php echo $name; ?></h3>
                        <h4 class="card-title" style="color:#ea57a3;">Genre : <?php echo $genre; ?></h4>
                        <h4 class="card-title" style="color:#45b39d;">Episodes : <?php echo $episode; ?></h4>
                        <h4 class="card-title">Rating : <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span></h4>
                        <a href="<?php echo $video ;?>" class="btn1">Watch Video</a>
                      </div>
                </div>
            </div><?php } ?>
          </div>
        </div>
      </div>
      </div>
      </div>
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
