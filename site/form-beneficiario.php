<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Corrente do Bem</title>
</head>

<style>
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
    }

    body {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
    }

    .card-signin {
        border: 0;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        border-radius: 5rem;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group input {
        height: auto;
        border-radius: 2rem;
    }

    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 12px;
        color: #777;
    }

    .btn-google {
        color: white;
        background-color: #ea4335;
    }

    .btn-facebook {
        color: white;
        background-color: #3b5998;
    }

    /* Fallback for Edge
-------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }

    /* Fallback for IE
-------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }

        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
</style>

<body>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center">Formulário de requisição</h5>
                            <form class="form-signin" action="controller/beneficiario.php?op=cadastro" method="POST">

                                <div class="form-label-group">
                                    <input name="nome" type="text" id="nome" class="form-control" placeholder="Nome do completo" required autofocus>
                                    <label for="nome">Nome completo</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="datanascimento" type="text" id="datanascimento" class="form-control" placeholder="Data de nascimento" required>
                                    <label for="datanascimento">Data de nascimento</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="cpf" type="text" id="cpf" class="form-control" placeholder="CPF" required>
                                    <label for="cpf">CPF</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="nomemae" type="text" id="nomemae" class="form-control" placeholder="CPF" required>
                                    <label for="nomemae">Nome da mãe</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="telefone" type="text" id="telefone" class="form-control" placeholder="Telefone" required>
                                    <label for="telefone">Telefone</label>
                                </div>

                                <div class="form-label-group">
                                    <input name="endereco" type="text" id="endereco" class="form-control" placeholder="Endereço" required>
                                    <label for="endereco">Endereço</label>
                                </div>

                                <hr class="my-4">
                                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit"></i>Confirmar</button>

                                <a href="index.php" class="btn btn-lg btn-danger btn-block text-uppercase"><i class="fab fa-google mr-2"></i>Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</body>

</html>