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
    
    
<!-------- Fetch data ------------->

<?php
      $fetchImage = mysqli_query($conn, "SELECT * FROM video_table ORDER BY web_id DESC");
      while($row = mysqli_fetch_assoc($fetchImage)){
        
        $ID = $row['web_id'];
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
                        <h3 class="card-title" style="color:black;">Web-ID : <?php echo $ID; ?></h3>
                        <h3 class="card-title" style="color:black;">Web-Series : <?php echo $name; ?></h3>
                        <h4 class="card-title" style="color:#ea57a3;">Genre : <?php echo $genre; ?></h4>
                        <h4 class="card-title" style="color:#45b39d;">Episodes : <?php echo $episode; ?></h4>
                        <h4 class="card-title">Rating : <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span></h4>
                        <a href="<?php echo $video ;?>" class="btn1">Watch Video</a>&nbsp;&nbsp;&nbsp;
                        
                        
                        <form method="POST">
                        <div class="grid-container">
                          <div class="grid-item">
                            <input type="text" class="form-input" placeholder="Enter Web Id" name="web_id">
                          </div>
                          <div class="grid-item">
                            <input type="submit" class="btn1" name="delete" value="Delete">
                          </div>
                        </div>
                        </form>
                        
                      </div>
                </div>
            </div><?php } ?>
          </div>
        </div>
        </div>
    

<?php
include 'footer.php'
?>

<!----------- Delete video ----------->

<?php

    if(isset($_POST['delete']))
    {
      $Delete = $_POST['web_id'];

      $sql = "DELETE FROM video_table WHERE web_id = '$Delete' ";
      if(mysqli_query($conn,$sql))
      {
        echo "<script> location.href= 'admin.php' </script>";
      }
      else{
        echo "Enable to Insert data";
      }
    }


?>