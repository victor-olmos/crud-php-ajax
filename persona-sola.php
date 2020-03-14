<?php
include('database.php');
    $id = $_POST['id'];
    $query = "SELECT * FROM persona WHERE id  = $id";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die('fallo la consulta');
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'name'=> $row['name'],
            'last_name' => $row['last_name'],
            'rut' => $row['rut'],
            'descripcion' => $row['descripcion'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;