<?php
include('../bd/bd.php'); 
if(isset($_POST['bot'])){
$username= $_POST["user"];
$password= $_POST["pass"];

session_start();

if(($username!="")&&($password!="")){
 
    $sentenciaSQLy= $conexione->prepare("SELECT * FROM person WHERE pass=:pass AND usuario=:username");
    $sentenciaSQLy->bindParam(':username',$username);
    $sentenciaSQLy->bindParam(':pass',$password);
    $sentenciaSQLy->execute();

    if($sentenciaSQLy->fetchColumn()){

      $_SESSION['usern']="ok";
      $_SESSION['nous']="Vparrot";
    }
 
    header('Location:inicio.php'); 
   }else{
    $msj="Usuario o contraseña son incorrectos";
   }

}
   


?>
<!doctype html>
<html lang="en">

<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <div class="containe">
    <div class="row">
        <div class="col-md-4">

        </div>

        <div class="col-md-4">
            <br><br>
            <div class="card">
                <div class="card-header">
                    Connection
                </div>
                <div class="card-body">


                <?php if (isset($msj)) { ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $msj; ?>
                  </div>
                  
                 <?php } ?> 

                  <form method="POST">
                    <div class="env">
                      <div class="mb-3">
                          <br>
                        <label class="form-label">Utilisateur</label>
                        <input type="text"
                          class="form-control" name="user" id="username" placeholder="Utilisateur">
                      </div>
                    </div>

                    <div class="env">
                      <div class="mb-3">
                        <label class="form-label">Mot de passe</label>
                        <input type="password"
                          class="form-control" name="pass" id="password" placeholder="Mot de passe">
                      </div>
                    </div>
                    <button type="submit" name="bot" class="btn btn-primary">Se connecter</button>
                   </form> 
                </div>
            </div>
        </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>