<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./registerstyle.css" />
  </head>
  <body>

    <form action="addUser.php" method="post" class="container">
      <h2>Register</h2>
      <label for="NAME">NAME: </label>
      <input
        type="text"
        name="NAME"
        required
        maxlength="30"
        placeholder="User-name here"
        id="Name"
      />
      <label for="PASSWORD">PASSWORD: </label>
      <input
        type="password"
        name="PASS"
        required
        placeholder="Password"
        id="PASSWORD"
        maxlength="8"
      />
      <button type="submit" class="btn">REGISTER</button>
      <br>
      <p>Already a user? <a href="address to the page where hosted/login/"> Login..</a></p>
    </form>
    <script>
      
    </script>
  </body>
</html>
