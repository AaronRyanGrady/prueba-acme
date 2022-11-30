<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/FAVICONACME.png" type="image/x-icon">
    <title>  Formulario Registrar Vehículo</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
        <body>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gestionRegistro.php">Atrás</a></li>
                </ul>
            <form class="formularios"  method="post">
                <H3>Registrar Vehículo</H3>
                    <label class="labescontrols"  for="Vplaca">Placa </label>
                    <input class="controls" type="text"  name="placav" id="Vplaca" min="10" max="9999999999"  required>
                        <br><br>
                    <label  class="labescontrols" for="Vcolor">Color del Vehículo </label>
                    <input class="controls" type="text" name="colorv"id="Vcolor" maxlength="50" required >
                        <br><br>
                    <label  class="labescontrols"  for="Vmarca">Marca de Vehículo </label>
                    <input  class="controls"type="text" name="marcav" id="Vmarca"  maxlength="50"  required >
                        <br><br>
                        <h3>Tipo de Vehículo</h3>
                    <select id="veh" name="tipov">
                        <option selected>Particular</option>
                        <option >Público</option>
                    </select>  
                <h3></h3>
                        <br><br>
                    <label  class="labescontrols" for="CedulaCon">Cédula de Conductor</label>
                    <input class="controls" type="number" name="cedulac" id="CedulaCon" maxlength="50" >
                        <br><br>
                    <label class="labescontrols"  for="CedulaPro">Cédula de Propietario</label>
                    <input class="controls" type="number" name="cedulap" id="CedulaPro"  maxlength="70"  >
                        <br><br>
                    <input class="botonform" name="btn1" type="submit" value="Registrar Vehículo">
                    <input class="botonform" type="reset" value="Cancelar Registro">
            </form>
    <?php
            if(isset($_POST['btn1'])){
                include_once('db.php');
                $vehplaca=$_POST['placav'];
                $vehcolor=$_POST['colorv'];
                $vehmarca=$_POST['marcav'];
                $vehtipo=$_POST['tipov'];
                $vehcedulaconductor=$_POST['cedulac'];
                $vehcedulapropietario=$_POST['cedulap'];


                echo "registro exitoso";

                $conectar=conn();
                $sql="INSERT INTO vehiculos( VehPlaca, VehColor, VehMarca, VehTipo, Propietarios_ProCedula, Conductores_ConCedula)
                VALUES('$vehplaca','$vehcolor','$vehmarca','$vehtipo',$vehcedulapropietario,$vehcedulaconductor)";
                $result=mysqli_query($conectar,$sql)or trigger_error("Query Failed! SQL-ERROR:".mysqli_error($conectar),E_USER_ERROR);

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