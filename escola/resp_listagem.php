<?php 
    require_once('./conexao/conexao.php');
?>
<?php 
    // Consulta ao banco de dados
    $consulta = "SELECT * FROM respondaveis";
    $consulta_teste = mysqli_query($conecta,$consulta);

    if(!$consulta_teste){
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
    <title>Document</title>
</head>
<body>
  <div class="d-flex justify-content-center">
    <h1>Lista de Responsaveis</h1>
  </div>
    <main>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ResponsavelID</th>
      <th scope="col">Nome Completo</th>
      <th scope="col">E-mail</th>
      <th scope="col">Telefone</th>
      <th scope="col">CPF</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Estado</th>
      <th scope="col">Endereço</th>
    </tr>
  </thead>
  <tbody>
    <?php while($linha = mysqli_fetch_assoc($consulta_teste)){ ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $linha["nomecompleto"]?></td>
      <td><?php echo $linha["email"]?></td>
      <td><?php echo $linha["telefone"]?></td>
      <td><?php echo $linha["cpf"]?></td>
      <td><?php echo $linha["datanascimento"]?></td>
      <td></td>
      <td><?php echo $linha["endereco"]?></td>
      <td><a href="exclusao_resp.php?responsavelID=<?php echo $linha["responsavelID"]?>">Excluir</a></td>
      
    </tr>
    <tr>
    <?php } ?>
     
  </tbody>
</table>
    </main>
</body>
</html>