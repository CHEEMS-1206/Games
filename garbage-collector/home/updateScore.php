
<?php
    $connectionName = mysqli_connect("your server address","username ","password"," database name");

    $user_id = $_POST["saveid"];
    $score = $_POST['savescore'];
    $querry = "update userdetails
    set userdetails.score = '$score'
    where
    id = '$user_id';";
    $results = mysqli_query($connectionName,$querry);
    header("location: addressofthe host page/Home/?id=$user_id");
    mysqli_close($connectionName);
?>