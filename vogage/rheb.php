


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<img src="777.jpg" width="1100" height="200">
<br>
<br>
<br>

<div  align="center">

 <i><u> <h2 >reservation vol:</h2></u></i></div>
<br>
<br>
<br>
<br>
<div class="col-lg-6 offset-lg-3">

<form method="POST">
Nom : <input class="form-control" type="text" name="nom"required/>
<br>
Prénom : <input class="form-control" type="text" name="prenom"required/>
<br>
Numero de télephone: (+213) <input class="form-control" type="text" name="tlf"required/>
<br>
Destination : <input class="form-control" type="text" name="destination"required/>
<br>
date d'aller: <input class="form-control" type="date" name="du"required/>
<br>
date d'arriver: <input class="form-control" type="date" name="à"required/>

<br>
nombre voyageur : <input class="form-control" type="numero" name="voyageur"required/>
<br>


</select>

<br>
<button class="btn btn-dark" type="submit" name="register">Reserver</button>
</div></form>
 </main>
 <?php

echo "<body style='background-color:#E8F6F3'>";

$nome  = "root";
$pour = "";


$database = new PDO("mysql:host=localhost; dbname=codershiyar;",$nome,$pour);

    
if(isset($_POST['nom'])){
  $prenom = $_POST['prenom'];
  $destination = $_POST['destination'];
     $nom = $_POST['nom'];
     $prenom = $_POST['prenom'];
     $du = $_POST['du'];
     $tlf= $_POST['tlf'];
     $à = $_POST['à'];
     $voyageur = $_POST['voyageur'];
}
        
        $addUserss = $database->prepare("INSERT INTO userss(NOM,PRENOM,DESTINATION,DU,A,VOYAGEUR,TLF) 
        VALUES(:NOM,:PRENOM,:DESTINATION,:DU,:A,:VOYAGEUR,:TLF)");
    
    $addUserss-> bindParam("NOM",$nom);
    $addUserss->bindParam("PRENOM",$prenom);
    $addUserss->bindParam("DESTINATION",$destination);
    $addUserss->bindParam("DU",$du);
    $addUserss->bindParam("A",$à);
    $addUserss->bindParam("VOYAGEUR",$voyageur);
    $addUserss->bindParam("TLF",$tlf);
$addUserss->execute();


  if($addUserss->execute() ){
        
    
  echo '<div class="alert alert-success" role="alert">
  Réservation a réussi
</div>';
  
}



    ?>