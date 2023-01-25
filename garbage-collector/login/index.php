<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./loginstyle.css" />
  </head>
  <body>
    <?php
      $id = $_GET['id'] 
    ?>
    <form action="./checkUser.php?id=$id" method="post" class="container">
      <h2>Login</h2>
      <label for="NAME" id="name">NAME: </label>
      <input
        type="text"
        name="NAME"
        required
        maxlength="30"
        placeholder="User-name here"
        id="Name"
      />
      <label for="PASSWORD" id="mail">PASSWORD: </label>
      <input
        type="password"
        name="PASS"
        required
        placeholder="Password"
        id="PASSWORD"
        autocomplete="false"
        maxlength="8"
      />
      <button type="submit" class="btn">LOGIN</button>
      <br>
      <p>Not a user? <a href="address of the host page/home/register/">Register..</a></p>
    </form>
    <script>
      window.addEventListener("load", function(){
        document.getElementById("Name").innerHTML = ""
        document.getElementById("PASSWORD").innerHTML = ""
      });
    </script>
  </body>
</html>
