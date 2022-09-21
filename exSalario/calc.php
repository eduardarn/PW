<?php
$Pnumero = floatval($_GET['txtqt']);
$Snumero = floatval($_GET['txthora']);
$Tnumero = floatval($_GET['txtgra']);
$Soma = $Pnumero * $Snumero + $Tnumero;

echo "O salario que você deve receber é: <b>" . $Soma . "</b>";

?>