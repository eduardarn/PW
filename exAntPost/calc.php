<?php
    $numero = floatval($_GET['txtnumero']);
    $ant = $numero - 1;
    $post = $numero + 1;
    echo "O número que antecede o número escolhido é: <b>" . $ant . "</b> <br>";   
    echo "O número que sucede o número escolhido é: <b>" . $post . "</b>";
?>