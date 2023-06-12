<?php
include_once('conexao.php');

if($_POST)
{
    $id = $_POST['txtidfilme'];

    try {
        
        $sql = $conn->prepare("
            delete from produto where id_produto=:id_produto
        ");

        $sql->execute(array(
            ':id_produto'=>$id
        ));

        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Excluidos com sucesso</p>';
        }

    } catch (PDOException $ex) {
        echo $ex->getMessage();
    }
}
else
{
    header('Location:frm_usuario.php'); 
}
?>

<hr>
<a href="_addfilme">Voltar</a>