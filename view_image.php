<!DOCTYPE html>
<!--html open-->
<html lang="en">
<!--head tag open-->
<head>
  <!--page title-->
  <title>photo_gallery</title>
  <!--bootstrap code-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <!--bootsrap close-->
  <!--css style-->
  <style>
  body{
      background-image: url("bg2.jpg");
      background-size: cover;
      width:100%;
  }
   p{
       font-size:40px;
       color:white;
       font-style:oblique;
   }
  </style>
<!--head close-->
</head>
<!--body open-->
<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="img-fluid" src=logo2.jpg></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: white;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="About.html" style="color: white;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="images.php" style="color: white;">images</a>
              </li>  
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color: white;">settings</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">update image</a></li>
                  <li><a class="dropdown-item" href="#">delete image</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Top menu on small screens -->
    <header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-5 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>
    <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  <!--heading-->
  <h1>Cart details</h1>
  <br>
  <br>
  <br>
  <div class="table-responsive"> 
  <table>
  <tr>
    <th>id</th>
    <th>pname</th>
    <th>ptype</th>
    <th>brand</th> 
    <th>quantity</th> 
    <th>price</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
  //database connection
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="photo_gallery";
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  $sql="SELECT * FROM `images`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($result)){
  ?>
  <tr>
  <td><?php echo $row[0]; ?></td>
  <td><?php echo $row[1]; ?></td>
  <td><?php echo $row[2]; ?></td>
  <td><?php echo $row[3]; ?></td>
  <td><a href="cart_update.php?updateid=<?php echo $row[0]; ?>"><img src="update.jpg"></a></td>
  <td><a href="cart_delete.php?deleteid=<?php echo $row[0]; ?>"><img src="delete.jpg"></a></td>
</tr>
<?php
  }
?>
</table>  
</body>
</html>