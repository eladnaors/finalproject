<?php
@session_start();
if(!empty($_POST["reg_un"])){
  $query="SELECT*FROM tbl_users_203 WHERE email='"
  . $_POST["reg_un"]
  ."' and password='" 
  .$_POST["reg_pass"]
  ."'";
  
define("DBHOST" , "182.50.133.168");
define("DBUSER" , "studDB19a");
define("DBPASS" , "stud19DB1!");
define("DBNAME" , "studDB19a");


$connection = mysqli_connect(DBHOST, DBUSER , DBPASS , DBNAME);
$result = mysqli_query($connection , $query) or die(mysqli_error($connection));
$users = mysqli_fetch_array($result);

if(is_array($users))
{
$_SESSION=$users;
if($users['admin']== 0)
echo("<script>location.href = 'index.php';</script>");
else{ 
echo("<script>location.href = 'admin.php';</script>");
}
}

else{
$message="Invalid mail or password";
}
}?>




<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <title>Free Ground</title>
    <link rel="stylesheet" href="includes/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  </head>
      <body>
        <a id = "logo" href = "../dev_203/index.html"></a> 
<div>
<div class="bodybackground">
          <form method="post">
                <h1>התחברות</h1>
                  <form>
                        <input type="text" placeholder="email" class="form-control" name="reg_un" /> <br>
                        <input type="password" placeholder="password" class="form-control" name="reg_pass"/> <br>
                        <button class="btn btn-secondary">התחבר</button>
                        <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div> 
                         <p class="message">לא רשום ? <a href="register.php">צור משתמש</a></p>
                      </form>

        </form> 
</div>
</div> 
      </body>
</html>