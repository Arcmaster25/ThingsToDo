<?php
function connection($host = "localhost", $user = "root", $pass = "", $db = "ThingToDo"){
        $connection = new mysqli($host, $user, $pass, $db);
        if($connection->connect_error){
                echo "Error de conexion " . $connection->connect_error . " codigo de error " . $connection->connect_errno;
        }else{
                return $connection;
        }
}
?>
