<?php
    include("connect/config.php");
    error_reporting(0);

    $sql = "DELETE FROM video_table WHERE web_id =";
   
    if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        
    ?>