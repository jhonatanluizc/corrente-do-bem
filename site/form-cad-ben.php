<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/form-cad-ben.css">
    </head>
    <body>

        <div class="sidenav">
            <a href="index.php">Homepage</a>
            <hr>
            <a href="form-cad-doa.php">Desejar Doar?</a>
            <hr>
            <a href="form-cad-ben.php">Precisa de ajuda?</a>
            <hr>
            <a href="#clients">Feedback</a>
            <hr>
            <a href="#contact">Sobre Nós</a>
            <hr>
        </div>

        <div class="formbox">
            <form action="controller/beneficiario.php?op=cadastro" method="POST">
                <div class="nomeform"><label>Nome Completo</lable><input name="nome"></input> </div>
                <div class="datanascform"><label>Data de Nascimento</lable><input name="datanascimento"></input> </div>
                <div class="cpfform"><label>CPF</lable><input name="cpf"></input> </div>
                <div class="nomemaeform"><label>Nome da Mãe</lable><input name="nomemae"></input> </div>
                <div class="telefoneform"><label>Telefone</lable><input name="telefone"></input> </div>
                <div class="enderecoform"><label>Endereço</lable><input name="endereco"></input> </div>
                <br>
                <input class="botaocad" type="submit" value="Cadastrar">
            </form>
        </div>
    </body>
</html>
