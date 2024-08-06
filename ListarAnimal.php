<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Animais</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        include('includes/conexao.php');
        $sql = "SELECT ani.id, ani.nome, ani.especie, ani.raça, ani.dataN, ani.idade ani.castrado,
                cid .nome nomecidade
                FROM animal ani
                LEFT JOIN cidade cid on cid.id = ani.id_cidade";

        // Executa a consulta
        $result = mysqli_query($con, $sql);
    ?>

    <div class="container">
        <h1>Consulta de Animais</h1>
        <a href="CadastroAnimal.php">Cadastrar novo Animal</a><br>
        <a href="index.html">Voltar para a Tela Inicial</a>

        <table class="city-table">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Data de Nascimento</th>
                <th>Idade</th>
                <th>Situação</th>                
                <th>Cidade</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php //mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    $castrado = $row['Situação'] == 1 ? "Castrado" : "Não Castrado";
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nomeanimal']."</td>";
                    echo "<td>".$row['especie']."</td>";
                    echo "<td>".$row['raca']."</td>";
                    echo "<td>".$row['datadenascimento']."</td>";
                    echo "<td>".$row['idade']."</td>";
                    echo "<td>".$castrado."</td>";
                    echo "<td>".$row['nomecidade']."</td>";
                    echo "<td><a href='AlteraAnimal.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='DeletaAnimal.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>