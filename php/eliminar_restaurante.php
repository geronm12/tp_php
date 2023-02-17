<?php
require_once "bd.php";

$id = $_GET["id"];
$sql = "DELETE FROM resturante WHERE Id = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header("Location: ../pages/restaurantes.php");
}

?>
