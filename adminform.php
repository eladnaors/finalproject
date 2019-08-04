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



        
        <a id = "logoadmin" href = "admin.php"></a> 

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> מנהל</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="admin.php">בית<span class="sr-only">(current)</span></a>
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
<div class="bodybackground">




  <h2>הוספת מגרש</h2>
  <form action="admingroundconfirmation.php" method="GET" >
        
  <div class="form-group">
              <label class="formDetail"><p>שם המגרש</p></label>
              <input class="form-control" type="text-area" name="name" placeholder="שם המגרש">
        </div>                                


    <div class="form-group">
      <label class="formDetail"><p>סוג מגרש</p></label>
      <select name="type" class="form-control">
            <option >כדורגל</option>
            <option >כדורסל</option>
            <option >טניס</option>

        </select>
      </div>



                                
     <button class="btn btn-secondary">הוספה</button>
  </form>
</div>







</body>
</html>


