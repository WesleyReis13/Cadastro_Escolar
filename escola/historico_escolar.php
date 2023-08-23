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
    <title>Emissão de Histórico Escolar</title>
</head>
<body>
<div class="form-group">
        <div class="container d-flex justify-content-center mt-5">
            <form action="historico_escolar.php" method="post">
                <label for="aluno">Aluno:</label>
                <select class="form-control" id="aluno" name="aluno">
                   <?php while($linha = mysqli_fetch_assoc($consulta_conexao)){ ?>
                  <option value="<?php echo $linha["alunoID"]?>"><?php echo $linha["nomecompleto"]?></option>
                  <?php }?>
                </select>
                <br>
                <button type="submit" name="gerarHistorico">Gerar Histórico</button>
            </form>
        </div>
</body>
</html>