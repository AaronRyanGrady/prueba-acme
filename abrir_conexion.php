<?php
    $host="localhost";
    $basededatos="acme";
    $usuariodb="root";
    $passworddb="";


        $conexion=mysqli_connect($host,$basededatos,$usuariodb,$passworddb);
        return $conexion;
            if($conexion ->connect_errno )
            {
                echo"error";
                exit();

            }

?>