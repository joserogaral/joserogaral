<?php include('../hefo/headerad.php')?> 
 
<?php 
$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$nom=(isset($_POST['nom']))?$_POST['nom']:"";
$prenom=(isset($_POST['prenom']))?$_POST['prenom']:"";
$ddn=(isset($_POST['ddn']))?$_POST['ddn']:"";
$ddd=(isset($_POST['ddd']))?$_POST['ddd']:"";
$email=(isset($_POST['email']))?$_POST['email']:"";
$adresse=(isset($_POST['adresse']))?$_POST['adresse']:"";
$telephone=(isset($_POST['telephone']))?$_POST['telephone']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$usuarios=(isset($_POST['usuarios']))?$_POST['usuarios']:"";
$pass=(isset($_POST['pass']))?$_POST['pass']:"";




 include('../bd/bd.php');

switch($accion){
  case "Ajouter":
        $sentenciaSQLi= $conexione->prepare("INSERT INTO person (nom,prenom,ddn,ddd,email,adresse,telephone,usuario,pass) VALUES (:nom,:prenom,:ddn,:ddd,:email,:adresse,:telephone,:usuario,:pass);");
        $sentenciaSQLi->bindParam(':nom',$nom);
        $sentenciaSQLi->bindParam(':prenom',$prenom);
        $sentenciaSQLi->bindParam(':ddn',$ddn);
        $sentenciaSQLi->bindParam(':ddd',$ddd);
        $sentenciaSQLi->bindParam(':email',$email);
        $sentenciaSQLi->bindParam(':adresse',$adresse);
        $sentenciaSQLi->bindParam(':telephone',$telephone);
        $sentenciaSQLi->bindParam(':usuario',$usuarios);
        $sentenciaSQLi->bindParam(':pass',$pass);
        $sentenciaSQLi->execute();
        header("Location:personnel1.php");
        break;
     case "Modifier":
        $sentenciaSQLi= $conexione->prepare("UPDATE person SET nom=:nom, prenom=:prenom, ddn=:ddn, ddd=:ddd, email=:email, adresse=:adresse, telephone=:telephone, usuario=:usuario, pass=:pass WHERE ID=:ID");
        $sentenciaSQLi->bindParam(':nom',$nom);
        $sentenciaSQLi->bindParam(':ID',$ID);
        $sentenciaSQLi->bindParam(':prenom',$prenom);
        $sentenciaSQLi->bindParam(':ddn',$ddn);
        $sentenciaSQLi->bindParam(':ddd',$ddd);
        $sentenciaSQLi->bindParam(':email',$email);
        $sentenciaSQLi->bindParam(':adresse',$adresse);
        $sentenciaSQLi->bindParam(':telephone',$telephone);
        $sentenciaSQLi->bindParam(':usuario',$usuarios);
        $sentenciaSQLi->bindParam(':pass',$pass);
        $sentenciaSQLi->execute();
        header("Location:personnel1.php");
        break;

    case "Annuler":
        header("Location:personnel1.php");
        break;

    case "Sélectioner":
        $sentenciaSQLi= $conexione->prepare("SELECT * FROM person WHERE ID=:ID");
        $sentenciaSQLi->bindParam(':ID',$ID);
        $sentenciaSQLi->execute();
        $lili=$sentenciaSQLi->fetch(PDO::FETCH_LAZY);

        $nom=$lili['nom'];
        $prenom=$lili['prenom'];
        $ddn=$lili['ddn'];
        $ddd=$lili['ddd'];
        $email=$lili['email'];
        $adresse=$lili['adresse'];
        $telephone=$lili['telephone'];
        $usuarios=$lili['usuario'];
        $pass=$lili['pass'];
        
        break;
     case "Supprimer":
        $sentenciaSQLi= $conexione->prepare("DELETE FROM person WHERE ID=:ID");
        $sentenciaSQLi->bindParam(':ID',$ID);
        $sentenciaSQLi->execute();
        header("Location:personnel1.php");
        break;
}

$sentenciaSQLi= $conexione->prepare("SELECT * FROM person");
$sentenciaSQLi->execute();
$listei=$sentenciaSQLi->fetchALL(PDO::FETCH_ASSOC);
?>    

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            LISTE DE PERSONNEL
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">       
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label">ID</label>
                            <input type="text" required readonly class="form-control" value="<?php echo $ID?>" name="ID" id="ID" placeholder="ID">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">NOM</label>
                            <input type="text" required class="form-control" value="<?php echo $nom?>" name="nom" id="nom" placeholder="NOM">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Prénom</label>
                            <input type="text" required class="form-control" value="<?php echo $prenom?>" name="prenom" id="prenom" placeholder="Prénom">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Date de naissance</label>
                            <input type="date" required class="form-control" name="ddn" value="<?php echo $ddn?>" id="ddn" placeholder="Date de naissance">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Date de début</label>
                            <input type="date" class="form-control" value="<?php echo $ddd?>" name="ddd" id="ddd" placeholder="Date de début">
                        </div>
                        
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" value="<?php echo $email?>" name="email" id="email" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Adresse</label>
                            <input type="text" class="form-control" value="<?php echo $adresse?>" name="adresse" id="adresse" placeholder="Adresse">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Téléphone</label>
                            <input type="text" class="form-control" value="<?php echo $telephone?>" name="telephone" id="telephone" placeholder="Téléphone">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Usuario</label>
                            <input type="text" class="form-control" value="<?php echo $usuarios?>" name="usuarios" id="usuarios" placeholder="User">
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Pass</label>
                            <input type="text" class="form-control" value="<?php echo $pass?>" name="pass" id="pass" placeholder="Pass">
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
                    <th>ID</th>
                    <th>NOM</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Date de début</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Usuario</th>
                    <th>Pass</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($listei as $libro){ ?>
                <tr>
                    <td><?php echo $libro['ID'] ?></td>
                    <td><?php echo $libro['nom'] ?></td>
                    <td><?php echo $libro['prenom'] ?></td>
                    <td><?php echo $libro['ddn'] ?></td>
                    <td><?php echo $libro['ddd'] ?></td>
                    <td><?php echo $libro['email'] ?></td>
                    <td><?php echo $libro['adresse'] ?></td>
                    <td><?php echo $libro['telephone'] ?></td>
                    <td><?php echo $libro['usuarios'] ?></td>
                    <td><?php echo $libro['pass'] ?></td>
                    <td>
                        
                        <form method="post">
                            <input type="hidden" name="ID" id="ID" value="<?php echo $libro['ID']?>"/>
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