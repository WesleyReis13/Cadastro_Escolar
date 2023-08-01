<?php 
    require_once('./conexao/conexao.php');
?>

<?php 
    // Consulta ao banco de dados
    $consulta = "SELECT * FROM professores";
    $consulta_prof = mysqli_query($conecta,$consulta);

    if(!$consulta_prof){
        die("Falha na busca ao banco de dados");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <mian>
    <p class="h1">Lista de Professores</p>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ProfessorID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Materia</th>
    </tr>
  </thead>
  <?php while ($linha = mysqli_fetch_assoc($consulta_prof)){?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $linha["professorID"]?></th>
      <td><?php echo $linha["nomecompleto"]?></td>
      <td><?php echo $linha["endereco"]?></td>
      <td><?php echo $linha["materia"]?></td>
      <td><a href="exclusao_prof.php?professorID=<?php echo $linha["professorID"]?>">Excluir</a></td>
    </tr>
  </tbody>
  <?php }?>
</table>
    </mian>
    
</body>
</html>