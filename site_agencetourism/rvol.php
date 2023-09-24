<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<img src="1000.jpg" width="1100" height="300">
<br>
<br>
<br>

<div  align="center">

 <i><u> <h2 >reservation hebergement:</h2></u></i></div>
<br>
<br>
<br>
<br>
<div class="col-lg-6 offset-lg-3">
<form method="POST">
Nom : <input class="form-control" type="text" name="nome"required/>
<br>
Prénom : <input class="form-control" type="text" name="prenome"required/>
<br>
Numero de télephone: (+213) <input class="form-control" type="text" name="tlf"required/>
<br>
Hotel : <input class="form-control" type="text" name="hotel"required/>
<br>
date d'aller: <input class="form-control" type="date" name="du"required/>
<br>
date d'arriver: <input class="form-control" type="date" name="à"required/>

<br>
Nombre client : <input class="form-control" type="numero" name="pour"required/>
<br>


</select>

<br>
<button class="btn btn-dark" type="submit" name="register">Reserver</button>
</div></form>
 <?php

echo "<body style='background-color:#E8F6F3'>";

$nome  = "root";
$pour = "";


$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$nome,$pour);

    
if(isset($_POST['nome'])){
  $hotel = $_POST['hotel'];
  $pour = $_POST['pour'];
     $nome = $_POST['nome'];
     $prenome = $_POST['prenome'];
     $du = $_POST['du'];
     $à = $_POST['à'];
     $tlf= $_POST['tlf'];
}
        
        $addUserss = $database->prepare("INSERT INTO usersss(HOTEL,POUR,NOME,PRENOME,DU,A,TLF) 
        VALUES(:HOTEL,:POUR,:NOME,:PRENOME,:DU,:A,:TLF)");
    
    $addUserss-> bindParam("HOTEL",$hotel);
    $addUserss->bindParam("POUR",$pour);
    $addUserss->bindParam("NOME",$nome);
    $addUserss->bindParam("PRENOME",$prenome);
    $addUserss->bindParam("DU",$du);
    $addUserss->bindParam("A",$à);
    $addUserss->bindParam("TLF",$tlf);
$addUserss->execute();


  if($addUserss->execute() ){
        
    
  echo '<div class="alert alert-success" role="alert">
  Réservation a réussi
</div>';
  
}



    ?>
