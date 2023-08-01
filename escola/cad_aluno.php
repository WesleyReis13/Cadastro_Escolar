<?php 
    require_once('./conexao/conexao.php');
?>
<?php 
   // Inserir no banco de dados
   if(isset($_POST["nomecompleto"])){
        $nome      =        $_POST["nomecompleto"];
        $endereco  =        $_POST["endereco"];
        $idade     =        $_POST["idade"];
        $aid       =        $_POST["alunoID"];
        if (!empty($nome) && !empty($endereco) && !empty($idade)){
        $inserir = "INSERT INTO alunos(nomecompleto,endereco,idade) VALUES ('$nome','$endereco',$idade)";
        $inserir_dados = mysqli_query($conecta,$inserir);

        if(!$inserir_dados){
            die("Erro ao cadastrar dados");
        }else{
            header("Location:alunos_listagem.php");
        }
    }else{
        echo "Preencha os dados";
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
    <div class="container">
            <form action="cad_aluno.php" method="post">
                <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomecompleto">Nome Completo</label>
                    <input type="text" class="form-control" name="nomecompleto" placeholder="Nome completo">
                </div>
                <div class="form-group col-md-6">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" placeholder="Rua A, Numero 0">
                </div>
                <div class="form-group col-md-6"> <!-- Inclua a div corretamente aqui -->
                    <label for="idade">Idade</label>
                    <input type="number" class="form-control" name="idade">
                </div>
                </div>
                <input type="hidden" name="alunoID">
                <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
    </main>
</body>
</html>