<?php
$inc=include ("conexprueba.php");
if ($inc){
    $consulta="SELECT * FROM users";
    $resultado=mysqli_query($conex,$consulta);
    if ($resultado){
        while ($row = $resultado->fetch_array()){
            $id=$row["id"];
            $name=$row["name"];
            $apellido=$row["apellido"];
            $cedula=$row["cedula"];
            $edad=$row["edad"];
            $correo=$row["email"];
            $instagram=$row["instagram"];
        }
    }
}
?>