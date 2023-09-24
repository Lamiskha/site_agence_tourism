<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<?php 
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION['user']->ROLE === "ADMIN"){
 echo 'Welcom  ' . $_SESSION['user']->NAME;
 echo "<form> <button class='btn btn-danger' type='submit' name='logout'>de connecter </button>  </form>";
    }else{
        header("location:http://localhost/app/user/index.php",true);
        die("");

    }
}
else{
    header("location:http://localhost/app/user/index.php",true);
    die("");
}
if(isset($_GET['logout'])){
    session_unset();
    session_destroy();
header("location:http://localhost/app/login.php",true);
}




$date d aller = $_POST['date d aller'];
    $date d arriver = $_POST['date d arriver'];
    $addUser->bindParam("DATE D'ALLER",$date d aller);
    $addUser->bindParam("DATE D'ARRIVER",$date d arriver);