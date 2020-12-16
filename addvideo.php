<?php
    include("connect/config.php");
    error_reporting(0);
    
?>


<?php
session_start();
  
if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo "<script> location.href='index.php' </script>";
}
?>


<?php 
include 'head.php';
?>
<body style="background-color: black;">

  <div class="container">
    <div class="icon-bar">
      <a class="active" href="#" data-toggle="tooltip" data-placement="right" title="Home"><i class="fa fa-home"></i></a> 
      <a href="#" data-toggle="tooltip" data-placement="right" title="Watch | Video"><i class="fa fa-play-circle"></i></a>
      <a href="#" ></a>
      <a href="#" ></a>
      <a href="users-register.php" data-toggle="tooltip" data-placement="right" title="User Register"><i class="fa fa-user"></i></a>
      <a style="color: #ea57a3;"><i class="fa fa-spinner fa-pulse"></i></a>
    </div>
  </div>

    <div class="wrapper1">
        <div class="container" style="padding-top: 10px;color:white;">
        <div class="row">        
            <div class="col">
            <h3><?php echo "Welcome Admin : ".$_SESSION['user']; ?> </h3>      
            </div>
            <div class="col"  style="max-width: fit-content;">
                <form action="" method="POST">
                    <a href="addvideo.php" class="btn1 link">Add Video</a>
                    <input type="submit" class="btn1" value="logout" name="logout">
                </form>
            </div>
        </div>
        </div>    
    </div>    

   

    <div class="main" style="background-image: url('img/banner1.png');background-position: center;background-repeat: no-repeat;background-size: cover;position: relative;height:800px;">
    <div class="container1">
        <div class="card">
            <h2>Add Video | Webseries Details</h2>
            <p><strong><i>Please enter the correct detail</i></strong></p><hr>
            <form action="" method="POST" enctype="multipart/form-data">

            <div class="grid-container">
                <div class="grid-item">
                    <label for="web_name">Web Series Name :</label>
                    <input type="text" class="form-input" placeholder="Name of Web Series" name="web_name">			
                </div>
                <div class="grid-item">
                        <label for="genre">Genre of Web Series :</label>
                            <select name="genre" id="genre" class="form-input">
                            <option selected="" value="Default">(Choose Genre )</option>
                            <option value="Action">Action</option>
                            <option value="Thriller">Thriller</option>
                            <option value="Drama">Drama</option>
                            </select>	
                </div>
            </div>
                
            <h5><strong>No. of Episodes & Approximate Times :</h5>
                <div class="grid-container">
                    <div class="grid-item">
                            <select name="episode_num" id="e1" class="form-input">
                            <option selected="" value="Default">(Choose No. of Episodes)</option>
                            <option value="5">5</option>
                            <option value="8">8</option>
                            <option value="10">10</option>
                            </select>				
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                            <select name="minute" id="m1" class="form-input">
                            <option selected="" value="Default">(Choose Approximate Time)</option>
                            <option value="20">20 mintue</option>
                            <option value="40">40 mintue</option>
                            <option value="1">1 Hour</option>
                            <option value="1.15">1 hour 15 mintue</option>
                            </select>				
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                    <label for="rate">Rating :</label>
                            <select name="rate" id="genre" class="form-input">
                            <option selected="" value="Default">(Like Rating )</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>		
                    </div>
                    <div class="grid-item">
                        		
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                        <label for="img">Select image:</label>
                        <input type="file" class="form-input" id="img" name="web_img" accept="image/*">
                    </div>
                    <div class="grid-item">
                        <label for="img">Select Video:</label>
                        <input type="file" class="form-input" id="video" name="webvideo" accept="video/*">
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                        <button type="submit" class="btn1" name="upload" value="Upload">Upload</button>
                        <button type="reset" class="btn1" value="reset">Reset</button>
                    </div>
                </div>

            </form>		
            
        </div>
    </div>
    </div>

<?php
include 'footer.php'
?>

<!------------ Add Video php --------------->

<?php

  if(isset($_POST['upload'])){
	  
      $name = $_POST['web_name'];
      $genre = $_POST['genre'];
      $episode = $_POST['episode_num'];
      $minute = $_POST['minute'];
      $rating = $_POST['rate'];
      $video = $_FILES['webvideo']['name'];
      $image = $_FILES['web_img']['name'];
      
        $temp1 = $_FILES['webvideo']['tmp_name'];
        $temp2 = $_FILES['web_img']['tmp_name'];

      $destination1 = "upload/video/";
      $add1 = $destination1.$video;
	  $destination2 = "upload/images/";
      $add2 = $destination2.$image;

      move_uploaded_file($temp1, $destination1.$video);
      move_uploaded_file($temp2, $destination2.$image);

          $sql = "INSERT INTO video_table (web_name, genre, episode_num, minute, rate,  webvideo, web_img) VALUES ('$name', '$genre', '$episode', '$minute', '$rating', '$add1', '$add2')";

          if(mysqli_query($conn,$sql)) 
		  {
                echo '<script>alert("Upload succesfully")</script>';
                echo "<script> location.href='admin.php' </script>";
          }
          else{
            echo "Wrong";
          }
      }

?>


