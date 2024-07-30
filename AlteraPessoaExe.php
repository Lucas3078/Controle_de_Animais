<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereço = $_POST['endereço'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $cidade = $_POST['cidade']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Alteração de Pessoa</h1>
    <?php
    echo "<p>Id: $id</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Endereço: $endereço</p>";
    echo "<p>Bairro: $bairro</p>";
    echo "<p>CEP: $cep</p>";
    echo "<p>Codigo Cidade: $cidade</p>";
    $sql = "UPDATE pessoa SET
                nome = '$nome',
                email = '$email',
                endereço = '$endereço',
                bairro = '$bairro',
                cep = '$cep',
                id_cidade = '$cidade'
            WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualizar dados\n"
        .mysqli_error($con);
    ?>
    <p></p>
    <a href="ListarPessoa.php">Voltar</a>
</body>
</html>