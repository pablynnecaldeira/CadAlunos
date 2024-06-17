<!DOCTYPE html>
<html lang="pt-br">

</html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../View/style/login.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">

        <div class="logo">
            <span><strong>CAD</strong> Alunos</span>
        </div>

        <div class="bkgWrapper">
            <div class="bkg1">
                <img src="../View/img/bkg1.png" />
            </div>
            <div class="bkg2">
                <img src="../View/img/bkg2.png" />
            </div>
        </div>

        <div class="loginWrapper">
            <form method="POST" action="../controller/ControleUsuario.php">
                <h1>Cadastre-se</h1>

                <div class="formRow">
                    <svg width="25" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.75 5H6.25C5.25544 5 4.30161 5.39509 3.59835 6.09835C2.89509 6.80161 2.5 7.75544 2.5 8.75V21.25C2.5 22.2446 2.89509 23.1984 3.59835 23.9017C4.30161 24.6049 5.25544 25 6.25 25H23.75C24.7446 25 25.6984 24.6049 26.4017 23.9017C27.1049 23.1984 27.5 22.2446 27.5 21.25V8.75C27.5 7.75544 27.1049 6.80161 26.4017 6.09835C25.6984 5.39509 24.7446 5 23.75 5ZM22.9125 7.5L15 13.4375L7.0875 7.5H22.9125ZM23.75 22.5H6.25C5.91848 22.5 5.60054 22.3683 5.36612 22.1339C5.1317 21.8995 5 21.5815 5 21.25V9.0625L14.25 16C14.4664 16.1623 14.7295 16.25 15 16.25C15.2705 16.25 15.5336 16.1623 15.75 16L25 9.0625V21.25C25 21.5815 24.8683 21.8995 24.6339 22.1339C24.3995 22.3683 24.0815 22.5 23.75 22.5Z" fill="#F78B1F" />
                    </svg>

                    <input type="text" placeholder="Digite seu e-mail" name="email" required>
                </div>

                <div class="formRow">
                    <svg width="25" height="27" viewBox="0 0 20 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 20.25C9.33696 20.25 8.70107 19.9866 8.23223 19.5178C7.76339 19.0489 7.5 18.413 7.5 17.75C7.5 16.3625 8.6125 15.25 10 15.25C10.663 15.25 11.2989 15.5134 11.7678 15.9822C12.2366 16.4511 12.5 17.087 12.5 17.75C12.5 18.413 12.2366 19.0489 11.7678 19.5178C11.2989 19.9866 10.663 20.25 10 20.25ZM17.5 24V11.5H2.5V24H17.5ZM17.5 9C18.163 9 18.7989 9.26339 19.2678 9.73223C19.7366 10.2011 20 10.837 20 11.5V24C20 24.663 19.7366 25.2989 19.2678 25.7678C18.7989 26.2366 18.163 26.5 17.5 26.5H2.5C1.83696 26.5 1.20107 26.2366 0.732233 25.7678C0.263392 25.2989 0 24.663 0 24V11.5C0 10.1125 1.1125 9 2.5 9H3.75V6.5C3.75 4.8424 4.40848 3.25269 5.58058 2.08058C6.75269 0.90848 8.3424 0.25 10 0.25C10.8208 0.25 11.6335 0.411661 12.3918 0.725753C13.1501 1.03984 13.8391 1.50022 14.4194 2.08058C14.9998 2.66095 15.4602 3.34994 15.7742 4.10823C16.0883 4.86651 16.25 5.67924 16.25 6.5V9H17.5ZM10 2.75C9.00544 2.75 8.05161 3.14509 7.34835 3.84835C6.64509 4.55161 6.25 5.50544 6.25 6.5V9H13.75V6.5C13.75 5.50544 13.3549 4.55161 12.6517 3.84835C11.9484 3.14509 10.9946 2.75 10 2.75Z" fill="#F78B1F" />
                    </svg>

                    <input type="password" placeholder="Digite sua senha" name="senha" required>
                </div>

                <input type="submit" value="Cadastrar" />

                <span>Já tem uma conta? <a href="../index.php">Faça o login</a></span>
            </form>
        </div>

        <div class="bemVindo__wrapper">
            <span>Bem vindo ao <strong>CAD</strong> Alunos!</span>
        </div>
    </div>
</body>

</html>