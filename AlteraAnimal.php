<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM animal WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
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
    <form action="AlteraAnimalExe.php" method="post">
    <fieldset>
        <legend>Cadastro de Animal</legend>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome"
                    value="<?php echo $row['nome']?>">
        </div>

        <div>
            <label for="especie">Espécie: </label>
            <input type="text" name="especie" id="especia"
                    value="<?php echo $row['especie']?>">
        </div>

        <div>
            <label for="raça">Raça: </label>
            <input type="text" name="raça" id="raça"
                    value="<?php echo $row['raça']?>">
        </div>

        <div>
            <label for="dataN">Data de Nascimento: </label>
            <input type="date" name="dataN" id="dataN"
                    value="<?php echo $row['dataN']?>">
        </div>

        <div>
            <label for="idade">Idade: </label>
            <input type="number" name="idade" id="idade"
                    value="<?php echo $row['idade']?>">
        </div>

        <h3>Situação</h3>
        <div id="castrado">
            <label for="operacao">Castrado</label>
            <input type="hidden" name="castrado" id="castrado" value="0">
            <input type="checkbox" name="castrado" id="castrado" value="1">
        </div><p></p>

        <div>
            <label for="id_pessoa">ID do Proprietário</label>
            <select name="id_pessoa" id="id_pessoa">
                <?php
                include('includes/conexao.php');
                $sql = "SELECT * FROM id_pessoa";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
                         .$row['id_pessoa']."/".$row['nome']
                         ."</option>";
                }
                ?>
            </select>
        </div>

        <div>
            <button type="submit">Alterar</button>
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
        </div>
    </fieldset>
    </form>
    <a href="ListarAnimal.php">Voltar</a>
</body>
</html>