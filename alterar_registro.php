<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alterar_registro</title>
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

    $comando_editar = "UPDATE carros SET placa='$placa', marca='$marca', modelo='$modelo', versao='$versao', cor='$cor', comb='$comb', cat='$cat', opcionais='$opcionais', preco='$preco', quilometragem='$quilometragem', descricao='$descricao' WHERE placa='$placa'";

    echo $comando_editar . "<br />";

    mysqli_query($conexao, $comando_editar);

    mysqli_close($conexao);
    ?>


</body>

</html>