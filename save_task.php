<?php 
include("db.php");

if (isset($_POST['save_task'])){
    $nombre = $_POST['nombre'];
    $tel = $_POST['tel'];
    $correo = $_POST['correo'];
    $plaza = $_POST['plaza'];
    $pretencion = $_POST['pretencion'];
    $experiencia = $_POST['experiencia'];
    $residencia = $_POST['residencia'];
    $disponibilidad = $_POST['disponibilidad'];

    $query = "INSERT INTO task(nombre, telefono, correo, plaza, salario, experiencia, reside, disponibilidad) 
    VALUES ('$nombre', '$tel', '$correo', '$plaza', '$pretencion', '$experiencia', '$residencia', '$disponibilidad')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Failed");
    }
    
    $_SESSION['message'] =  'Guardado';
    $_SESSION['message_type'] = 'success';

    header("Location: form.php");
}

?>