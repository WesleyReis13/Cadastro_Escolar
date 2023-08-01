<?php require_once('./conexao/conexao.php')?>
<?php 
// inserir no banco de dados
  if(isset($_POST["nomecompleto"])){
    $nome  =      $_POST["nomecompleto"];
    $email =      $_POST["email"];
    $telefone =   $_POST["telefone"];
    $cpf =        $_POST["cpf"];
    $data =       $_POST["nascimento"];
    $estado =     $_POST["estado"];
    $endereco =   $_POST["endereco"];

    if (!empty($nome) && !empty($email) && !empty($telefone) && !empty($cpf) && !empty($data) &&!empty($estado) &&!empty($endereco) ){
      
      $inserir = "INSERT INTO respondaveis(nomecompleto,email,telefone,cpf,datanascimento,estado,endereco) VALUES('{$nome}','{$email}','{$telefone}','{$cpf}','{$data}','{$estado}','{$endereco}')";
      $res_inserir = mysqli_query($conecta,$inserir);

      if(!$res_inserir){
        die("Falha ao inserir");
      }else{
        header("location:resp_listagem.php");
      }
      }else{
        echo "<p>Por favor preencha os campos</p>";
      }
  }
  



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
    <form action="cad_responsaveis.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nomecompleto">Nome Completo</label>
      <input type="text" class="form-control" name="nomecompleto" placeholder="Nome Completo">
    </div>
    <div class="form-group col-md-6">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="E-mail">
    </div>
  </div>
  <div class="form-group">
    <label for="telefone">Telefone</label>
    <input type="number" class="form-control" name="telefone" placeholder="(XX)X-XXXX-XXXX">
  </div>
  <div class="form-group">
    <label for="cpf">CPF</label>
    <input type="number" class="form-control" name="cpf" placeholder="000.000.000-00">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nascimento">Data de Nascimento</label>
      <input type="date" class="form-control" name="nascimento">
    </div>
    <div class="form-group col-md-4">
      <label for="estado">Estado</label>
      <select name="estado" class="form-control">
        <option selected>Minas Gerais</option>
        
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco">
    </div>
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </main>
</body>
</html>