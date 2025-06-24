<?php
    $dbHostname = "localhost";
    $dbUsername = "root";
    $dbSenha = "";
    $dbNome = "db-site-frases-motivacionais";

    try {
        $conn = new mysqli($dbHostname, $dbUsername, $dbSenha, $dbNome);
    }
    catch (mysqli_sql_exception) {
        echo "Erro na conexão com o banco de dados";
    }
?>