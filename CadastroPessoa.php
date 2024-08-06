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
    <form action="CadastroClienteExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Pessoa</legend>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
        </div><p></p>

        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div><p></p>

        <div>
            <label for="endereco">Endereço: </label>
            <input type="text" name="endereco" id="endereco">
        </div>

        <div>
            <label for="bairro">Bairro: </label>
            <input type="text" name="bairro" id="bairro">
        </div>

        <div>
            <label for="cep">CEP: </label>
            <input type="number" name="cep" id="cep">
        </div>

        <div>
            <label for="cidade">Cidade</label>
            <select name="cidade" id="cidade">
                <?php
                include('includes/conexao.php');
                $sql = "SELECT * FROM cidade";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['id']."'>"
                         .$row['nome']."/".$row['estado']
                         ."</option>";
                }
                ?>
            </select>
        </div>
        
    <button type="submit">Cadastrar</button>
        
    </fieldset>
    </form>
    <a href="index.html">Voltar para a Tela Inicial</a>
</body>
</html>