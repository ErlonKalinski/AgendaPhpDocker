<?
header('location: index.php');
include "mysqli_connect.php";

$id = $_GET['id'];

    $contato = $_POST['nomex'];
    $numero = $_POST['numx'];
    $endereco = $_POST['enderecox'];
    $email = $_POST['emailx'];
    $consulta = "UPDATE AgendaContato SET contato='$contato', numero='$numero', endereco='$endereco', email='$email' WHERE id='$id'";
    mysqli_query($conn, $consulta);
?>