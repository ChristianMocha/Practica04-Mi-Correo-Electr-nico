<?php
session_start();
if (!isset($_SESSION['isLogin'])) {
    header("Location: ../../../public/vista/login.html");
}





elseif ($_SESSION['rol'] == 'user') {
    header("Location: ../usuario/index.php");
} 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Gestión de usuarios</title>
    <link rel="stylesheet" href="../admin/css/index.css">
    <link rel="stylesheet" href="../usuario/css/index.css">
    
</head>

<body>

    <?php
        include ("../archivos/cabeAdmin.php")
    ?>


    </div>
    <br>
    <br>
    <br>
    <br>

    <h1>Mensajes Recibidos</h1>
    <table>
        <tr>
            <th>Fecha</th>
            <th>Remitente</th>
            <th>Destinatario</th>
            <th>Asunto</th>
            <th></th>

        </tr>


        <tbody>
                    <?php
                    include '../../../config/conexionBD.php';
                    $sql = "SELECT * FROM mensaje INNER JOIN usuario ON mensaje.usu_destino = usuario.usu_codigo ORDER BY 1;";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["mail_fecha"] . "</td>";
                            $sqlRemitente = "SELECT usu_correo FROM usuario WHERE usu_codigo=" . $row["usu_remitente"] . ";";
                            $resultRemitente = $conn->query($sqlRemitente);
                            $rowRemitente = $resultRemitente->fetch_assoc();
                            echo "<td>" . $rowRemitente["usu_correo"] . "</td>";
                            $sqlDestino = "SELECT usu_correo FROM usuario WHERE usu_codigo=" . $row["usu_destino"] . ";";
                            $sqlDestino = $conn->query($sqlDestino);
                            $rowDestino = $sqlDestino->fetch_assoc();
                            echo "<td>" . $rowDestino["usu_correo"] . "</td>";
                            echo "<td>" . $row["mail_asunto"] . "</td>";
                            echo '<td><a href="../admin/eliminarMsj.php?usu_cod=' . $row["mail_codigo"] . '">Eliminar</a></td>';
                        }
                    } else {
                        echo "<tr>";
                        echo '<td colspan="10" class="db_null"><p>No tienes mensajes recibidos</p><i class="fas fa-exclamation-circle"></i></td>';
                        echo "</tr>";
                    }
                    $conn->close();
                    ?>

                </tbody>
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