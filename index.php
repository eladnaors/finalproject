<?php
include 'sqlDB.php';
@session_start();
$currentUserName = $_SESSION['name'];
  $query="SELECT * FROM tbl_grounds_203";
  $result = mysqli_query($connection , $query)  ;
  if (!$result){
    die ("DB query failed");

  }


?>
<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8">
    <title>Free Ground</title>
    <link href="https://fonts.googleapis.com/css?family=Alef|Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">







</head>   
 
<body>
<header>
    <section>
            <header>



        
        <a id = "logo" href = "index.php"></a> 

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

           <?php   echo "<a class='navbar-brand' href='#'> $currentUserName </a> "?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">בית<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="games.php">משחקים</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mygames.php">משחקים שלי </a>
                </li>
                
                
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    קטגוריות
                  </a>
                  
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" onclick= "filterSelection('all')"  href="#">הכל</a>
                    <a class="dropdown-item" onclick= "filterSelection('basketball')" href="#">כדורסל</a>
                    <a class="dropdown-item" onclick= "filterSelection('football')"  href="#">כדורגל</a>
                    <a class="dropdown-item" onclick= "filterSelection('tennis')"  href="#">טניס</a>
                    
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="חיפוש" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">חיפוש</button>
              </form>
            </div>
          </nav>

      


          </header>
      
        
    </section>


</header>  
<section>





      
    <?php

    while ($ground=mysqli_fetch_object($result)){
      echo "<li class='filterDiv $ground->SportType' ><a href='grounds.php?id=$ground->Id&name=$ground->GroundName&type=$ground->GroundTypeHeb '><div><h5>";
      print_r($ground->GroundName);
      echo "</a></div></h5></li>";
    }
    ?>









</section>





<script src="includes/main.js"></script>
</body>
</html>







