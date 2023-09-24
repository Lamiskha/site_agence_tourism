<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<?php 


session_start();

if(isset($_SESSION['user'])){
    if($_SESSION['user']->ROLE === "USER"){
 echo '<div class="position-absolute bottom-80 end-50"> <p class="fs-1">         Welcom  ' . $_SESSION['user']->NAME ."</p></div>";
  echo "<form > <button class='btn btn-success' type='submit' name='logout'>de connecter </button>  </form>";
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
echo "<body style='background-color:#D6EAF8'>";
?>
<br>
<br>

<div class="row">
<div class="col">
<h1 class="display-3 text-center bg-info py-3 mb-2 "><I>RESERVATION:</I></h1>
</div>
</div>
<br>
<br>
<br>

<br>
<br>
<br>
<form align="left">
           
&nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  <a class="btn btn-Info " href="http://localhost/app/rvol.php"><img src="1.jpg" width="200" height="200"><i> reservation  d'hebergement</i></a>
      &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;    <a class="btn btn-Info " href="http://localhost/app/rheb.php"><img src="200.jpg" width="200" height="200"><i>   reservation   de  &nbsp;vol  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp;  </i></a>
      <br>
      <br>
      <br>
      <br>
      <img src="444.jpg" width="1100" height="300">