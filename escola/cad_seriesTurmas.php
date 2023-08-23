<?php 
 require_once('./conexao/conexao.php');
?>
<?php 
    // Inserir no banco de dados
    if(isset($_POST["serie"])){
      $serie  =            $_POST["serie"];
      $turma  =            $_POST["turma"];
      $serie_turma =       $_POST["serie_turma"];
      $disciplina  =       $_POST["disciplina"];
      $professor   =       $_POST["professor"];
      $turma_disciplina =  $_POST["turma_disciplina"];
      if(!empty($serie) && !empty($turma) && !empty($serie_turma) && !empty($disciplina) && !empty($professor) && !empty($turma_disciplina)){
         $inserir = "INSERT INTO seriesturmas(serie,turma,serie_turma,disciplina,professor,turma_disciplina) VALUES ('$serie','$turma','$serie_turma','$disciplina','$professor','$turma_disciplina')";
         $inserir_dados = mysqli_query($conecta,$inserir);

         if(!$inserir_dados){
          die("Erro ao Cadastrar");
         }
      }

    }

    // Consulta no banco de dados

    $consulta = "SELECT * FROM series";
    $consulta_series = mysqli_query($conecta,$consulta);

    if(!$consulta_series){
      die("erro na consulta ao banco de dados");
    }

    


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Cadastro de Séries, Turmas e Disciplinas</title>
</head>
<body>
<form action="cad_seriesTurmas.php" method="post">
    <h2>Cadastro de Série</h2>
  <div class="form-group">
    <label for="serie">Série:</label>
    <input type="text" class="form-control" id="serie" name="serie" required>
  </div>
  <div class="form-group">
    <h2>Cadastro de Turma</h2>
    <label for="turma">Turma:</label>
    <input type="text" name="turma" id="turma" required>
    <br>
    <label for="serie_turma" name="serie_turma" >Série:</label>
    <select class="form-control" id="serie_turma" name="serie_turma" required>
      <?php while($linha = mysqli_fetch_assoc($consulta_series)){?>
      <option value="<?php echo $linha["serieID"]?>"><?php echo $linha["serie"]?></option>
      <?php }?>
      
      
      <!-- Adicione as opções para outras séries -->
    </select>
  </div>
  <div class="form-group">
    <h2>Cadastro de Disciplina</h2>
    <label for="disciplina">Disciplina:</label>
    <input type="text" id="disciplina" name="disciplina" required>
    <br>
    <label for="professor">Professor:</label>
        <input type="text" id="professor" name="professor" required>
        <br>
        <label for="turma_disciplina">Turma:</label>
        <select id="turma_disciplina" name="turma_disciplina" required>
            <option value="1">1ª Série - Turma A</option>
            <option value="2">1ª Série - Turma B</option>
            <!-- Adicione as opções para outras turmas -->
        </select>
        <br>

        <input type="submit" value="Cadastrar">
    
  </div>
  
  </div>
</form>
</body>
</html>