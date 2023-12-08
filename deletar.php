<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form name="listagem" method="post" action="#">
        <p>Selecione uma placa:</p>
        <select name="lista"><br /><br />
            <option value="" data-default disabled selected></option>

            <?php
            include('config.php');

            $resultado = mysqli_query($conexao, "select * from carros");
            while ($linha = mysqli_fetch_array($resultado)) {
                ?>
                <option value="<?php echo $linha['placa'] ?>">
                    <?php echo $linha['placa'] ?>
                </option>
            <?php
            }
            ?>
        </select>

        <button type="submit">Buscar</button> <br><br>
    </form>

</body>
</html>

<?php
        //condição que verifica se houve alguma submissão do formulário
        if (!$_POST) {
            echo "Nenhum registro selecionado";
        }else{
            $comando_select = "select * from carros where placa like '".$_POST['lista']."'"; 
            $resultado = mysqli_query($conexao, $comando_select);

            while ($linha = mysqli_fetch_array ($resultado)) {   
            ?>
                <form action="excluir_registro.php" method="get">
                    <p>Placa</p>
                    <input type="text" name="placa" value = "<?php echo $linha['placa'] ?>">
                    <p>Marca:</p>
                    <input type="text" name="marca" value = "<?php echo $linha['marca'] ?>" >
                    <br />
                    <p>Modelo:</p>
                    <input type="text" name="modelo" value="<?php echo $linha['modelo'] ?>" >
                    <br />
                    <p>Versao:</p>
                    <input type="text" name="versao" value="<?php echo $linha['versao'] ?>" >
                    <br />
                    <p>Cor:</p>
                    <br />
                    <input type="text" name="cor" value="<?php echo $linha['cor'] ?>" >
                    <br />
                    <p>Ano:</p>
                    <input type="text" name="ano" value="<?php echo $linha['ano'] ?>" >
                    <br />
                    <p>Combustível:</p>
                    <input type="text" name="comb" value="<?php echo $linha['comb'] ?>" >
                    <br />
                    <p>Categoria:</p>
                    <input type="text" name="cat" value="<?php echo $linha['cat'] ?>" >
                    <br />
                    <p>Opcionais:</p>
                    <input type="text" name="opcionais" value="<?php echo $linha['opcionais'] ?>" >
                    <br />
                    <p>Preço:</p>
                    <input type="text" name="preco" value="<?php echo $linha['preco'] ?>" >
                    <br />
                    <p>Quilometragem:</p>
                    <input type="text" name="quilometragem" value="<?php echo $linha['quilometragem'] ?>" >
                    <br />
                    <p>Descrição:</p>
                    <input type="text" name="descricao" value="<?php echo $linha['descricao'] ?>" >
                    <br />
                    <a href="index.php">
                    <button type="submit" name="botao" > Voltar</button> <br><br>
                    </a>

                    <button type="submit" name="excluir_registro" > Excluir</button> <br><br>
                 </form>
            <?php
            }
        } 
        mysqli_close($conexao); 
    ?>