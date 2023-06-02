<?php
include_once('conexao.php');

if($_POST)
{
    $id = $_POST['txtID'];

    try {
        $sql = $conn->prepare("
            delete from usuario where id_Usuario=:id_Usuario
        ");

        $sql->execute(array(
            ':id_Usuario'=>$id
        ));
        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Excluidos com sucesso</p>';
        }    
    
    } catch(PDOEexception $ex) {
        echo $ex->getMessage();   
    }
}
else
{
    header('Location:frm_usuario.php');
}

?>

<hr>
<a href="frm_usuario.php">Voltar</a>