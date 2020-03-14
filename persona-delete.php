<?php

    include('database.php');

    if (isset($_POST['id'])) {
    
        $id = $_POST['id'];

        $query = "DELETE FROM persona WHERE id = $id";
        $result = mysqli_query($connection,$query);

        if (!$result) {
            die('fallo la consulta');
        }
        echo "persona eliminada";
    }
    