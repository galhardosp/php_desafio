<?php
include_once('conexao.php');


if($_POST)
{
    $nome = $_POST['txtname'];
    $foto_produto = $_POST['txtfile'];
    $observacao = $_POST['txtObs'];
    $Status = $_POST['txtStatus'];
    $idcategoria = $_POST['txtid'];
    $sinopse = $_POST['txtSinopse'];
    $nota = $_POST['txtStatus'];
    $IDFilme = $_POST['txtidfilme'];


    try {
        $sql = $conn->prepare("
            update produto set
            nome_produto=:nome_produto, 
            foto_produto=:foto_produto, 
            id_categoria_produto=:id_categoria_produto, 
            sinopse_produto=:sinopse_produto, 
            nota_produto=:nota_produto,
            Obs_produto=:Obs_produto ,
            status_produto=:status_produto
            where id_produto=:id_produto
        ");    

        $sql->execute(array(
            ':nome_produto'=>$nome,
            ':foto_produto'=>$foto_produto,
            ':id_categoria_produto'=>$idcategoria, 
            ':sinopse_produto'=>$sinopse,
            ':nota_produto'=>$nota, 
            ':Obs_produto'=>$observacao,
            ':status_produto'=>$Status, 
            ':id_produto'=>$IDFilme  
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
            header('Location:_addfilme.php');
            }
        ?>

        <hr>
        <a href="_addfilme.php">Voltar</a>