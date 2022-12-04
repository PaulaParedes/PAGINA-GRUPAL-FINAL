<?php
    function conexion(){
        $conn = new mysqli("localhost", "root", "", "Egresados");

        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

     function selectEgresadoCedula($cedula){
        $conn = conexion();
        $result = mysqli_query($conn,"SELECT egresado.*,programa.programa_nombre, sede.sede_nombre, sede.sede_ubicacion, facultad.facultad_nombre FROM Egresado =egresado INNER JOIN Egresado_programa ON egresado.egresado_id=Egresado_programa.id_egresado INNER JOIN Programa=programa ON Egresado_programa.id_programa=programa.programa_id INNER JOIN Facultad=facultad ON programa.id_facultad=facultad.facultad_id INNER JOIN Egresado_sede ON egresado.egresado_id=Egresado_sede.id_egresado INNER JOIN Sede=sede ON Egresado_sede.id_sede=sede.sede_id WHERE egresado.egresado_cedula = '".$cedula."'");
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {
             echo "Nombre: " . $row["egresado_nombres"]. " - Apellido: " . $row["egresado_apellidos"]. $row["egresado_cedula"]."<br>";
          }
        } else {
          echo "No hay registros";
        }
        cerrar($conn);
    }
    
    function cerrar($conn){
        mysqli_close($conn);
    }
    
?>
