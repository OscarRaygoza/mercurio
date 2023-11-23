<?php

require '../clases/ConexionBD.php';
require '../clases/HashPassword.php';
$conn = \clases\ConexionBD::obtenerInstancia()->obtenerConexion();

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if(isset($_POST['insertar'])){
    // Recibir datos del formulario
    $db = 'mercuriodb';
    $nombre = $_POST['nombre'] ?? null;
    $apPaterno = $_POST['apPaterno'] ?? null;
    $apMaterno = $_POST['apMaterno'] ?? null;
    $nomUsuario = $_POST['nombre_usuario'] ?? null;
    $password = $_POST['password'] ?? null;
    $passRepeat = $_POST['password_repet'] ?? null;
    $cp = $_POST['cp'] ?? null;
    $colonia = $_POST['colonia'] ?? null;
    $calle = $_POST['calle'] ?? null;
    $numero = $_POST['numero'] ?? null;
    $interior = $_POST['interior'] ?? null;
    $poblacion = $_POST['poblacion'] ?? null;
    $pais = $_POST['pais'] ?? null;
    $email = $_POST['email'] ?? null;
    echo $email;
    if($password === $passRepeat){
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);
        echo $password_hashed;
    }else{
        ?> <span>Las contraseñas no coinciden</span><?php
    }
    $sqlUsr = mysqli_query($conn, "INSERT INTO usuarios(passw,nomUsuario)VALUES('$password_hashed','$nomUsuario')");

    $rs = mysqli_query($conn, "SELECT MAX(idusuarios) AS id FROM usuarios");
    if ($rs) {
        $row = mysqli_fetch_assoc($rs);
        // Verifica si se obtuvieron resultados
        if ($row['id'] !== null) {
            $idUsr = intval($row['id']);
        } else {
            // Si no hay resultados (es decir, si la tabla está vacía), asigna un valor predeterminado
            $idUsr = 1;
        }
        echo $idUsr;
    } else {
        // Manejo de errores si la consulta falla
        echo "Error en la consulta: " . mysqli_error($conn);
    }

    if($sqlUsr){
        $sqlCliente = "INSERT INTO cliente (nombreCliente, apellidoPaterno, apellidoMaterno,usuarios_idusuarios,enabled,roles_idroles,email)
                VALUES ('$nombre', '$apPaterno', '$apMaterno',$idUsr,1,1,'$email')";
        $conn->query($sqlCliente);
    }
    $rsCliente = mysqli_query($conn, "SELECT MAX(idcliente) AS idCliente FROM cliente");

    if ($rsCliente) {
        $rowCliente = mysqli_fetch_assoc($rsCliente);
        if ($rowCliente['idCliente'] !== null) {
            $idCliente = intval($rowCliente['idCliente']);
        } else {
            $idCliente = 1;
        }
        echo 'Este es el numero de cliente'.$idCliente;
    } else {
        // Manejo de errores si la consulta falla
        echo "Error en la consulta: " . mysqli_error($conn);
    }

    if($sqlCliente){
        $sqlDomicilio = "INSERT INTO domicilio(calle,numero,colonia,interior,pais,cp,poblacion,cliente_idcliente)
                    VALUES('$calle','$numero','$colonia',$interior,'$pais',$cp,'$poblacion',$idCliente)";
    }

    if ($conn->query($sqlDomicilio)  === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sqlDomicilio. "<br>" . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>
<script>
    alert('Registro exitoso');
    window.location.replace('../index.php');
</script>
<?php

?>

