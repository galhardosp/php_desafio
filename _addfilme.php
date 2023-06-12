<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar fime</title>
</head>
<body style="background-color: black">
    <form action="" method="post" class="form-control" style="background-color: black; border: 30px solid black;">
        <h1 style="text-align: center; color: white">Cadastrar um filme:</h1>
        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-6"><input type="text" class="form-control" name="txtname" id="txtname"
                        placeholder="Nome do filme"></div>
                <div class="col-sm-3"><input type="text" class="form-control" name="txtid" id="txtid"
                        placeholder="ID categoria"></div>
                <div class="col-sm-3"><input type="text" class="form-control" name="txtidfilme" id="txtidfilme"
                        placeholder="ID do filme"></div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-12"><input type="file" class="form-control" name="txtfile" id="txtfile"></div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtObs" id="txtObs" rows="5" class="form-control"
                        placeholder="Observação do Filme"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-12">
                    <textarea name="txtSinopse" id="txtSinopse" rows="5" class="form-control"
                        placeholder="Sinopse"></textarea>
                </div>

                <div class="container">
                    <div class="row mt-3">
                        <div class="col-sm-2">
                            <select name="txtStatus" id="txtStatus" class="form-control">
                                <option value="">-- Selecione um Status --</option>
                                <option value="Ativo">Ativo</option>
                                <option value="Inativo">Inativo</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 text-end">
                        <button name="btoCadastrar" id="btoCadastrar" class="btn btn-success"
                            formaction="CadastrarFilme.php">Cadastrar</button>
                        <button name="btoAlterar" id="btoAlterar" class="btn btn-success"
                            formaction="Filme_alterar.php">Alterar</button>
                        <a href="_addfilme.php" name="btoLimpar" id="btoLimpar" class="btn btn-success">Limpar</a>
                        <button name="btoExcluir" id="btoExcluir" class="btn btn-success"
                            formaction="excluir_filme.php">Excluir</button>
                        <button name="btoSair" id="btoSair" class="btn btn-dark">Sair</button>

                    </div>
    </form>
    <script src="bs/bootstrap.js"></script>
</body>

</html>