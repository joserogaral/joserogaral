<?php
$host="localhost";
$bd="garage";
$usuario="root";
$contrasena=""; 

try {
    $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasena);
} catch ( Exception $ex) {
    echo $ex->getMessage();
}
?> 

<?php
$hoste="localhost";
$bde="personnel";
$usuarioe="root";
$contrasenae="";

try {
    $conexione=new PDO("mysql:host=$hoste;dbname=$bde",$usuarioe,$contrasenae);
} catch ( Exception $ex) {
    echo $ex->getMessage();
}
?>

<?php
$hoste="localhost";
$bde="contact";
$usuarioe="root";
$contrasenae="";

try {
    $conexioni=new PDO("mysql:host=$hoste;dbname=$bde",$usuarioe,$contrasenae);
} catch ( Exception $ex) {
    echo $ex->getMessage();
}


?>

<?php
$hoste="localhost";
$bde="hor";
$usuarioe="root";
$contrasenae="";

try {
    $conexionet=new PDO("mysql:host=$hoste;dbname=$bde",$usuarioe,$contrasenae);
} catch ( Exception $ex) {
    echo $ex->getMessage();
}
?>

<?php
$hoste="localhost";
$bde="parrot";
$usuarioe="root";
$contrasenae="";

try {
    $conexionetll=new PDO("mysql:host=$hoste;dbname=$bde",$usuarioe,$contrasenae);
} catch ( Exception $ex) {
    echo $ex->getMessage();
}
?>

