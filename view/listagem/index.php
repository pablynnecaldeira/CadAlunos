<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="../style/stylelistagem.css">
    <link rel="stylesheet" href="../style/modal.css">
</head>

<body>
    <div class="titulo">
        <a href="../../index.php">
            <h1 id="tirarnegrito"><strong>CAD</strong> Alunos</h1>
        </a>
    </div>
    <div class="container-wrapper">
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
                    <tr>
                        <td>João Silva</td>
                        <td>joao.silva@example.com</td>
                        <td>123.456.789-00</td>
                        <td>Rua das Flores, 123</td>
                        <td class="acao">
                            <a href="../edit/index.php">
                                <button class="action-btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15 5.9997L18 8.9997M13 19.9997H21M5 15.9997L4 19.9997L8 18.9997L19.586 7.4137C19.9609 7.03864 20.1716 6.53003 20.1716 5.9997C20.1716 5.46937 19.9609 4.96075 19.586 4.5857L19.414 4.4137C19.0389 4.03876 18.5303 3.82812 18 3.82812C17.4697 3.82813 16.9611 4.03876 16.586 4.4137L5 15.9997Z"
                                            stroke="#005594" stroke-width="2.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </a>
                            <button class="action-btn" id="openModal">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 3.25C7.62342 3.25 3.25 7.6245 3.25 13C3.25 18.3755 7.62342 22.75 13 22.75C18.3766 22.75 22.75 18.3755 22.75 13C22.75 7.6245 18.3766 3.25 13 3.25ZM13 20.5833C8.81942 20.5833 5.41667 17.1817 5.41667 13C5.41667 8.81833 8.81942 5.41667 13 5.41667C17.1806 5.41667 20.5833 8.81833 20.5833 13C20.5833 17.1817 17.1806 20.5833 13 20.5833ZM13.7659 13L16.6324 10.1335C16.7334 10.0316 16.7901 9.894 16.7901 9.75054C16.7901 9.60709 16.7334 9.46944 16.6324 9.36758C16.5306 9.26656 16.3929 9.20988 16.2495 9.20988C16.106 9.20988 15.9684 9.26656 15.8665 9.36758L13 12.2341L10.1335 9.3665C10.0313 9.26783 9.89451 9.21323 9.75249 9.21447C9.61047 9.2157 9.47461 9.27267 9.37418 9.3731C9.27375 9.47353 9.21679 9.60939 9.21555 9.75141C9.21432 9.89343 9.26892 10.0303 9.36758 10.1324L12.2341 13L9.36758 15.8665C9.26587 15.9681 9.20868 16.1059 9.20857 16.2496C9.20847 16.3934 9.26547 16.5312 9.36704 16.633C9.46861 16.7347 9.60642 16.7919 9.75016 16.792C9.8939 16.7921 10.0318 16.7351 10.1335 16.6335L13 13.7659L15.8665 16.6324C15.9164 16.6842 15.9761 16.7256 16.0422 16.754C16.1082 16.7825 16.1792 16.7976 16.2512 16.7983C16.3231 16.799 16.3944 16.7854 16.461 16.7583C16.5276 16.7311 16.5882 16.691 16.6391 16.6402C16.69 16.5894 16.7303 16.529 16.7577 16.4625C16.785 16.3959 16.7988 16.3246 16.7983 16.2527C16.7978 16.1808 16.7829 16.1097 16.7546 16.0436C16.7263 15.9775 16.6852 15.9176 16.6335 15.8676L13.7659 13Z"
                                        fill="#005594" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="voltar">
                <a href="../../index.php"><button class="action-voltar">Voltar</button></a>
            </div>
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
                    <button class="btn-modal">Fechar</button>
                    <button type="button" class="btn-modal">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script src="../script/script.js"></script>
</body>

</html>