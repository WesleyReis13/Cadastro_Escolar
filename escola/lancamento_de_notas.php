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
    <title>Lançamento de Notas</title>
</head>
<body>
<form action="">
    <div  class="d-flex justify-content-center">
      <h1>Lançamento de Notas</h1>
    </div>
    <table class="table table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Aluno</th>
          <th scope="col">Nota</th>
        </tr>
      </thead>
      <tbody>
        <?php while($linha = mysqli_fetch_assoc($consulta_conexao)){ ?>
        <tr>
          <th scope="row">1</th>
          <td><?php echo $linha["nomecompleto"]?></td>
          <td><input type="number" min="0" max="10" step="0.1" name="notas[1]"></td>
          <?php } ?>
         
        </tr>
    
      </tbody>
    </table>
    <button type="submit">Enviar Notas</button>
</form>
</body>
</html>