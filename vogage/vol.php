<?php   

echo "<body style='background-color:#F8F9F9'>";


 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "codershiyar");  
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>voyage</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body background="yellow">  
      <img src="44.jpg" width="1100" height="200">
           <br />  
           <div class="container" style="width:700px;">  
                <h1 align="center"><i>VOL:</i></h1><br />  
                <br>
<br>

                <?php  
                $query = "SELECT * FROM tb2_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="vol.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">    $<?php echo $row["price"]; ?><br>pour personne</h4>  
                               <a class="btn btn-Info btn-ms" href="http://localhost/app/login.php">reserver</a>
                          </div>  
                          <br>
                               <br>
                               <br>
                               <br>
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                 
                <div class="table-responsive">  
                     
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br /> 
           <br>
           
           <form align="center">
           
<br>
<br>
<br>
<br>
      </body>  
 </html>