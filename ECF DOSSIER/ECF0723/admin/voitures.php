<?php include('../hefo/headerad.php')?> 

<?php 
$SKU=(isset($_POST['SKU']))?$_POST['SKU']:"";
$marque=(isset($_POST['marque']))?$_POST['marque']:"";
$prix=(isset($_POST['prix']))?$_POST['prix']:"";
$km=(isset($_POST['km']))?$_POST['km']:"";
$ph=(isset($_FILES['ph']['name']))?$_FILES['ph']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$det=(isset($_POST['det']))?$_POST['det']:"";


 include('../bd/bd.php');

switch($accion){
  case "Ajouter": 
        $sentenciaSQL= $conexion->prepare("INSERT INTO autos (marque, prix, km, iamge, details) VALUES (:marque, :prix, :km, :iamge, :details);");
        $sentenciaSQL->bindParam(':marque',$marque);
        $sentenciaSQL->bindParam(':prix',$prix);
        $sentenciaSQL->bindParam(':km',$km);
        $sentenciaSQL->bindParam(':details',$det);

        $fecha= new DateTime();
        $nomar=($ph!="")?$fecha->getTimestamp()."_".$_FILES["ph"]["name"]:"imagen.jpg";

        $tmimg=$_FILES["ph"]["tmp_name"];

            if($nomar!=""){

                move_uploaded_file($tmimg,"../imagenes/".$nomar);

            }

        $sentenciaSQL->bindParam(':iamge',$nomar);
        $sentenciaSQL->execute();
        header("Location:voitures.php");
        break;

     case "Modifier":
        $sentenciaSQL= $conexion->prepare("UPDATE autos SET marque=:marque, prix=:prix, km=:km, details=:details WHERE ID=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->bindParam(':marque',$marque);
        $sentenciaSQL->bindParam(':prix',$prix);
        $sentenciaSQL->bindParam(':km',$km);
        $sentenciaSQL->bindParam(':details',$det);
        $sentenciaSQL->execute();
            
            if($ph!=""){

                $fecha= new DateTime();
                $nomar=($ph!="")?$fecha->getTimestamp()."_".$_FILES["ph"]["name"]:"imagen.jpg";
                $tmimg=$_FILES["ph"]["tmp_name"];

                move_uploaded_file($tmimg,"../imagenes/".$nomar);

                $sentenciaSQL= $conexion->prepare("SELECT iamge FROM autos WHERE ID=:SKU");
                $sentenciaSQL->bindParam(':SKU',$SKU);
                $sentenciaSQL->execute();
                $lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

                if( isset($lilis["iamge"]) &&($lislis["iamge"]!="imagen.jpg")){
                    if(file_exists("../imagenes/".$lilis["iamge"])){
                        unlink("../imagenes/".$lilis["iamge"]);
                    }
                }

                $sentenciaSQL= $conexion->prepare("UPDATE autos SET marque=:marque, prix=:prix, km=:km, iamge=:iamge, details=:details WHERE ID=:SKU");
                $sentenciaSQL->bindParam(':SKU',$SKU);
                $sentenciaSQL->bindParam(':marque',$marque);
                $sentenciaSQL->bindParam(':prix',$prix);
                $sentenciaSQL->bindParam(':km',$km);
                $sentenciaSQL->bindParam(':iamge',$nomar);
                $sentenciaSQL->bindParam(':details',$det);
                $sentenciaSQL->execute();

            }
        
        

    case "Annuler":
        header("Location:voitures.php");
        break;

    case "Sélectioner":
        $sentenciaSQL= $conexion->prepare("SELECT * FROM autos WHERE ID=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->execute();
        $lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $marque=$lilis['marque'];
        $prix=$lilis['prix'];
        $km=$lilis['km'];
        $ph=$lilis['iamge'];
        $det=$lilis['details'];
        break;

     case "Supprimer":
        $sentenciaSQL= $conexion->prepare("DELETE FROM autos WHERE ID=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->execute();
        $lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        if( isset($lilis["iamge"]) &&($lislis["iamge"]!="imagen.jpg")){
            if(file_exists("../imagenes/".$lilis["iamge"])){
                unlink("../imagenes/".$lilis["iamge"]);
            }
        }

        
        
        break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM autos");
$sentenciaSQL->execute();
$liste=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);

?>    

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            VOITURES
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">       
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">SKU</label>
                            <input type="text" required readonly class="form-control" value="<?php echo $SKU?>" name="SKU" id="SKU" placeholder="SKU">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">MARQUE</label>
                            <input type="text" required class="form-control" value="<?php echo $marque?>" name="marque" id="marque" placeholder="MARQUE">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">PRIX</label>
                            <input type="text" required class="form-control" value="<?php echo $prix?>" name="prix" id="prix" placeholder="PRIX">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">KILOMETRAGE</label>
                            <input type="text" required class="form-control" name="km" value="<?php echo $km?>" id="km" placeholder="KILOMETRAGE">
                        </div>

                        <div class="mb-3">
                            <label for="">DETAILS</label>
                            <textarea type="text" class="form-control" value="<?php echo $det?>" name="det" id="det" placeholder="Details" style="height: 150px"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">PHOTO</label>
                            <?php echo $ph ?>

                            <input type="file" class="form-control" value="<?php echo $ph?>" name="ph" id="ph" placeholder="PHOTO">
                        </div>

                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name="accion" <?php echo ($accion=="Sélectioner")?"disabled":""; ?> value="Ajouter" class="btn btn-success">Ajouter</button>
                            <button type="submit" name="accion" <?php echo ($accion!="Sélectioner")?"disabled":""; ?> value="Modifier" class="btn btn-warning">Modifier</button>
                            <button type="submit" name="accion" <?php echo ($accion!="Sélectioner")?"disabled":""; ?> value="Annuler" class="btn btn-info">Annuler</button>
                        </div>
                    </div>   
            </form>
        </div>
    </div>          
</div>

<div class="col-md-12">
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>MARQUE</th>
                    <th>PRIX</th>
                    <th>KILOMETRAGE</th>
                    <th>DETAILS</th>
                    <th>PHOTO</th>
                    <th>ACCION</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($liste as $libro){ ?>
                <tr>
                    <td><?php echo $libro['ID'] ?></td>
                    <td><?php echo $libro['marque'] ?></td>
                    <td><?php echo $libro['prix'] ?></td>
                    <td><?php echo $libro['details'] ?></td>
                    <td><?php echo $libro['km'] ?></td>
                    <td>
                        <img src="../imagenes/<?php echo $libro['iamge'] ?>" width="50"alt="">
                        
                    </td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="SKU" id="SKU" value="<?php echo $libro['ID']?>"/>
                            <input type="submit" name="accion" value="Sélectioner" class="btn btn-primary"/>
                            <input type="submit" name="accion" value="Supprimer" class="btn btn-danger"/>
                        </form>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    
</div>



<?php include('../hefo/footerad.php')?>