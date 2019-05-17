<?php
session_start();
if (!isset($_SESSION['isLogin'])) {
    header("Location: ../../../public/vista/login.html");
} elseif ($_SESSION['rol'] == 'admin') {
    header("Location: ../admin/index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
    <link rel="stylesheet" href="../admin/css/index.css">
    <link rel="stylesheet" href="../archivos/css/buscar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

    <?php
    include("../archivos/cabeUser.php")
    ?>



    <br>
    <br>
    <br>
    <br>

    <h1>Mensajes Recibidos</h1>

    <div class="buscar">
        <button>
            <i class="fas fa-search"></i>
        </button>
        <input type="text" placeholder="Buscar por Remitente">
    </div>
    <table>
        <tr>
            <th>Fecha</th>
            <th>Remitente</th>
            <th>Asunto</th>
            <th></th>

        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <footer>
        <?php
        include("../archivos/piePagina.php");
        ?>
    </footer>


</body>

</html>