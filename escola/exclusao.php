<?php 
    require_once('./conexao/conexao.php');
    // excluir aluno 
    if(isset($_GET["alunoID"])){
        $aid = $_GET["alunoID"];

        $exclusao = "DELETE FROM alunos WHERE alunoID = {$aid}";
        $consulta_exclusao = mysqli_query($conecta,$exclusao);

        if(!$consulta_exclusao){
            die("Falha na exclusão");
        }else{
            header("location:alunos_listagem.php");
        }
    }

   



?>