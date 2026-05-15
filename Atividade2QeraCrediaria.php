<?php
    $amiguitchos = [
        ["Nome"=>"Clebão","Cel"=>"9911234567"],
        ["Nome"=>"Clebinho","Cel"=>"1239090911"],
        ["Nome"=>"João","Cel"=>"1231231231"],
        ["Nome"=>"Joãozinho","Cel"=>"3213213213"]
 ];
 ?>
<table border="1">
    <tr>
        <th>Nome</th>
        <th>Celular</th>
    </tr>

<?php
    foreach ($amiguitchos as $amigo)
        {
        echo "<tr>";
        echo "<td>" . $amigo["Nome"] . "</td>";
        echo "<td>" . $amigo["Cel"] . "</td>";
        echo "</tr>";
    }
?>
</table>
