<?
include 'mysqli_connect.php';

$query = "SELECT id, contato, numero, endereco, email FROM AgendaContato";
$result = mysqli_query($conn, $query);

?>