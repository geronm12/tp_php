<?php
require_once "bd.php";

$id = $_GET["id"];

$sql_c = "SELECT RestauranteId  FROM comida WHERE Id = '$id'";
$query_c = mysqli_query($conn, $sql_c);
$row = mysqli_fetch_array($query_c);
$restauranteid = $row["RestauranteId"];

$sql = "DELETE FROM comida WHERE Id = '$id'";
$query = mysqli_query($conn, $sql);

if ($query) {
    Header("Location: ../pages/restaurantes_id.php?id=$restauranteid");
}
