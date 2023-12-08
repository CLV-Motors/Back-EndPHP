<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>

<body>

    <center>
        <h1>Carros</h1>
    </center>

    <form action="inserir.php" method="GET">
        <input type="text" name="placa" placeholder="Placa">
        <input type="text" name="marca" placeholder="Marca">
        <input type="text" name="modelo" placeholder="Modelo">
        <input type="text" name="versao" placeholder="Versao">
        <input type="text" name="cor" placeholder="Cor">
        <input type="text" name="ano" placeholder="Ano">
        <input type="text" name="comb" placeholder="Combustivel">
        <input type="text" name="cat" placeholder="Categoria">
        <input type="text" name="opcionais" placeholder="Opcionais">
        <input type="text" name="preco" placeholder="Preco">
        <input type="text" name="quilometragem" placeholder="Quilometragem">
        <input type="text" name="descricao" placeholder="Descricao">
        <input type="submit" value="Inserir">
    </form>

    <a href="index.html"> <button>Voltar</button> </a>

</body>

</html>

<?php
include("config.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Variáveis para receber informações do formulário
    $placa = mysqli_real_escape_string($conexao, $_GET["placa"]);
    $marca = mysqli_real_escape_string($conexao, $_GET["marca"]);
    $modelo = mysqli_real_escape_string($conexao, $_GET["modelo"]);
    $versao = mysqli_real_escape_string($conexao, $_GET["versao"]);
    $cor = mysqli_real_escape_string($conexao, $_GET["cor"]);
    $ano = mysqli_real_escape_string($conexao, $_GET["ano"]);
    $comb = mysqli_real_escape_string($conexao, $_GET["comb"]);
    $cat = mysqli_real_escape_string($conexao, $_GET["cat"]);
    $opcionais = mysqli_real_escape_string($conexao, $_GET["opcionais"]);
    $preco = mysqli_real_escape_string($conexao, $_GET["preco"]);
    $quilometragem = mysqli_real_escape_string($conexao, $_GET["quilometragem"]);
    $descricao = mysqli_real_escape_string($conexao, $_GET["descricao"]);

    // Comando para inserir no MySQL
    $comando_inserir = "INSERT INTO Carros (placa, marca, modelo, versao, cor, ano, comb, cat, opcionais, preco, quilometragem, descricao) VALUES ('$placa', '$marca', '$modelo', '$versao', '$cor', '$ano', '$comb', '$cat', '$opcionais', '$preco', '$quilometragem', '$descricao')";

    // Executa o comando
    $resultado = mysqli_query($conexao, $comando_inserir);

    // Verifica se a inserção foi concluída
    if ($resultado) {
        echo "Registro cadastrado com sucesso";
    } else {
        echo "Erro ao cadastrar o registro: " . mysqli_error($conexao);
    }
}
?>
