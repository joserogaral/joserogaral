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
    <link rel="stylesheet" href="accueil.css">
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
                            <li><a href="accueil.php">ACCUEIL</a></li>
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
        <h3>ATELIER DE REPARATION DE VOITURES</h3>
        <p>Réparation de la carrosserie et mécanique des voitures à Toulouse</p>
        <div><a href="../Contact/contact.php">Contact / Prise de RDV</a></div>
    </section>
    <br><br>
<!-- seccion2 -->
    <section class="services">
        <div>
        <h4>SERVICES</h4>
        </div>
        <div class="two">
            <div class="voitures">
                <img src="../imagenes/imgs/cgoc.png" alt="mecanic">
                <h2>Carrosserie</h2>
                <h1>Nous avons une variete des services de réparation de carrosserie et de peinture......
                </h1>
                <a href="../Services/services.php"><button>+ info</button></a>
            </div>

            <div class="voitures">
                <img src="../imagenes/imgs/ccc.png" alt="mecanic">
                <h2>Mécanique</h2>
                <h1>Nous avons pour vous toutes sortes de services mécaniques tels que l'entretien préventif et correctif.
                </h1>
                <a href="../Services/services.php"><button>+ info</button></a>
            </div>

            <div class="voitures">
                <img src="../imagenes/imgs/sale1.jpeg" alt="mecanic">
                <h2>Vente des voitures</h2>
                <h1>Notre atelier met à votre service la vente de voitures d'occasion, garanties par nos soins.
                </h1>
                <a href="../Services/services.php"><button>+ info</button></a>
            </div>
        </div>
        
    </section>
<!-- seccion3 -->
    <section class="apropos">
        <div class="text">
            <h1>À propos</h1>
            <h2> Garage V. Parrot à Toulouse est le résultat de plus de 15 années
            d’expérience professionnelle dans la réparation, l’entretien de voitures.</h2>
            <a href="../Services/services.php"><button>+ info</button></a>
        </div>
         
        <div class="img">
            <img src="../imagenes/imgs/mecanico7.jpeg" class="img-fluid rounded-top" alt="">
        </div> 
    </section> 



            <?php 
            include ("../bd/bd.php");
            $sentenciaSQLs=$conexionetll->prepare("SELECT * FROM avis");
            $sentenciaSQLs->execute();
            $listez=$sentenciaSQLs->fetchALL(PDO::FETCH_ASSOC);
            ?>

<br><br>

    <section class=""cchh>

            <div class="tyd">
                <h1>Regardez les témoignages de clients qui font confiance à Garage V. Parrot.</h1>
            </div>
            <br><br>

<div class="container">
                <?php foreach($listez as $uv){ ?>
                    <div id="carouselExample" class="carousel" data-ride="carousel">
                        <div class="carousel">
                        <div class="carousel-item active">
                                <div class="card">
                                    <div class="card-body" style="height: 15rem;">
                                        <h1 class="card-subtitle mb-2 text-body-secondary">"<?php echo $uv['pseu']?>"</h1>
                                        <br>
                                        <h4 class="card-text">"<?php echo $uv['coment']?>"</h4>
                                </div>

                        </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" class="btn btn-secondary">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                
                            </button>
                        </div>
                    </div>
            <?php } ?>     




</div>



    </section>



  </main>
  
  <br><br><br><br><br><br>
  <br><br><br><br><br><br>
  
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
                            <li><a href="accueil.php">ACCUEIL</a></li>
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