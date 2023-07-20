<?php 
            include ("../bd/bd.php");

            $sentenciaSQLw=$conexionet->prepare("SELECT * FROM ora");
            $sentenciaSQLw->execute();
            $listep=$sentenciaSQLw->fetchALL(PDO::FETCH_ASSOC);
?>
 




<!doctype html>
<html lang="en">
 
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="apropos.css" type="text/css">
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
                            <li><a href="apropos.php">A PROPOS</a></li>
                            <li><a href="../Contact/contact.php">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
    </div> 
    
  </header>

  <main>
    <section class="hero">
            <h3>A PROPOS DE NOUS</h3>
        </section>
        <!-- seccion2 -->
        <section class="sec1">
            <div class="tr">
                <p>Garage V. parrot est le résultat de plus de 15 années d’expérience professionnelle 
                    dans la réparation, l’entretien des voitures dans 4 regions en france. <br> <br>

                    Aujourd’hui dans notre atelier situé dans Le Capitole Place du Capitole 31000 Toulouse,  pas loin de la place du capitole, 
                    où je vous propose des services d’entretien, réparation et vente de véhicules d'occasion.</p>
            </div>

            <div class="im">
                <img src="../imagenes/imgs/padre e hijo.jpeg" alt="familia">
            </div>
        </section>
        <!-- seccion3 -->
        <section class="sec2">
            <div class="tr">
                <p>Une machine très simple et à la fois très complexe, les voitures n’est pas qu’une passion, 
                    c’est pour nous un art de vivre, un mode de transport, un sport et une philosophie.</p>
                <h1>«Nous sommes pas des
                    "simple" mécanicien »</h1>
                <p>Notre atelier est un lieu où vous pouvez accorder votre confiance, pour nous votre sécurité est importante.</p>
            </div>

            <div class="im">
                <img src="../imagenes/imgs/empleados.jpeg" alt="">
            </div>
        </section>
        <!-- seccion4 -->
        <section class="sec3">
            <div class="tr">
                <p>Que vous soyez intéressé(e) par l’amélioration de votre carrosserie, des services d’entretien,
                    ou que vous ayez simplement besoin d’un service mayor pour votre voiture quotidien, n’hésitez pas à nous contacter pour une consultation ou pour prendre un RDV.</p>
                    <div><a href="../Contact/contact.php">Contact / Prise de RDV</a></div>
            </div>
            <div class="imx">
                <img src="../imagenes/imgs/atencion.jpeg" alt="">
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
                            <li><a href="apropos.php">A PROPOS</a></li>
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