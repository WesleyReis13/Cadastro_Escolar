<?php 
    require_once('./conexao/conexao.php');
    // excluir aluno 
    if(isset($_GET["professorID"])){
        $pid = $_GET["professorID"];

        $exclusao = "DELETE FROM professores WHERE professorID = {$pid}";
        $consulta_exclusao = mysqli_query($conecta,$exclusao);

        if(!$consulta_exclusao){
            die("Falha na exclusão");
        }else{
            header("location:prof_listagem.php");
        }
    }

   



?>