<?php
$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$nom=(isset($_POST['nom']))?$_POST['nom']:"";
$email=(isset($_POST['email']))?$_POST['email']:"";
$phone=(isset($_POST['phone']))?$_POST['phone']:"";
$objet=(isset($_POST['objet']))?$_POST['objet']:"";
$message=(isset($_POST['message']))?$_POST['message']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$date= date("d/m/y");

include('../bd/bd.php');

switch($accion){
    case "Envoyer": 
          $sentenciaSQLs= $conexioni->prepare("INSERT INTO cont (nomypre, telephone, email, objet, msg, date) VALUES (:nomypre, :telephone, :email, :objet, :msg, :date);");
          $sentenciaSQLs->bindParam(':nomypre',$nom);
          $sentenciaSQLs->bindParam(':telephone',$phone);
          $sentenciaSQLs->bindParam(':email',$email);
          $sentenciaSQLs->bindParam(':objet',$objet);
          $sentenciaSQLs->bindParam(':msg',$message);
          $sentenciaSQLs->bindParam(':date',$date);
          $sentenciaSQLs->execute();
          header("Location:contact.php");
          break;
  }
  
  ?>

<?php 
            include ("../bd/bd.php");

            $sentenciaSQLw=$conexionet->prepare("SELECT * FROM ora");
            $sentenciaSQLw->execute();
            $listep=$sentenciaSQLw->fetchALL(PDO::FETCH_ASSOC);
?>
 


<!doctype html>
<html lang="fr">
 
<head>
  <title>Contact</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css" type="text/css">
</head>

<body>

  <header>
    <div>
        <div class="info">

            <div class="images">
                <div>
                    <a href="https://www.facebook.com/" target="_blank">
                    <img src="../imagenes/imgs/logo-facebook-blanc.png" alt="Facebook">
                    </a>
                </div>

                <div>
                    <a href="https://www.instagram.com/" target="_blank">
                    <img src="../imagenes/imgs/logo-instagram-blanc-1.png.webp" alt="Instagram">
                    </a>
                </div>
            </div>
    

                    <div>
                    <h1>0634875667 / info@garageparrot</h1>
                    </div>
        </div>


                                    
            <div class="menu">

                <div>
                    <img src="../imagenes/imgs/VPARROT.png" alt="garagevparrot">
                </div>

                <div>
                    <nav>
                        <ul class="menu1">
                            <li><a href="../Accueil/accueil.php">ACCUEIL</a></li>
                            <li class="navi"><a href="#">SERVICES</a>
                                <ul class="subl">
                                    <li><a href="../Services/services.php">Mécanique et Carrosserie</a></li>
                                    <li><a href="../Ventevoi/ventevoi.php">Véhicules d'occasion</a></li>
                                </ul>
                            </li>
                            <li><a href="../Apropos/apropos.php">A PROPOS</a></li>
                            <li><a href="../Contact/contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </div> 
    
  </header>

  <main>
    <section class="hero">
            <h3>CONTACT GARAGE V. PARROT</h3>
            <p></p>
        </section> 

        <section class="cont">
            <div class="form">
                <h2>Ėcrivez-nous!</h2>
                <br><br>
                <p>Cette prise de contact est <strong>sans aucun engagement de votre part</strong>
                <br>Notre garage : <strong>Le Capitole Place du Capitole 31000 Toulouse </strong><br><br>
                <br>
                    Vous pouvez écrire à <strong>info@garagevparrot</strong> ou aussi
                    Vous pouvez également remplir le formulaire suivant.</p>
                    <br><br><br>

<div class="col-md-11">
    <div class="card">

        <div class="card-header">
        <h3>Formulaire de contact</h3>
        </div>
        
        <div class="card-body" >
            <form method="POST" enctype="multipart/form-data">       
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <input type="hidden" required readonly class="form-control" value="<?php echo $ID?>" name="ID" id="ID" placeholder="ID" >
                        </div>
        
                        <div class="mb-3">
                            <label for="" class="h3">Nom & Prénom</label>
                            <input type="text" required class="form-control" value="<?php echo $nom?>" name="nom" id="nom" placeholder="Nom & Prénom">
                        </div>

                        <div class="mb-3">
                            <label for="" class="h3">Email</label>
                            <input type="text" required class="form-control" value="<?php echo $prenom?>" name="email" id="email" placeholder="Email">
                        </div>
               
                        <div class="mb-3">
                            <label for="" class="h3">Thelephone</label>
                            <input type="text" required class="form-control" value="<?php echo $ddn?>" name="phone" id="phone" placeholder="Thelephone">
                        </div>

                        <div class="mb-3">
                            <label for="" class="h3">Objet</label>
                            <input type="text" required class="form-control" value="<?php echo $ddd?>" name="objet" id="objet" placeholder="Objet">
                        </div>

                        <div class="mb-3">
                            <label for="" class="h3">Message</label>
                            <textarea type="text" required class="form-control" value="<?php echo $ddd?>" name="message" id="message" placeholder="Message" style="height: 150px"></textarea>
                        </div>

                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name="accion" <?php echo ($accion=="Sélectioner")?"disabled":""; ?> value="Envoyer" class="btn btn-success">Envoyer</button>

                        </div>
                    </div>   
            </form>
        </div>
    </div>          
</div>
                
            </div>
        </section>
  </main>
  
  <footer>
  <div class="foot">
        <div class="fan">
            <img src="../imagenes/imgs/VPARROT.png" alt="logo">
                <h3> Nos lignes téléphoniques de service client sont à 
                votre service du lundi au vendredi de 9h00 à 18h00.</h3>
        </div>

        <div class="chi">
            <div class="hy">
                <div>
                    <nav>
                        <ul class="men">
                            <li><a href="../Accueil/accueil.php">ACCUEIL</a></li>
                            <li><a href="../Services/services.php">SERVICES</a></li>
                            <li><a href="../Apropos/apropos.php">A PROPOS</a></li>
                            <li><a href="../Contact/contact.php">CONTACT</a></li>
                            <li><a href="../admin/login.php">CONNEXION</a></li>
                        </ul>
                    </nav>
                </div>
                <div >
                    <?php foreach($listep as $pm){ ?>
                    <ul class="time">
                        <h2>Nos heures d'ouverture</h2>
                        <li> <h2>LUNDI A VENDREDI</h2> </li>
                        <li> <h2>Du <?php echo $pm['hi'] ?> a <?php echo $pm['hf'] ?> et du <?php echo $pm['hic'] ?> a <?php echo $pm['hfc'] ?>.</h2> </li>
                        <li> <h2>SAMEDI</h2> </li>
                        <li> <h2>Du <?php echo $pm['his'] ?> a <?php echo $pm['hfs'] ?>.</h2> </li>
                    </ul>
                    <?php } ?>
                </div>
            </div>
            <div class="fi">
                <div class="red">
                    <div>
                        <a href="https://www.facebook.com/" target="_blank">
                        <img src="../imagenes/imgs/logo-facebook-noir.png" alt="Facebook">
                        </a>
                    </div>

                    <div>
                        <a href="https://www.instagram.com/" target="_blank">
                        <img src="../imagenes/imgs/Logo-Instagram-noir-1.png" alt="Instagram">
                        </a>
                    </div>
                </div>

                <div class="fo">
                    <h1> Tél: 0634875667 <br> <br>Email: info@garageparrot</h1>
                </div>
            </div>
        </div>
    </div> 
  </footer>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html> 