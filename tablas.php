<?php




$Alumnos=array(
    array(
        "codigo",
        "nombre",
        "edad",
        "opciones"),
    array(
        "codigo"=>"123",
        "nombre"=>"jose lopez",
        "edad"=>"40",
        "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
    ),
    array(
       "codigo"=>"222",
       "nombre"=>"pedro armendariz",
       "edad"=>"24",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
         
    ),
    array(
       "codigo"=>"321",
       "nombre"=>"alberto casillas",
       "edad"=>"25",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
    ),
    array(
       "codigo"=>"098",
       "nombre"=>"jesus hernandez",
       "edad"=>"37",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>'  
    ),
    array(
       "codigo"=>"123",
       "nombre"=>"jose gutierrez",
       "edad"=>"21",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>'   
    ),
    array(
       "codigo"=>"111",
       "nombre"=>"fatima perez",
       "edad"=>"23",
       "opciones"=>'<a href="#">Editar</a> <a href="#">Eliminar</a>' 
    )
);
echo "<table>";
foreach($Alumnos as $indice=>$persona){
    echo"<tr>";
    foreach($persona as $campo=>$valor){
        echo "<td>". $valor."</td>";
    }
    echo "</tr>"; 
}
echo "</table>";
?>