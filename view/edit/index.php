<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/edit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../style/modal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar Cad</title>
</head>

<body>
    <div class="dados">
        <div class="topo">
            <h1 class="titulo"><strong>CAD</strong> Alunos</h1>
            <h3>Editar dados</h3>
        </div>
        <div class="forms">
            <form action="" method="post">
                <div class="insert-dados">
                    <label for="nome"><i class="bi bi-person"></i></label>
                    <input type="text" id="nome" name="nome" value="">
                    <div class="icons">
                        <label for="nome"><i class="bi bi-pencil"></i></label>
                        <button type="reset"><i class="bi bi-x-circle"></i></button>
                    </div>
                </div>
                <div class="insert-dados">
                    <label for="email"><i class="bi bi-envelope"></i></label>
                    <input type="email" id="email" name="email" value="">
                    <div class="icons">
                        <label for="email"><i class="bi bi-pencil"></i></label>
                        <button type="reset"><i class="bi bi-x-circle"></i></button>
                    </div>
                </div>
                <div class="insert-dados">
                    <label for="cpf"><i class="bi bi-person-vcard"></i></label>
                    <input type="text" id="cpf" name="cpf" value="">
                    <div class="icons">
                        <label for="cpf"><i class="bi bi-pencil"></i></label>
                        <button type="reset"><i class="bi bi-x-circle"></i></button>
                    </div>
                </div>
                <div class="insert-dados">
                    <label for="rg"><i class="bi bi-person-lines-fill"></i></label>
                    <input type="text" id="rg" name="rg" value="">
                    <div class="icons">
                        <label for="rg"><i class="bi bi-pencil"></i></label>
                        <button type="reset"><i class="bi bi-x-circle"></i></button>
                    </div>
                </div>
                <div class="insert-dados">
                    <label for="endereco"><i class="bi bi-geo-alt"></i></label>
                    <input type="text" id="endereco" name="endereco" value="">
                    <div class="icons">
                        <label for="endereco"><i class="bi bi-pencil"></i></label>
                        <button type="reset"><i class="bi bi-x-circle"></i></button>
                    </div>
                </div>

                <div class="action-buttons">
                    <a href="../listagem/index.html"><button type="button" class="limpar">Voltar</button></a>
                    <button type="button" id="openModal">Salvar</button>
                </div>

                <!-- Start Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Atualizar dados?</h5>
                            </div>
                            <div class="modal-body">
                                <p>Após atualizados não há como recuperar os dados anteriores, tenha certeza se é o que deseja...</p>
                            </div>
                            <div class="modal-footer">
                                <button class="closeModal btn btn-secondary">Fechar</button>
                                <a href="../listagem/index.html" type="submit" class="btn btn-danger">Confirmar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->
            </form>
        </div>
    </div>
    
    

    <script src="../script/script.js"></script>
</body>

</html>