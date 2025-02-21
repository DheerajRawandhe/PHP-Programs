<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Form</title>
</head>
<body>
  <h1>LogIn Form In PHP</h1>
<!-- <form action="" method="get">   -->            <!-- Get Method -->
<form action="" method="post">                      <!-- Post Method -->
    <label for="user">User Name :</label>
    <input type="text" name="user" id="user" > <br> <br>
    <label for="email">Enter Email :</label>
    <input type="email" name="eamil" id="eamil"> <br><br>
    <label for="pass">Enter Password :</label>
    <input type="password" name="pass" id="pass"><br><br>

    <button type="submit">Log In</button>

</form>
</body>
</html>