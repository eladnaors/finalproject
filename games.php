<?php
@session_start();
include 'sqlDB.php';
$currentUserName = $_SESSION['name'];
$currentUserId = $_SESSION['id'];
  $query="SELECT *, games.Id AS gameid FROM tbl_games_203 games INNER JOIN tbl_grounds_203 grounds on games.groundid=grounds.Id";
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
    <link rel="stylesheet" href="includes/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="includes/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">






</head>   
 
<body>
<header>
    <section>
            <header>



        
            <?php
{
  if($currentUserId== 1)
  echo ('<a id = "logoadmin" href = "admin.php"></a>');
  else{ 
    echo ('<a id = "logo" href = "index.php"></a>');
  }
}
 ?>     

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php  
        if($currentUserId== 1)
        
        echo "<a class='navbar-brand' href='#'> $currentUserName </a> "?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <?php
{
  if($currentUserId== 1)
  echo ('<a class="nav-link" href="admin.php">בית<span class="sr-only">(current)</span></a>
  </li>');
  else{ 
    echo ('<a class="nav-link" href="index.php">בית<span class="sr-only">(current)</span></a>
    </li>');
  }
}
 ?>       

                <li class="nav-item">
                  <a class="nav-link" href="games.php">משחקים</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mygames.php">משחקים שלי </a>
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




    <ul>
      
    <?php

    while ($games=mysqli_fetch_object($result)){
      echo "<li class='games'><h4>$games->GroundName</h4><h5> שעות: $games->start-$games->end<h4><a href='gameconfirmation.php?gameid=$games->gameid&userid=$currentUserId'<button type='submit' class='btn-success'>להצטרפות למשחק";
      echo "</h5></button></a></h4></li>";

    
    }
    ?>




    </ul>



</section>

    
</body>
</html>


