
<?php 
require_once 'clases/auth.class.php';
require_once 'clases/response.class.php';


if($_SERVER["REQUEST_METHOD"]=="GET")
{
  require_once "clases/conexion/conexion.php";
    $con = new conexion;  
    $query="SELECT Name,Lastname,RFC,userType FROM userdata";
    $res=$con->getData($query);

    $datos=$con->getData($query);

echo "    <table class='table table-dark'>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>RFC</th>
                <th>Tipo de usuario</th>
            </tr>
        </thead>";
        for ($i=0; $i < count($datos); $i++) { 
    $datos2=$datos[$i];          
          echo "<tbody>
       <tr>

          <td>";
          print_r($datos2["Name"]);echo "</td>";
          echo "<td>";print_r($datos2["Lastname"]);echo "</td>";
          echo "<td>";print_r($datos2["RFC"]);echo "</td>";
          echo "<td>";print_r($datos2["userType"]);echo "</td>";

        echo "</tr>
        </tbody>";
        }
    echo "</table>";

}

?>