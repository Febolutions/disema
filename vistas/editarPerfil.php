<?php
include("C:\wamp64\www\disema\controller\session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar perfil</title>
        <link rel="stylesheet" href="../css/pageStyles.css">
        <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="jspdf/dist/jspdf.min.js"></script>
        <script src="js/jspdf.plugin.autotable.min.js"></script>
        <script src="../js/modalRun.js"></script>
</head>

<body>
        <nav class="topnav">
                <a href="home.php">Inicio</a>
                <div class="dropdown"><button class="dropbtn">Perfil<i class="fa fa-caret-down"></i></button>
                        <div class="dropdown-content">
                                <a href="../vistas/perfil_ver.php">Ver</a>
                                <a href="../vistas/editarPerfil.php" class="active">Editar</a>
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
        <div id="divPC" class="center">
                <form name="formul" action="" method="POST">
                        <h1 class="title1">Editar Perfil</h1>
                        <label for="id">ID:</label>
                        <input type="number" name="id" class="roundedElements inputTextSizeSmall2" disabled>
                        <label for="nameP">Nombre:</label>
                        <input type="number" name="nombre" class="roundedElements inputTextSizeMedium" required><br>
                        <label for="apeP">Apellido paterno:</label>
                        <input type="text" name="apP" class="roundedElements inputTextSizeMedium" required><br>
                        <label for="apeM">Apellido Materno:</label>
                        <input type="text" name="apM" class="roundedElements inputTextSizeMedium" require><br>
                        <label>RFC:</label>
                        <input type="text" name="rfc" class="roundedElements inputTextSizeMedium" required><br>
                        <label>Nueva Contraseña:</label>
                        <input type="password" name="passw" class="roundedElements inputTextSizeMedium" require><br>
                        <input type="submit" value="Actualizar" class="inputBtnSize"><br>
                        <?php
                        require('C:\wamp64\www\disema\controller\db.php');

                        $usen = $_SESSION['user'];

                        $consulta = "SELECT empleado_id from empleado where user_name='$usen'";
                        $resultado = $conexion->query($consulta);
                        $mostrar = mysqli_fetch_array($resultado);
                        ?>
                        <script>
                                document.formul.id.value = <?php echo $mostrar['empleado_id'] ?>
                        </script>
                        <?php

                        $idE=$_POST['id'];
                        $nombre=$_POST['nombre'];
                        $apP=$_POST['apeP'];
                        $apM=$_POST['apM'];
                        $rfc=$_POST['rfc'];
                        $pass=MD5($_POST['passw']);

                        $actualizar = "UPDATE empleado SET existencias='$restar' WHERE id_material='$idm'";
                        $resultado = $conexion->query($actualizar);

                        if ($resultado) {
                        ?>
                                <script>
                                        alert('Tu perfil se ha actualizado');
                                </script>
                        <?php
                        }

                        ?>
                </form>
        </div>
</body>

</html>