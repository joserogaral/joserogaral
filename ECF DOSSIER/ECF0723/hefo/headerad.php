

<?php
session_start();
if(!isset($_SESSION['usern'])) {
  header("Location:../admin/login.php");

}else{
  if($_SESSION['usern']=="ok"){
    $nous=$_SESSION["nous"];
  }
}
?>



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">

            <a class="nav-item nav-link active" href="../admin/personnel1.php" aria-current="page">Personnel</a>
            <a class="nav-item nav-link" href="../admin/voitures.php">Voitures garage</a>
            <a class="nav-item nav-link" href="../admin/cometmod.php">information et comentaires</a>
            <a class="nav-item nav-link" href="../admin/messages.php">Messages</a>
            <a class="nav-item nav-link" href="../admin/deconexion.php">Déconexion</a>
            

            



        </div>
    </nav>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-12">
                <br>
                