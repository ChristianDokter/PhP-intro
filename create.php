<?php 
// dit zijn de benodige gegevens voor het contact maken met de mysqlserver
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "kerstverlanglijstje";

// we gaan met de functionele mysqli_connect() contact maken met de mysqlserver
$conn = mysqli_connect($servername, $username, $password, $databasename);

$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];

$query = "INSERT INTO `users` (`id`, 
                                `firstname`, 
                                `infix`, 
                                `lastname`) 
                                VALUES (NULL,
                                '$firstname', 
                                '$infix', 
                                '$lastname');";

mysqli_query($conn, $query);

// het doorsturen naar een nieuwe pagina doe je met een header functie
header("Refresh: 3; ./index.php?conten=home");
?>

<div class="col-6">
    <h1>Uw gegevens zijn verwerkt. U wordt doorgestuurd naar de startpagina</h1>
</div>
<div class="col-6">
    <img src="./img/CheckMark.png" alt="CheckMark" class="script">
</div>