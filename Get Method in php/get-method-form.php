<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PHP/Get Method in php/get-method-form.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <h1 class="ms-4 mt-2">Log In Form </h1>



  
<!----------- Php Code ---------->


<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    $email = $_POST['email'];          // form --> name="email"
    $pass = $_POST['pass'];          // form --> name="pass"
  
    echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your email ' .  $email. ' and password ' . $pass. ' has been submited successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        // echo "</br></br>";
        // echo $_GET['email'];
        //  echo "</br>";
        // echo $_Get['pass'];

}

?>


    <div class="container">
    <form action="" method="post">
    <div class="mb-3 mt-4 ">
    <label for="email" class="form-label">Enter Email address :</label>
    <input type="email" name="email" class="form-control"  id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Enter Password :  </label>
    <input type="password" name="pass" class="form-control" id="pass">
  </div>
  <button type="submit" class="btn btn-primary">Log In</button>
</form>
    </div>



</body>
</html> 