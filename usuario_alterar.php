<?php
include_once('conexao.php');


if($_POST)
{
    $id = $_POST['txtID'];
    $nome = $_POST['txtname'];
    $login = $_POST['txtlogin'];
    $senha = $_POST['txtsenha'];
    $data = $_POST['txtdata'];
    $arquivo = $_POST['txtfile'];
    $img = '';
    $observacao = $_POST['txtObs'];
    $Status = $_POST['txtStatus'];


    try {
        $sql = $conn->prepare("
            update Usuario set
            
            nome_Usuario=:nome_Usuario,
            nascimento_Usuario=:nascimento_Usuario, 
            usuario_Usuario=:usuario_Usuario,
            senha_Usuario=:senha_Usuario ,
            img_Usuario=:img_Usuario,
            obs_Usuario=:obs_Usuario,
            status_Usuario=:status_Usuario
            where id_Usuario=:id_Usuario 
        ");    

        $sql->execute(array(
            ':id_Usuario'=>$id,
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
            echo '<p>Dados Alterados com sucesso</p>';
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
        <a href="fmrUsuario.php">Voltar</a>