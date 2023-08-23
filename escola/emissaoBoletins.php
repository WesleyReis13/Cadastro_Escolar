<?php 
    require_once("./conexao/conexao.php");
    // consulta ao banco de dados
     $consulta = "SELECT * FROM alunos";
     $consulta_conexao = mysqli_query($conecta,$consulta);
    // Consulta na Tabela series
    $consulta_series = "SELECT * FROM series";
    $conexao = mysqli_query($conecta,$consulta_series); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Emissão de Boletins</title>
</head>
<body>
<form action="emissaoBoletins.php" method="post">
    <div class="form-group">
        <label for="aluno">Aluno:</label>
        <select class="form-control" id="aluno" name="aluno">
          <?php while($linha = mysqli_fetch_assoc($consulta_conexao)){ ?>
            <option value="<?php echo $linha["alunoID"]?>"><?php echo $linha["nomecompleto"]?></option>
         <?php }?>
           
        </select>
        <br>
    <div class="form-group">
        <label for="serie">Série:</label>
        <select class="form-control" id="serie" name="serie">
            <?php while($linha2 = mysqli_fetch_assoc($conexao)){ ?>
          <option value="<?php echo $linha2["serieID"]?>"><?php echo $linha2["serie"]?></option>
          <?php }?>
        </select>
        <button type="submit" name="gerarBoletim">Gerar Boletim</button>
</form>
</body>
</html>