<?php
// declares a constant that will not change
define  ('SEVERMAME', 'localhost');
define ('USERNAME', 'root');
define ('PASSWORD', 'root');
define ('DBNAME', 'lab1');

// create conecction with mysql
$conn = new mysqli(SEVERMAME, USERNAME, PASSWORD, DBNAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else

echo "Connected successfully";



// set  and make query
$consulta = "SELECT * FROM Persona";
$resultado = mysqli_query($conn, $consulta) or die ("Algo salio mal!!! :( carita triste");
// show result of the register
if (mysqli_num_rows($resultado) > 0) {
    echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>NumeroIdentificacion</th>
            <th>Direccion</th>
            <th>Telefono</th>
        </tr>";
    // while loop that runs once registe and show
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<tr>
                <td>{$fila['ID']}</td>
                <td>{$fila['Nombre']}</td>
                <td>{$fila['Apellido']}</td>
                <td>{$fila['NumeroIdentificacion']}</td>
                <td>{$fila['Direccion']}</td>
                <td>{$fila['Telefono']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}
// close
mysqli_close($conn);
?>