<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <h2>Cadastro do usuário</h2>
        </div>
        <form action="" method="post" class="form-control">
            <div class="row mt-3" mt-2>

                <div class="col-sm-4"><input type="number" class="form-control" min="0" name="txtID" id="txtID" 
                        placeholder="ID do Usuário"></div>
                <div class="col-sm-4"><button name="btopesquisar" id="btopesquisar"
                        formaction="fmrUsuario.php">&#128269;</button></div>
                <div class="col-sm-4"><input type="text" class="form-control" name="txtdata" id="txtdata" placeholder="Data de cadastro"></div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12"><input type="text" class="form-control" name="txtname" id="txtname"
                        placeholder="Nome"></div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-4"><input type="text" class="form-control" name="txtlogin" id="txtlogin"
                        placeholder="login"></div>
                <div class="col-sm-4"><input type="password" class="form-control" name="txtsenha" id="txtsenha"
                        placeholder="senha"></div>   
                <div class="col-sm-4"><input type="text" class="form-control" name="txtdata" id="txtdata"  placeholder="Data de nascimento"></div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-8"><input type="file" class="form-control" name="txtfile" id="txtfile"
                        placeholder="escolha o arquivo"></div>
                <div class="col-sm-4">
                    <select name="txtStatus" id="txtStatus" class="form-control">
                        <option value="">-- Selecione um Status --</option>
                        <option value="Ativo">Ativo</option>
                        <option value="Inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" rows="5" class="form-control"
                        placeholder="Observação do Usuário"></textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 text-end">
                    <button name="btoCadastrar" id="btoCadastrar" class="btn btn-success"
                        formaction="usuario_cadastrar.php">Cadastrar</button>
                    <button name="btoAlterar" id="btoAlterar" class="btn btn-success"
                        formaction="usuario_alterar.php">Alterar</button>
                    <a href="fmrUsuario.php" name="btoLimpar" id="btoLimpar" class="btn btn-success">Limpar</a>
                    <button name="btoExcluir" id="btoExcluir" class="btn btn-success"
                        formaction="usuario_excluir.php">Excluir</button>
                    <button name="btoSair" id="btoSair" class="btn btn-dark">Sair</button>

                </div>
            </div>
        </form>
    </div>








    <script src="bs/bootstrap.js"></script>
</body>

</html>