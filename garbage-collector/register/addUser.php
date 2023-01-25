
<?php
$connectionName = mysqli_connect("your server address","username ","password"," database name");


$user_name = $_POST['NAME'];
$user_password = $_POST['PASS'];
$querry = "insert into userdetails
(name,password)
VALUES
('$user_name','$user_password');";
$results = mysqli_query($connectionName,$querry);
$querry = "select id from userdetails
where userdetails.name ='$user_name';";
$results = mysqli_query($connectionName,$querry);
$res = mysqli_fetch_assoc($results);
header("location: address to the page where hosted/login/?id=$res[id]");
mysqli_close($connectionName);
?>