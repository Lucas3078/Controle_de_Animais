<?php
    include('includes/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raça = $_POST['raça'];
    $dataN = $_POST['dataN'];
    $idade = $_POST['dataN'];
    $castrado = $_POST['castrado'];
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
    <h1>Alteração de Animal</h1>
    <?php
    echo "<p>Id: $id</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Especie: $especie</p>";
    echo "<p>Raça: $raça</p>";
    echo "<p>dataN: $dataN</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>Castrado: $castrado</p>";
    echo "<p>ID_pessoa: $id_pessoa</p>";
    $sql = "UPDATE animal SET
                nome = '$nome',
                especie = '$especie',
                raça = '$raça',
                dataN = '$dataN',
                idade = '$idade',
                castrado = '$castrado',
                id_pessoa = '$id_pessoa'
            WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados atualizados";
    else
        echo "Erro ao atualizar dados\n"
        .mysqli_error($con);
    ?>
    <p></p>
    <a href="ListarAnimal.php">Voltar</a>
</body>
</html>