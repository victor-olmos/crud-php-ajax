<?php

include('database.php');

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $rut = $_POST['rut'];
        $descripcion = $_POST['descripcion'];

            $query = "INSERT INTO persona(name,last_name,rut,descripcion) VALUES 
            ('$name','$last_name','$rut','$descripcion')";

            $result = mysqli_query($connection,$query);
            if (!$result) {
                die('fallo la consulta');
            }
    }