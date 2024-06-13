<?php include('header.php'); ?>

<div class="container mt-4">
    <h2>Editar Usuário</h2>
    <?php
    // Configuração da conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_registration";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $row = array(); // Definindo $row antecipadamente

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $endereco = $_POST['endereco'];

        $sql = "UPDATE usuarios SET nome='$nome', cpf='$cpf', rg='$rg', endereco='$endereco' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            // Exibir alerta de confirmação
            echo "<script>alert('Usuário atualizado com sucesso!'); window.location.href = 'list_users.php';</script>";
            exit(); // Certifique-se de sair após o redirecionamento
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    } else {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM usuarios WHERE id=$id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            } else {
                echo "Nenhum usuário encontrado com o ID especificado.";
                exit();
            }
        } else {
            echo "ID do usuário não especificado.";
            exit();
        }
    }

    $conn->close();
    ?>

    <form method="POST" action="edit_user.php" onsubmit="return confirm('Tem certeza que deseja atualizar este usuário?');">
        <input type="hidden" name="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo isset($row['nome']) ? $row['nome'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo isset($row['cpf']) ? $row['cpf'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="rg">RG:</label>
            <input type="text" class="form-control" id="rg" name="rg" value="<?php echo isset($row['rg']) ? $row['rg'] : ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo isset($row['endereco']) ? $row['endereco'] : ''; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
