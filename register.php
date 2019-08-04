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
<h1>טופס הרשמה</h1>
<form method="POST" action="">
            <input type="text" name="name" class="form-control" required placeholder="שם משתמש באנגלית"> <br>
            <input type="password" name="pass" class="form-control" required placeholder="סיסמא"> <br>
            <input type="email" name="email" class="form-control" placeholder="כתובת מייל"> <br>
            <button class="btn btn-secondary" name="save">שליחה</button>
            <div><?php if(isset($message)) { echo $message; } ?></div> 
            </form>
</div>
</div>
            <?php
include 'sqlDB.php';
@session_start();
  if(isset($_POST["name"]))
  {    
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];

    $query="INSERT INTO tbl_users_203 (name,password,email) VALUES ('$name' , '$pass' , '$email');";

    $retval = mysqli_query($connection,$query);?>
  <script>location.replace ("login.php")</script>


  <?php
  }
  else {
    $message="Invalid Data. Try Again";
  }

?>