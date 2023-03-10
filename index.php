<?php

include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM login_usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: tela_geral.php");

        }else{

            echo "Falha ao logar! E-mail ou senha incorretos";

        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
    <link rel="stylesheet" href="Tela_Principal/style_login.css">
</head>

<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>Logo</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contatos</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                </ul>
            </div>
            <div class="login-button">
                <button><a href="tela_geral.php">Entrar</a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="Tela_Principal/imagens/menu-white.svg" alt="icone-menu"></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="index.php" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contatos</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
            </ul>
            <div class="login-button">
                <button><a href="tela_geral.php">Entrar</a></button>
            </div>
        </div>
    </header>

    <main onclick="closeShow()">
        <aside class="cadastro">
            <h2>Criar Conta</h2>
            <p>Já tem uma conta? <button onclick="trocaShow()">Login</button></p>
            <form action="#" method="post">
                <div class="input-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" placeholder="Digite o seu nome completo" required>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" placeholder="Digite o seu telefone" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" placeholder="Digite a sua senha" required>
                </div>

                <div class="input-group w50">
                    <label for="confirmarsenha">Confirmar Senha</label>
                    <input type="password" id="confirmarsenha" placeholder="Confirme a senha" required>
                </div>

                <div class="input-group">
                    <button>Cadastrar</button>
                </div>
            </form>
        </aside>

        <aside class="login">
            <h2>Faça seu Login</h2>
            <p>Quero me cadastrar ! <button onclick="trocaShow()">Cadastrar</button></p>
            <form action="#" method="post">

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
                </div>

                <div class="input-group w50">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Digite a sua senha" required>
                </div>

                <div class="input-group">
                    <button>Logar</button>
                </div>

            </form>
        </aside>

        <article>
            <img src="Tela_Principal/imagens/laptop.png" alt="LapTop">
        </article>

    </main>
</body>
<script src="Tela_Principal/script_index.js"></script>

</html>