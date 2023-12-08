<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir_registro</title>
</head>

<body>

    <?php
    include("config.php");

    $placa = $_GET["placa"];
    $marca = $_GET["marca"];
    $modelo = $_GET["modelo"];
    $versao = $_GET["versao"];
    $cor = $_GET["cor"];
    $comb = $_GET["comb"];
    $cat = $_GET["cat"];
    $opcionais = $_GET["opcionais"];
    $preco = $_GET["preco"];
    $quilometragem = $_GET["quilometragem"];
    $descricao = $_GET["descricao"];

    $comando_excluir = "DELETE FROM carros WHERE placa LIKE '" . $placa . "'";

    echo $comando_excluir . "<br />";

    mysqli_query($conexao, $comando_excluir);

    mysqli_close($conexao);
    ?>

</body>

</html>