<?php
include('database.php');

    $query = "SELECT * FROM persona";
    $result = mysqli_query($connection,$query);

    if (!$result) {
        die('La consulta fallo'.mysqli_error($connection));
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'id' => $row['id'],
            'name'=> $row['name'],
            'last_name' => $row['last_name'],
            'rut' => $row['rut'],
            'descripcion' => $row['descripcion'],
        );
       
    }
    $jsonstring = json_encode($json);

    echo $jsonstring;

    
