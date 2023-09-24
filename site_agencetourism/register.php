
<?php require_once 'nav.php' ?>
<img src="16-08-07_01-42-42-3.jpg" width="1100" height="200" />
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body >

<div class="container"><html>
<body >

<i><h1 align="middle">  Voyage</h1></i>
<form method="POST">
Name : <input class="form-control" type="text" name="name"required/>
<br>
Age : <input class="form-control" type="date" name="age"required/>
<br>
Email : <input class="form-control" type="email" name="email"required/>
<br>
Password : <input class="form-control" type="text" name="password"required/>
<br>
<a class="btn btn-warnin"  href="login.php" >se connecter</a>
<button class="btn btn-dark" type="submit" name="register">تسجيل-Register</button>
</form>
</div>
</main>
<main class="container">
<?php
echo "<body style='background-color:#F7F9F9'>";
function create_image()
{
    $im=imagecreate(200,200) or die("GD library not activated");
    imagecolorallocate($im,40,20,250);
    imagepng($im,"16-08-07_01-42-42-3.jpg");
}


$username = "root";

$password = "";
$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$username,$password);

if(isset($_POST['register'])){
    
$checkEmail = $database->prepare("SELECT * FROM users WHERE EMAIL = :EMAIL");
$email = $_POST['email'];
$checkEmail->bindParam("EMAIL",$email);
$checkEmail->execute();

if($checkEmail->rowCount()>0){
    echo '<div class="alert alert-danger" role="alert">
    compte deja utilise
  </div>';

}
else{
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $addUser = $database->prepare("INSERT INTO users(NAME,AGE,PASSWORD,EMAIL,ROLE) 
    VALUES(:NAME,:AGE,:PASSWORD,:EMAIL,'USER')");
    $addUser -> bindParam("NAME",$name);
    $addUser->bindParam("AGE",$age);
    $addUser->bindParam("PASSWORD",$password);
    $addUser->bindParam("EMAIL",$email);
    
    if($addUser->execute()){
        echo '<div class="alert alert-success" role="alert">
        compte succes
      </div>';
    }
      else{
        echo '<div class="alert alert-danger" role="alert">
        erreur
      </div>';
      }
}

} 
?>
</body>
</html>

