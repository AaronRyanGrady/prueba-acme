<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/FAVICONACME.png" type="image/x-icon">
    <title>  Formulario Registrar Propietario</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
        <body>
                <ul class="menu">
                <li><a href="index.php">Home</a></li>
                    <li><a href="gestionRegistro.php">Atrás</a></li>
                </ul>
            <form class="formularios"  method="post">
                <H3>Registrar Propietario</H3>
                    <label class="labescontrols"  for="CedProp">Cédula Propietario </label>
                    <input class="controls" type="number"  name="cedulap" id="CedProp" min="10" max="9999999999"  required>
                        <br><br>
                    <label  class="labescontrols" for="Pnombre">Primer Nombre </label>
                    <input class="controls" type="text" name="prinombrep"id="Pnombre" maxlength="50" required >
                        <br><br>
                    <label  class="labescontrols"  for="Snombre">Segundo Nombre </label>
                    <input  class="controls"type="text" name="segnombrep" id="Snombre"  maxlength="50"  required >
                        <br><br>
                    <label  class="labescontrols"  for="ProApellido">Apellidos</label>
                    <input class="controls" type="text" name="apellidop" id="ProApellido" min="0" max="9999999999" required>
                        <br><br>
                    <label  class="labescontrols" for="Pdireccion">Dirección </label>
                    <input class="controls" type="text" name="direccionp" id="Pdireccion" maxlength="50" >
                        <br><br>
                    <label class="labescontrols"  for="Ptelefono">Teléfono</label>
                    <input class="controls" type="number" name="telefonop" id="Ptelefono"  min="0" max="9999999999" required>
                    <br><br>
                    <label class="labescontrols"  for="Pciudad">Ciudad</label>
                    <input class="controls" type="text" name="ciudadp" id="Pciudad"  maxlength="70"  >
                        <br><br>
                    <input class="botonform" type="submit" name="btn1" value="Registrar Propietario">
                    <input class="botonform" type="reset" value="Cancelar Registro">
            </form>
    <?php
                        if(isset($_POST['btn1'])){
                            include_once('db.php');
                            $procedula=$_POST['cedulap'];
                            $proprimernombre=$_POST['prinombrep'];
                            $prosegundonombre=$_POST['segnombrep'];
                            $proapellido=$_POST['apellidop'];
                            $prodireccion=$_POST['direccionp'];
                            $protelefono=$_POST['telefonop'];
                            $prociudad=$_POST['ciudadp'];

                            echo "registro exitoso";

                            $conectar=conn();
                            $sql="INSERT INTO propietarios( ProCedula, ProPrimerNombre, ProSegundoNombre, ProApellidos, ProDireccion, ProTelefono,ProCiudad)
                            VALUES($procedula,'$proprimernombre','$prosegundonombre','$proapellido','$prodireccion',$protelefono,'$prociudad')";
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