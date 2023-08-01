<?php 
    require_once('./conexao/conexao.php');
    // excluir aluno 
    if(isset($_GET["responsavelID"])){
        $rid = $_GET["responsavelID"];

        $exclusao = "DELETE FROM respondaveis WHERE responsavelID = {$rid}";
        $consulta_exclusao = mysqli_query($conecta,$exclusao);

        if(!$consulta_exclusao){
            die("Falha na exclusão");
        }else{
            header("location:resp_listagem.php");
        }
    }

   



?>