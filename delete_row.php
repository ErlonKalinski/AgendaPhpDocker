<?
header('location: index.php');
include 'mysqli_connect.php';

$id = $_GET['id'];
$query = "DELETE FROM AgendaContato WHERE id='$id'";
mysqli_query($conn, $query);

?>