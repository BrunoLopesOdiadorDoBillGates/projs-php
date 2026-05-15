<?php
// Bruno Lopes Motta 04
// Fabricio Luiz dos Santos 08
$nome = "jao";
$celular = "1234556";
$nota1 = 8.5;
$nota2 = 7.0;
$media = ($nota1 + $nota2) / 2;

echo "<table>";
echo "<tr>
        <th>nome</th>
        <th>cel</th>
        <th>nota1</th>
        <th>nota2</th>
        <th>media</th>
      </tr>";
echo "<tr>
        <td>$nome</td>
        <td>$celular</td>
        <td>$nota1</td>
        <td>$nota2</td>
        <td>$media</td>
      </tr>";
echo "</table>";
?>