<?php
include_once('conexao.php');


if($_POST)
{
    $id = $_POST['txtid'];
    $nome = $_POST['txtname'];
    $observacao = $_POST['txtObs'];
    $Status = $_POST['txtStatus'];

    try {
        $sql = $conn->prepare("
            update categoria set
            
            nome_categoria=:nome_categoria, 
            obs_categoria=:obs_categoria, 
            status_categoria=:status_categoria
            where id_categoria=:id_categoria
            
            ");    

        $sql->execute(array(
            ':id_categoria'=>$id,
            ':nome_categoria'=>$nome,
            ':obs_categoria'=>$observacao,
            ':status_categoria'=>$Status
 
        ));
        
        if($sql->rowCount()>=1)
        {
            echo '<p>Dados Alterados com sucesso</p>';
        }
    
    
        } catch (PDOException $ex) {
               
            echo $ex->getMessage();
        }
        }
        else
            {
            header('Location:categoria_Add.php');
            }
        ?>

        <hr>
        <a href="_addfilme.php">Voltar</a>