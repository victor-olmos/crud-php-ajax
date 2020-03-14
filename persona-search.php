<?php

    include('database.php');

    $search = $_POST['search'];
    if(!empty($search)) {
      $query = "SELECT * FROM persona WHERE name LIKE '$search%'";
      $result = mysqli_query($connection, $query);
      
      if(!$result) {
        die('Query Error' . mysqli_error($connection));
      }
      
      $json = array();
      while($row = mysqli_fetch_array($result)) {
        $json[] = array(
                'name' => $row['name'],
                'last_name' => $row['last_name'],
                'descripcion' => $row['descripcion'],
                'rut' => $row['rut'],
                'id' => $row['id']

            );
        }
        $jsonstring = json_encode($json);

    echo $jsonstring;
        
    }
    ?>