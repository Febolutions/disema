<?php
include("C:\wamp64\www\disema\controller\session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="../css/pageStyles.css">
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="jspdf/dist/jspdf.min.js"></script>
    <script src="js/jspdf.plugin.autotable.min.js"></script>
</head>

<body>
    <nav class="topnav">
        <a href="home.php" class="active">Inicio</a>
        <div class="dropdown"><button class="dropbtn">Perfil<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="../vistas/perfil_ver.php">Ver Perfil</a>
                <a href="../vistas/editarPerfil.php">Editar perfil</a>
            </div>
        </div>
        <div class="dropdown"><button class="dropbtn">Bitácora<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="../vistas/registrarB.php">Registrar</a>
                <a href="../vistas/consultarB.php">Consultar</a>
            </div>
        </div>
        <div class="dropdown"><button class="dropbtn">Inventarios<i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="../vistas/registroM.php" name="registrarMI">Registrar</a>
                <a href="../vistas/consultar.php">Consultar</a>
                <a href="../vistas/descontar.php">Descontar</a>
                <a href="../vistas/eliminarI.php">Eliminar</a>

            </div>
        </div>
        <a href="../vistas/consultarOrden.php">Consultar trabajo</a>
        </div>
        </div>
        <a href="../controller/logout.php">Cerrar Sesión</a>
        </div>
    </nav>

    <div id="divP" class="center">
        <label class="title1">Error al realizar la operación. Intentalo de nuevo.</label><br>
        <a id="tagPDF" href="../vistas/registroM.php">Regresar</a>
    </div>


</body>

</html>