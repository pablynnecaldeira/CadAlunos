<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="../style/stylelistagem.css">
    <link rel="stylesheet" href="../style/modal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="titulo">
        <a href="../../index.php">
            <h1 id="tirarnegrito"><strong>CAD</strong> Alunos</h1>
        </a>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('../../controller/ControleUsuario.php');

                $controller = new ControleUsuario();
                $res = $controller->listarUsuarios();
                
                while ($row = $res->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nome'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['cpf'] . "</td>";
                    echo "<td>" . $row['endereco'] . "</td>";
                    echo '<td class="acao">';
                    echo "<a href='../edit/index.php?id=" . $row['id_usuario'] . "'>";
                    echo '  <button class="action-btn">
                                <img src="../img/editar icon.svg" alt="logoEdicao">
                            </button>
                          </a>';
                    echo '<button class="action-btn" id="openModal" data-id=' . $row['id_usuario'] . '>
                               <img src="../img/excluir icon.svg" alt="logoEdicao">
                          </button>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
        <div class="voltar">
            <a href="../../index.php"><button class="action-voltar">Voltar</button></a>
        </div>
    </div>

    <!-- Start Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tem certeza que deseja excluir aluno?</h5>
                </div>
                <div class="modal-body">
                    <p>Após excluído não há como recuperar os dados, tenha certeza se é o que deseja...</p>
                </div>
                <div class="modal-footer">
                    <button class="closeModal btn btn-secondary">Fechar</button>
                    <button type="button" id="modalExcluir" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script src="../script/script.js"></script>
</body>

</html>