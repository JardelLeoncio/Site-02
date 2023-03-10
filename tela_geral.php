<?php
include('conexao.php');

if(!isset($_SESSION)){
    session_start();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="Tela_Principal/style_apresentação.css">
</head>

<body>
    <section>
        <div class="container">
            <header>
                <nav class="nav-bar">
                    <a href="#" class="logo">Logo</a>
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Team</a></li>
                    </ul>

                    <div class="login-button">
                        <button><a href="index.php">Sair</a></button>
                    </div>

                    <div class="mobile-menu-icon">
                        <button onclick="menuShow()"><img class="icon" src="Tela_Principal/imagens/menu-white.svg"
                                alt=""></button>
                    </div>
                </nav>
                <div class="mobile-menu">
                    <ul>
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Profile</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Team</a></li>
                    </ul>

                    <div class="login-button">
                        <button><a href="index.php">Sair</a></button>
                    </div>
                </div>
            </header>
            <main tabindex="0" onclick="closeShow()">
                <div class="card">
                    <div class="imgBx">
                        <img src="Tela_Principal/imagens/img_projeto.jpg">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                            <h3>Área de Projetos</h3>
                            <p>Visualize projetos prontos, semi-prontos ou proponha novas ideias para projetos</p>
                            <a href="#">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="Tela_Principal/imagens/img_dados.jpg">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                            <h3>Entrada de Dados</h3>
                            <p>Preencha os formularios para salvar as infomações no Banco de dados e posteriormente
                                visualizá-los</p>
                            <a href="#">Acessar</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="imgBx">
                        <img src="Tela_Principal/imagens/img_grafico.jpg">
                    </div>
                    <div class="contentBx">
                        <div class="content">
                            <h3>Controle de Dados</h3>
                            <p>Tenha acesso a parte grafica de todos os dados ja inseridos anteriormente nos formularios
                            </p>
                            <a href="#">Acessar</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </section>
</body>
<script src="Tela_Principal/script.js"></script>

</html>