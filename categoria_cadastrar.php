<?php
include_once('conexao.php');
if($_POST)
{
    $nome = $_POST['txtname'];
    $observacao = $_POST['txtObs'];
    $Status = $_POST['txtStatus'];
    try {
        $sql = $conn->prepare("
        insert into categoria
        (   

            nome_categoria, 
            obs_categoria, 
            status_categoria

        )values(
            :nome_categoria, 
            :obs_categoria, 
            :status_categoria
    
        )

        ");

        $sql->execute(array(
            ':nome_produto'=>$nome,
            ':Obs_produto'=>$observacao,
            ':status_produto'=>$Status, 
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
    header('Location:categoria_Add.php');
}
?>
<hr>
<a href="fmrUsuario.php"> Voltar </a>