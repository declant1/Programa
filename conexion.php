<hmtl>

<body>
<?php
$enlace = mysql_connect("localhost","root","superadministrador","censohoteles");

if($enlace){
die("no se pudo conectar a la base de datos". mysqli_error());
 }
echo "conexion exitosa";
mysqli close($enlace);
?>
</body>

</hmtl>