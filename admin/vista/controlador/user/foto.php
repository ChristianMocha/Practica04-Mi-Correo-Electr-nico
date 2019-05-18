
<?php
include '../../../../config/conexionBD.php';

$foto = $_FILES["foto"]["name"];
$ruta = $_FILES["foto"]["tmp_name"];

$destino = "../../fotos/imgUser/" . $foto;
copy($ruta, $destino);



$sql = "SELECT usu_codigo FROM usuario ";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sqlInsert = "INSERT INTO usuario (img) VALUES ('$destino')";

if ($conn->query($sqlInsert) == true) {
    echo "<h1>foto guardada</h1>";
} else {
    echo "<h1>foto no guardada</h1>";
}
$conn->close();
?>