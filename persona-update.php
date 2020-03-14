<?php
include('database.php');

if(isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $rut = $_POST['rut'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE persona SET name ='$name' , last_name = '$last_name' , 
    rut ='$rut' , descripcion = '$descripcion' WHERE id = '$id'";

    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("la consulta fallo");
    }
    echo "datos actualizados";
}