

<?php
$id = $_GET['id'];


$connectionName = mysqli_connect("your server address","username ","password"," database name");


$user_name = $_POST['NAME'];
$user_password = $_POST['PASS'];
$querry = "select id from userdetails
where
userdetails.name = '$user_name' AND userdetails.password = '$user_password';";
$results = mysqli_query($connectionName,$querry);

$res = mysqli_fetch_assoc($results);

if(mysqli_num_rows($results)>0){
    header("location: address of the host page/home/?id=$res[id]");
}
if($id = $res['id']){
    header("location: address of the host page/home/?id=$res[id]");
}
else{
?>
    alert("wrong login credetntials")
<?php
    header("location: address of the host page/home/login/");
}
mysqli_close($connectionName);
?>