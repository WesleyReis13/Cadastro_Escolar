<?php 
// conexão com o banco de dados
require_once('./conexao/conexao.php');
?>
<?php 
    $consulta = "SELECT * FROM alunos";
    $consulta_conexao = mysqli_query($conecta,$consulta);

    if(!$consulta_conexao){
        die("Falha na consulta ao banco de dados");
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Listagem de Alunos</title>
</head>
<body>
    <main>
    <div class="text-center">
      <h1>Lista de Alunos</h1>
  </div>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">AlunoID</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <?php while ($linha = mysqli_fetch_assoc($consulta_conexao)){?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $linha["alunoID"]?></th>
      <td><?php echo $linha["nomecompleto"]?></td>
      <td><?php echo $linha["endereco"]?></td>
      <td><?php echo $linha["idade"]?></td>
      <td><a href="exclusao.php?alunoID=<?php echo $linha["alunoID"]?>">Excluir</a></td>
    </tr>
  </tbody>
  <?php }?>
</table>
    </main>
    
</body>

<?php 
// fechar banco de dados
mysqli_close($conecta);

?>
</html>