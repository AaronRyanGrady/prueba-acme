<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/FAVICONACME.png" type="image/x-icon">
    <title>  Formulario Registrar Conductor</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
        <body>
                <ul class="menu">
                <li><a href="index.php">Home</a></li>
                    <li><a href="gestionRegistro.php">Atrás</a></li>
                </ul>
            <form class="formularios"  method="post">
                <H3>Registrar Vehículo</H3>
                    <label class="labescontrols"  for="CedProp">Cédula Conductor </label>
                    <input class="controls" type="number"  name="cedulac" id="CedProp" min="10" max="9999999999"  required>
                        <br><br>
                    <label  class="labescontrols" for="PConNombre">Primer Nombre </label>
                    <input class="controls" type="text" name="prinombrec"id="Pnombre" maxlength="50" required >
                        <br><br>
                    <label  class="labescontrols"  for="SConNombre">Segundo Nombre </label>
                    <input  class="controls"type="text" name="segnombrec" id="SConNombre"  maxlength="50"  required >
                        <br><br>
                    <label  class="labescontrols"  for="ConApellido">Apellidos</label>
                    <input class="controls" type="text" name="apellidoc" id="ConApellido" min="0" max="9999999999" required>
                        <br><br>
                    <label  class="labescontrols" for="Cdireccion">Dirección </label>
                    <input class="controls" type="text" name="direccionc" id="Cdireccion" maxlength="50" >
                        <br><br>
                    <label class="labescontrols"  for="Ctelefono">Teléfono</label>
                    <input class="controls" type="number" name="telefonoc" id="Ctelefono"  min="0" max="9999999999"  >
                    <label class="labescontrols"  for="ConCiudad">Ciudad</label>
                    <input class="controls" type="text" name="ciudadc" id="ConCiudad"  maxlength="70"  >
                        <br><br>
                    <input class="botonform"  name="btn1"type="submit" value="Registrar Conductor">
                    <input class="botonform" type="reset" value="Cancelar Registro">
            </form>
    <?php
                    if(isset($_POST['btn1'])){
                        include_once('db.php');
                        $concedula=$_POST['cedulac'];
                        $conprimernombre=$_POST['prinombrec'];
                        $consegundonombre=$_POST['segnombrec'];
                        $conapellido=$_POST['apellidoc'];
                        $condireccion=$_POST['direccionc'];
                        $contelefono=$_POST['telefonoc'];
                        $conciudad=$_POST['ciudadc'];

                        echo "registro exitoso";

                        $conectar=conn();
                        $sql="INSERT INTO conductores( ConCedula, ConPrimerNombre, ConSegundoNombre, ConApellido, ConDireccion, ConTelefono,ConCiudad)
                        VALUES($concedula,'$conprimernombre','$consegundonombre','$conapellido','$condireccion','$contelefono','$conciudad')";
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