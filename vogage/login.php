<?php require_once 'nav.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<img src="5.jpg" width="1100" height="200">
<br>
<br>
<br>
<br>
<main class="container">
<form method="POST">
Email: <input class="form-control" type="email" name="email" required/>
<br>

Password: <input class="form-control" type="password" name="password" required/>
<br>

<button class="btn btn-warning mt-3" type="submit" name="login"> se connecter </button>
<a class="btn btn-light mt-3 " href="register.php"> inscripsion</a>

</form>
<?php 
echo "<body style='background-color:#D6EAF8'>";

echo "<body style='background-colorr:black'>";



if(isset($_POST['login'])){
    $username = "root";

$password = "";
$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);
$login = $database->prepare("SELECT * FROM users WHERE EMAIL =:email AND PASSWORD = :password");
$login->bindparam("email",$_POST['email']);
$login->bindparam("password",$_POST['password']);
$login->execute();
if($login->rowCount()===1){
$user = $login->fetchObject();
if($addUser = true){
    session_start();
    $_SESSION['user'] = $user;

    if($user->ROLE ==="USER"){
        header("location:user/index.php",true);

    }else if($user->ROLE ==="ADMIN"){
        header("location:admin/index.php",true);
    }else if($user->ROLE ==="SUPER-ADMIN"){
        header("location:super-admin/index.php",true);
    }
}


}else{
    echo '<div class="alert alert-danger" role="alert">
        email et password incorrect
      </div>';  
}

}
?></main>
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
