<?php 
header('location: index.php');
include "mysqli_connect.php";

    $contato = $_POST['nomex'];
    $numero = $_POST['numx'];
    $endereco = $_POST['enderecox'];
    $email = $_POST['emailx'];

    mysqli_query($conn, "INSERT INTO AgendaContato(contato, numero, endereco, email) VALUES ('$contato','$numero','$endereco','$email')");
    
?>
