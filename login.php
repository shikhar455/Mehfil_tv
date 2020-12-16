<!------------ Login php --------------->

<?php

  if(isset($_POST['login'])){

      $uemail = $_POST['email'];
      $pass = $_POST['password'];

      $sql = "SELECT * FROM user_table WHERE email = '".$uemail."' and password = '".$pass."' limit 1";

      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) == 1)
      {        
        $_SESSION['login_user'] = $uemail;
        header('location:welcome.php');
      }
      else{
        echo '<script>alert("User Email Or Passwword invalid")</script>';
      }
    }

?>

<!------------ Admin php --------------->

<?php

  if(isset($_POST['Alogin'])){

      $aemail = $_POST['email'];
      $pass = $_POST['password'];

      $sql = "SELECT * FROM user_table WHERE email = 'admin@gmail.com' and password = 'admin' limit 1";

      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) == 1)
      {        
        $_SESSION['admin_email']=$aemail;
        header('location:admin.php');
      }
      else{
        echo '<script>alert("Admin Email Or Passwword Invalid")</script>';
      }
    }

?>
