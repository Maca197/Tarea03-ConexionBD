<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <title>Inicio</title>
</head>
<body>
    <?php
        include("conexion.php")
    ?>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    <?php
          //--- Aplicable a Sentencia SELECT ---//
        $sql = "SELECT * FROM tareas";    
        $stmt = $conn->prepare($sql);        
        $stmt->execute();
     
        // Configura los resultados como un arreglo asociativo    
        $stmt->setFetchMode(PDO::FETCH_ASSOC);   
        // $stmt->fetchAll() Obtiene el arreglo asociativo
            
        echo "<table>";
        echo "<tr><th>Tarea</th><th>Descripcion</th><th>Etiqueta</th></tr>";
        
        foreach ($stmt->fetchAll() as $row)
        {
            echo "<tr><td>" . $row['Tarea'] . "</td>
                    <td>" . $row['Descripcion'] . "</td>
                    <td>" . $row['Etiqueta'] . "</td></tr>";
                    
        }
        
        echo "</table>";
        
    ?>
</body>
</html>