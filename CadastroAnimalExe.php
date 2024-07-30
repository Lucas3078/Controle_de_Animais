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
    <?php
        include('includes/conexao.php');
        $nome = $_POST['nome'];
        $especie = $_POST['especie'];
        $raça = $_POST['raça'];
        $dataN = $_POST['dataN'];
        $idade = $_POST['idade'];
        $castrado = $_POST['castrado'];
        $id_pessoa = $_POST['id_pessoa'];
        echo "<h1>Dados do animal</h1>";
        echo "Nome: $nome<br>";
        echo "Espécie: $especie<br>";
        echo "Raça: $raça<br>";
        echo "Data de Nascimento: $dataN<br>";
        echo "idade: $idade<br>";
        echo "Situação: $castrado<br>";
        echo "ID da Pessoa: $id_pessoa<br>";
        $sql = "INSERT INTO animal(nome, especie, raça, dataN, idade, castrado, id_pessoa, id_cidade)";
        $sql .= " VALUES('".$nome."','".$especie."','".$raça."',".$dataN.",".$idade.",".$id_pessoa.",".$cidade.")";
        echo $sql;
        //executa comando no banco de dados
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>
    <h3><a href="ListarAnimal.php">Ver na Tabela</a></h3>
    <h3><a href="CadastroAnimal.php">Voltar</a></h3>
</body>
</html>