<?php
/*
ESSE ARQUIVO É RESPONSAVEL POR REALIZAR A CONEXAO
COM BANCO DE DADOS
*/
$nomeservidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$bancodedados = "agenda_telefonica"; // Substituí o espaço por um underscore

// CRIA A CONEXAO:
$conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

// VERIFICA A CONEXAO:
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
} else {
    echo "Conectado com sucesso";
}

mysqli_report(MYSQLI_REPORT_ALL ^ MYSQLI_REPORT_INDEX);

function conectadb()
{
    $endereco = "127.0.0.1";
    $usuario = "root";
    $senha = "";
    $banco = "agenda_telefonica"; // Substituí o espaço por um underscore

    try {
        $conn = new mysqli($endereco, $usuario, $senha, $banco);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>
