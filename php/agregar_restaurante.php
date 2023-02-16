<?php
require_once "bd.php";

$nombre_fantasia = $nombre_fantasia_err = "";
$razon_social = $razon_social_err = "";
$cuit = $cuit_err = "";
$direccion = $direccion_err = "";
$ubicacion = $ubicacion_err = "";
$medios_de_pago = 0;
$demora_promedio = 0;
$medios_de_pago_err = $demora_promedio_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_nombre_fantasia = trim($_POST["nombre_fantasia"]);
    if (empty($input_nombre_fantasia)) {
        $nombre_fantasia_err = "Por favor ingrese el nombre de fantasía.";
    } else {
        $nombre_fantasia = $input_nombre_fantasia;
    }


    $input_razon_social = trim($_POST["razon_social"]);
    if (empty($input_razon_social)) {
        $razon_social_err = "Por favor ingrese la razón social.";
    } else {
        $razon_social = $input_razon_social;
    }

    $input_cuit = trim($_POST["cuit"]);
    if (empty($input_cuit)) {
        $cuit_err = "Por favor ingrese el CUIT.";
    } else {
        $cuit = $input_cuit;
    }

    $input_direccion = trim($_POST["direccion"]);
    if (empty($input_direccion)) {
        $direccion_err = "Por favor ingrese la dirección.";
    } else {
        $direccion = $input_direccion;
    }

    $input_ubicacion = trim($_POST["ubicacion"]);
    if (empty($input_ubicacion)) {
        $ubicacion_err = "Por favor ingrese la url de la ubicación.";
    } else {
        $ubicacion = $input_ubicacion;
    }

    $input_medios_de_pago = $_POST["medios_de_pago"];
    if ($input_medios_de_pago == 0) {
        $medios_de_pago_err = "Seleccione un medio de pago.";
    } else {
        $medios_de_pago = $input_medios_de_pago;
    }

    $input_demora_promedio = $_POST["demora_promedio"];
    if ($input_demora_promedio == 0) {
        $demora_promedio_de_pago_err = "La demora promedia debe ser mayor a 0.";
    } else {
        $demora_promedio = $input_demora_promedio;
    }

    // Check input errors before inserting in database
    if (empty($nombre_fantasia_err) && empty($razon_social_err) && empty($ubicacion_err) && empty($medios_de_pago_err) && empty($demora_promedio_err) && empty($cuit_err) && empty($direccion_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO resturante (NombreFantasía, RazonSocial, CUIT, Direccion, Ubicacion, MediosDePago, DemoraPromedio)
                VALUES ('$nombre_fantasia', '$razon_social', '$cuit', '$direccion', '$ubicacion', '$medios_de_pago', '$demora_promedio')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            Header("Location: ../pages/restaurantes.php");
        }
    } else {
        echo "<h1>$nombre_fantasia_err</h1>";
        echo "<h1>$razon_social_err</h1>";
        echo "<h1>$ubicacion_err</h1>";
        echo "<h1>$medios_de_pago_err</h1>";
        echo "<h1>$demora_promedio_err</h1>";
        echo "<h1>$cuit_err</h1>";
        echo "<h1>$direccion_err</h1>";
    }
}
