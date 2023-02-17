<?php
require_once "bd.php";


$restaurante_id = $precio = $tiempo_coccion = $id = 0;
$nombre = $nombre_err = "";
$descripcion = $descripcion_err = "";
$imagen = $imagen_err = "";
$precio_err = $tiempo_coccion_err =  $restaurante_id_err = $id_err =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_restaurante_id = trim($_POST["restaurante_id"]);
    if (empty($input_restaurante_id)) {
        $restaurante_id_err = "El restaurante es obligatorio.";
    } else {
        $restaurante_id = $input_restaurante_id;
    }

    $input_id = trim($_POST["id"]);
    if (empty($input_id)) {
        $id_err = "El id de la comida es obligatorio.";
    } else {
        $id = $input_id;
    }


    $input_nombre = trim($_POST["nombre"]);
    if (empty($input_nombre)) {
        $nombre_err = "Por favor ingrese el nombre.";
    } else {
        $nombre = $input_nombre;
    }



    $input_descripcion = trim($_POST["descripcion"]);
    if (empty($input_descripcion)) {
        $descripcion_err = "Por favor ingrese la url de la descripción.";
    } else {
        $descripcion = $input_descripcion;
    }

    $input_precio = $_POST["precio"];
    if ($input_precio == 0) {
        $precio_err = "El precio debe ser mayor a 0.";
    } else {
        $precio = $input_precio;
    }

    $input_tiempo_coccion = $_POST["tiempo_coccion"];
    if ($input_tiempo_coccion == 0) {
        $tiempo_coccion_err = "El tiempo de cocción debe ser mayor a 0.";
    } else {
        $tiempo_coccion = $input_tiempo_coccion;
    }

    $input_imagen = trim($_POST["imagen"]);
    if (empty($input_imagen)) {
        $imagen_err = "La url de la foto es obligatoria.";
    } else {
        $imagen = $input_imagen;
    }

    // Check input errors before inserting in database
    if (empty($nombre_err) && empty($descripcion_err) && empty($precio_err) && empty($tiempo_coccion_err) && empty($imagen_err) && empty($restaurante_id_err)) {
        // Prepare an insert statement
        $sql = "UPDATE comida SET Nombre = '$nombre', Descripcion = '$descripcion', Precio='$precio', TiempoCoccion='$tiempo_coccion', Imagen =  '$imagen'
                WHERE Id = '$id'";


        $query = mysqli_query($conn, $sql);

        if ($query) {
            Header("Location: ../pages/restaurantes_id.php?id=$restaurante_id");
        }
    }
}
