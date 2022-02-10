<?php
    include('conexion.php');
    if (count($_POST) > 0) {
        $tarea = $_POST['tarea'];
        $descripcion = $_POST['descripcion'];
        $etiqueta = $_POST['etiqueta'];

        $sql = "INSERT INTO tareas (tarea, descripcion, etiqueta) VALUES ('$tarea','$descripcion','$etiqueta')";

        $conn->exec($sql);

        //Evita el reenvio de formulario al redirigir al index
        header('Location: index.php');

    }
?>