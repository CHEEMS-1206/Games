<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <?php
      $user_id = $_GET["id"];
      
      if($user_id){
      $connectionName = mysqli_connect("your server address","username ","password"," database name");

      $querry = "select userdetails.name from userdetails
        where userdetails.id ='$user_id';";
      $results = mysqli_query($connectionName,$querry);
      $res = mysqli_fetch_assoc($results);
      ?>

    <!-- when game is paused -->
    <div id="modal">
      <h1 id="modalHead">Your game has been paused...</h1>
      <p>Your Score : <span id="modalScore">##</span></p>
      <p id="modalP">Click "Play" to continue.</p>
      <p>Click "Retry" to Retry.</p>
      <div class="modalBtn">
        <button id="play">Play</button>
        <button id="retry">Retry</button>
        <button type="submit" name="sub" id="clickButton" style="display:none;">Submit</button>
      </div>
    </div>

    <div class="container">
      <!-- game box -->
      <div class="gamebox" ondragover="allowDrop(event)" id="game">
        <!-- header part of the game contains heading buttons and score and timer -->
        <div class="header">
          <!-- button container -->
          <div class="btnContainer">
            <button id="pause">Pause</button>
            <button id="retry1">Retry</button>
          </div>

          <!-- heading container -->
          <div class="heading">
            <h1>Put the litter in the Bucket!</h1>
          </div>

          <!-- score and timer container -->
          <div class="scorebar">
            <div class="score">
              <label for="score">Score:</label><span id="score">0</span>
            </div>
            <div class="time">
              <label for="time">Time:</label><span id="time">60 sec</span>
            </div>
          </div>
        </div>
        <div id="c"></div>

        <!-- bucket bg on which js logic is implied -->
        <div
          class="bucketBg bucket"
          id="b"
          ondrop="drop(event)"
          ondragover="allowDrop(event)"
        >
          <div class="bucketTop" id="b"></div>
          <div class="bucket bl" id="b"></div>
          <div class="bucket bc" id="b"></div>
          <div class="bucket br" id="b"></div>
        </div>
        <!-- details and log out button -->
        <div class="details">
          <form action="updateScore.php" method="post" id="autoform">
            <span>User: <?php echo $res['name']; ?></span>
            <input type="number" name="savescore" id="savescore" hidden>
            <input type="number" name="saveid" id="saveid" value="<?php echo $user_id?>" hidden>
          </form>
          <button name="logout" id="logout">Log Out</button>
        </div>


        <!-- litter  -->
        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>

        <div
          class="litterContainer"
          ondragstart="dragStart(event)"
          ondrag="dragging(event)"
          draggable="true"
        >
          <div class="litter1"></div>
          <div class="litter2"></div>
          <div class="litter3"></div>
          <div class="litter4"></div>
        </div>
      </div>
    </div>
    <script src="./script.js">
    </script>
    <?php 
      mysqli_close($connectionName);
      }
    ?>
  </body>
</html>
