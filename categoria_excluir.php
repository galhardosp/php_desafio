<?php
include_once('conexao.php');

if($_POST)
{
    $id = $_POST['txtid'];

    try {
        $sql = $conn->prepare("
            delete from categoria where id_categoria=:id_categoria
        ");

        $sql->execute(array(
            ':id_categoria'=>$id
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
    header('Location:categoria_Add.php');
}

?>

<hr>
<a href="frm_usuario.php">Voltar</a>