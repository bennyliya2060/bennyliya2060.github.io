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
</head>
<!--body open-->
<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="About.html" style="color: white;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="images.html" style="color: white;">images</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Top menu on small screens -->
    <header class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-5 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    </header>
    <br>
    <button type="button" class="btn btn-success">Success</button>
    <!--form section -->
  <div class="container">
  <div class="left">
      <br>
      <h1 Align="center">Add product to your cart</h1>
  </div>
  <div class="right">
  </div>
  </div>
  <table class="table table-borderless" Bgcolor="white" Align="center">
    <form class="form-row align-items-center" Align="center" action="cartaction.php" method="POST">
      <tr Align="left">
      <td Align="center">
      <br>
      <br>
      pname: <input type="text" name="pname"> 
      <br>
      <br>
      <br>
      </td>
      </tr>
      <tr Align="left">
      <td Align="center">
      Type: <input type="text" name="type">
      <br>
      <br>
      <br>
      </td>
      </tr>
      <tr Align="left">
      <td Align="center">
      brand: <input type="text" name="brand">
      <br>
      <br>
      <br>
      </td>
      </tr>
      <tr Align="left">
      <td Align="center">
      quantity: <input type="number" name="quantity">
      <br>
      <br>
      <br>
      </td>
      </tr>
      <tr Align="left">
      <td Align="center">
      price:<input type="number" name="price" required>
      <br>
      <br>
      <br>
      </td>
      </tr>
    <br>
    <br>
    <br>
    <tr Align="left">
    <td Align="center">
    <button type="submit">Add</button>      
    <br>
    <br>
    <br>
    </td>
    </tr>
  </form>
</table>
</div>
</div>
</body>
</html>
