<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/cadastro.css">
    <link rel="stylesheet" href="../style/modal.css">
</head>

<body>
    <div class="container-body">
        <div class="container">
            <div class="container-left">
                <div class="logo">
                    <a href="../../index.php"><span><strong>CAD</strong> Alunos</span></a>
                </div>
                <div class="sistema_container-left">
                    <span>Sistema de cadastro de usuários</span>
                </div>
            </div>
            <div class="container-right">
                <h1>Formulário de Cadastro</h1>
                <form class="formRow" id="formCadastro" action="../../controller/index.php?acao=cadastrar"
                    method="post">
                    <div class="form-group">
                        <img class="svg" src="../img/user icon.svg" alt="user icon">
                        <input type="text" id="nome" name="nome" required placeholder="Digite seu nome completo">
                    </div>
                    <div class="form-group">
                        <img class="svg" src="../img/email icon.svg" alt="email icon">
                        <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <img class="svg" src="../img/cpf id icon.svg" alt="cpf icon">
                        <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF">
                    </div>
                    <div class="form-group">
                        <img class="svg" src="../img/rg icon.svg" alt="rg icon">
                        <input type="text" id="rg" name="rg" required placeholder="Digite seu RG">
                    </div>
                    <div class="form-group">
                        <img class="svg" src="../img/endereço icon.svg" alt="endereço icon">
                        <input type="text" id="endereco" name="endereco" required placeholder="Digite seu endereço">
                    </div>
                    <div class="form-group form-group-senha">
                        <div>
                            <svg width="25" height="27" viewBox="0 0 20 27" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 20.25C9.33696 20.25 8.70107 19.9866 8.23223 19.5178C7.76339 19.0489 7.5 18.413 7.5 17.75C7.5 16.3625 8.6125 15.25 10 15.25C10.663 15.25 11.2989 15.5134 11.7678 15.9822C12.2366 16.4511 12.5 17.087 12.5 17.75C12.5 18.413 12.2366 19.0489 11.7678 19.5178C11.2989 19.9866 10.663 20.25 10 20.25ZM17.5 24V11.5H2.5V24H17.5ZM17.5 9C18.163 9 18.7989 9.26339 19.2678 9.73223C19.7366 10.2011 20 10.837 20 11.5V24C20 24.663 19.7366 25.2989 19.2678 25.7678C18.7989 26.2366 18.163 26.5 17.5 26.5H2.5C1.83696 26.5 1.20107 26.2366 0.732233 25.7678C0.263392 25.2989 0 24.663 0 24V11.5C0 10.1125 1.1125 9 2.5 9H3.75V6.5C3.75 4.8424 4.40848 3.25269 5.58058 2.08058C6.75269 0.90848 8.3424 0.25 10 0.25C10.8208 0.25 11.6335 0.411661 12.3918 0.725753C13.1501 1.03984 13.8391 1.50022 14.4194 2.08058C14.9998 2.66095 15.4602 3.34994 15.7742 4.10823C16.0883 4.86651 16.25 5.67924 16.25 6.5V9H17.5ZM10 2.75C9.00544 2.75 8.05161 3.14509 7.34835 3.84835C6.64509 4.55161 6.25 5.50544 6.25 6.5V9H13.75V6.5C13.75 5.50544 13.3549 4.55161 12.6517 3.84835C11.9484 3.14509 10.9946 2.75 10 2.75Z"
                                    fill="#F78B1F" />
                            </svg>
                        </div>
                        <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
                    </div>
                    <button class="btn-cadastro" id="openModal" type="button">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Start Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span>Cadastro</span> criado com sucesso!</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" id="modalCadastro" class="btn-modal">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script src="../script/script.js"></script>
</body>

</html>