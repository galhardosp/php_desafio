<?php
include_once('conexao.php');
if($_POST)
{
    $nome = $_POST['txtname'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    $data = $_POST['txtdata'];
    $arquivo = $_POST['txtfile'];
    $img = '';
    $observacao = $_POST['txtObs'];
    $Status = $_POST['txtStatus'];
    $Status = $_POST['txtStatus'];


    try {
        $sql = $conn->prepare("
        insert into usuario
        (   

        nome_Usuario, 
        nascimento_Usuario, 
        usuario_Usuario, 
        senha_Usuario, 
        img_Usuario ,
        obs_Usuario ,
        status_Usuario 
        
        )values(

        :nome_Usuario ,
        :nascimento_Usuario ,
        :usuario_Usuario ,
        :senha_Usuario ,
        :img_Usuario ,
        :obs_Usuario ,
        :status_Usuario 
        
        )

        ");

        $sql->execute(array(
            ':nome_Usuario'=>$nome,
            ':nascimento_Usuario'=>$data,
            ':usuario_Usuario'=>$login, 
            ':senha_Usuario'=>$senha,
            ':img_Usuario'=>$img, 
            ':obs_Usuario'=>$observacao,
            ':status_Usuario'=>$Status   
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados cadastrados com sucesso</p>';
            echo '<p>ID Gerado: '.$conn->lastInsertID().'</p>';

        }
    } catch (PDOEexception $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:fmrUsuario.php');
}
?>
<hr>
<a href="fmrUsuario.php"> Voltar </a>



















