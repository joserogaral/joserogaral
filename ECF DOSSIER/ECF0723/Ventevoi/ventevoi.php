<?php 
            include ("../bd/bd.php");

            $sentenciaSQLw=$conexionet->prepare("SELECT * FROM ora");
            $sentenciaSQLw->execute();
            $listep=$sentenciaSQLw->fetchALL(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="fr">
 
<head>
  <title>Ventevoitures</title> 
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="ventevoi.css">
</head>

<body>

  <header>
    <div>
        <div class="info">

            <div class="images">
                <div>
                    <a href="https://www.facebook.com/" target="_blank">
                    <img src="../../ECF0723/imagenes/imgs/logo-facebook-blanc.png" alt="Facebook">
                    </a>
                </div>

                <div>
                    <a href="https://www.instagram.com/" target="_blank">
                    <img src="../../ECF0723/imagenes/imgs/logo-instagram-blanc-1.png.webp" alt="Instagram">
                    </a>
                </div>
            </div>
    

                    <div>
                    <h1>0634875667 / info@garageparrot</h1>
                    </div>
        </div>


                                    
            <div class="menu">

                <div>
                    <img src="../../ECF0723/imagenes/imgs/VPARROT.png" alt="garagevparrot">
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
<br><br><br><br><br><br>
  <main>
   

    <section>
      <br><br>
          <div class="row justify-content-center">

                <?php include ("../../bd/bd.php");
                $sentenciaSQL=$conexion->prepare("SELECT * FROM autos");
                $sentenciaSQL->execute();
                $liste=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
                ?>


                <?php foreach($liste as $liv) { ?>

              <div class="col-md-5" class="d-flex justify-content-center" class="d-flex align-items-center">
                  
                    <div class="card" style="height: 90em" style="width: 50em">
                    
                        <div class="mml" >
                          <img src="../../ECF0723/imagenes/<?php echo $liv['iamge'] ?>"  alt="Title" class="m-5"  style="width: 70%">
                        </div>
                        
                        <div class="card-body" class="bbk" class="m-7"><br><br>
                          <h4 class="card-title">Marque: <?php echo $liv['marque'] ?></h4><br>
                          <h4 class="card-title">Prix: <?php echo $liv['prix'] ?></h4><br>
                          <h4 class="card-title">Kilimetrage: <?php echo $liv['km'] ?></h4><br>
                          <h4 class="card-title">Détails: <?php echo $liv['details'] ?></h4><br>
                        </div>

                 
            
              </div>

          </div>
          <?php } ?>
    

    </section>
  </main>
  <br><br><br><br><br>
  <footer>
  <div class="foot">
        <div class="fan">
            <img src="../../ECF0723/imagenes/imgs/VPARROT.png" alt="logo">
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
                        <img src="../../ECF0723/imagenes/imgs/logo-facebook-noir.png" alt="Facebook">
                        </a>
                    </div>

                    <div>
                        <a href="https://www.instagram.com/" target="_blank">
                        <img src="../../ECF0723/imagenes/imgs/Logo-Instagram-noir-1.png" alt="Instagram">
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