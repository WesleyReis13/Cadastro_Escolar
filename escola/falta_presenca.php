<?php 
    require_once("./conexao/conexao.php");
    // consulta ao banco de dados
     $consulta = "SELECT * FROM alunos";
     $consulta_conexao = mysqli_query($conecta,$consulta);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Diário de Classes</title>
</head>
<body>
    <h1>Diario de Classes</h1>
    <form action="">
        <table class="table table-sm">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Aluno</th>
            <th scope="col">Presença</th>
            <th scope="col">Falta</th>
            </tr>
        </thead>
        <tbody>
            <?php while($linha = mysqli_fetch_assoc($consulta_conexao)){?>
            <tr>
            <th scope="row">1</th>
            <td><?php echo $linha["nomecompleto"]?></td>
            <td><input type="checkbox" name="registro[1]" value="Presença"></td>
            <td><input type="checkbox" name="registro[1]" value="Falta"></td>
            <?php }?>
            </tr>
             <!-- Adicione mais linhas para outros alunos -->
        </tbody>
        </table>
        <input type="submit" name="submit" value="Enviar">
    </form>

</body>
</html>