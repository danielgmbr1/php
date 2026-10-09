<?php

include "../conexao.php";

/**
 * PDO:errorCode - Retorna o código de erro da última operação.
 * PDO:errorInfo - Retorna informações sobre o último erro de operação.
**/
try {
    $pdo->exec("SELECT * FROM clientes");
} catch (PDOException $err) {
    echo "Codigo do SQLSTATE: " . $pdo->errorCode();
    echo "\n\n";
    print_r($pdo->errorinfo());

    echo $err->getMessage();

}