<?php
      include_once('sqlDB.php') ;
     
      if( isset($_GET['del']) )
      {
        $id = $_GET['del'];
        $sqli= "DELETE FROM tbl_grounds_203 WHERE Id='$id'";
        $result= mysqli_query($connection,$sqli) or die("Failed".mysqli_error(!$result));
        echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
      }
    ?>