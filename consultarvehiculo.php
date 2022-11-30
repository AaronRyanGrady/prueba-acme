<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/FAVICONACME.png" type="image/x-icon">
    <title>  Formulario Consultar Vehículo</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
        <body>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                  
                </ul>
            <form class="formularios"  method="post">
                <H3>Consultar Vehículo</H3>
                    <label class="labescontrols"  for="PlacaV">Placa del Vehículo</label>
                    <input class="controls" type="text"  name="vplaca" id="PlacaV" min="10" max="9999999999"  required>
                        <br><br>
                   
                    <input class="botonform" name="btn1" type="submit" value="Consultar Vehículo">
                    <input class="botonform" type="reset" value="Cancelar ">
            </form>
        
    <?php

        if(isset($_POST['btn1'])){

            include_once('db.php');

            $vehplaca=$_POST['vplaca'];


            echo "Resultados de la Consulta";

            echo "<br>";
            $conectar=conn();
            $sql="SELECT  VehPlaca,VehMarca,CONCAT(ProPrimerNombre, ' ', ProSegundoNombre,' ',ProApellidos) As NombrePropietario,CONCAT(ConPrimerNombre,' ',ConSegundoNombre,' ',ConApellido) as NombreConductor  FROM vehiculos,propietarios,conductores where  VehPlaca='$vehplaca' AND Propietarios_ProCedula=ProCedula and Conductores_ConCedula=ConCedula"  ;
            $result=mysqli_query($conectar,$sql);

                while($consulta=mysqli_fetch_array($result))
                {
                    echo "
                    <table width=\"100%\" border=\"1\">
                    <tr>
                        <td><b> <center>Placa</center> </b> </td>
                        <td><b> <center>Marca</center> </b> </td>
                        <td><b> <center>Nombre Conductor</center> </b> </td>
                        <td><b> <center>Nombre Propietario</center> </b> </td>
                        
                    </tr>
                    <tr>
                        <td>".$consulta['VehPlaca']."</td>
                        <td>".$consulta['VehMarca']."</td>
                        
                        <td>".$consulta['NombreConductor']."</td>
                        <td>".$consulta['NombrePropietario']."</td>
                        

                    </tr>
                </table>";
                    
                    
                }
        }
?>
            
            <div>
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
            </div>
            <footer class="pie-pagina">
           <div class="colorpie">

           </div>
        
        </footer>
        </body>
</html>