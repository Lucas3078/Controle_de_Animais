<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Pessoa</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        include('includes/conexao.php');

        // Ajuste os nomes das colunas e tabelas conforme a estrutura real
        $sql = "SELECT pes.id_pessoa AS id, pes.nome AS nomepessoa, pes.email, pes.endereco, pes.bairro, pes.cep,
                cid.nome AS nomecidade
                FROM pessoa pes
                LEFT JOIN cidade cid ON cid.id = pes.id_cidade";

        // Executa a consulta
        $result = mysqli_query($con, $sql);

        // Verifica se a consulta falhou
        if (!$result) {
            die("Erro na consulta: " . mysqli_error($con));
        }
    ?>

    <div class="container">
        <h1>Consulta de Pessoa</h1>
        <a href="CadastroPessoa.php">Cadastrar nova Pessoa</a><br>
        <a href="index.html">Voltar para a Tela Inicial</a>

        <table class="city-table">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>                
                <th>Endereço</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php // mysqli_fetch_array lê uma linha por vez
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['nomepessoa']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['bairro']."</td>";
                    echo "<td>".$row['cep']."</td>";
                    echo "<td>".$row['nomecidade']."</td>";
                    echo "<td><a href='AlteraPessoa.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href='DeletaPessoa.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>
