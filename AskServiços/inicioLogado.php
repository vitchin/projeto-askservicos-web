<?php
    session_start();

    include_once("config.php");

    if((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true)){
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: login.html");
    }
    else{
        $logado = $_SESSION["email"];
    }

    if(!empty($_GET["search"])){
        $dados = $_GET["search"];
        $seleciona_bd = "SELECT * FROM trabalhador WHERE MUNICIPIO LIKE '%$dados%' OR TIPO_SERV LIKE '%$dados%' OR BAIRRO LIKE '%$dados%' ORDER BY ID DESC";
    }
    else{
        $seleciona_bd = "SELECT * FROM trabalhador ORDER BY ID";
    }

    $result = $conexao->query($seleciona_bd);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Início </title>
    
    <link rel="stylesheet" href="./CSS/BarraFixa.css">
    <link rel="stylesheet" href="./CSS/CampoPesquisa.css">
    <link rel="stylesheet" href="./CSS/tabela.css">
</head>
<body>

    <header>
        <nav class="nav-bar">
            <div class="logo">
                <h1>AskServiços</h1>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="inicioLogado.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="sobreLogado.html" class="nav-link">Sobre Nós</a></li>
                </ul>
            </div>
            
            <div class="botao-cadastro">
                <button><a href="casoSair.php">Sair
                <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFF" viewBox="0 -960 960 960" width="25"><path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h291v60H180v600h291v60H180Zm486-185-43-43 102-102H375v-60h348L621-612l43-43 176 176-174 174Z"/></svg>
                </a></button>
            </div>

            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="./Imagens/menu_white_36dp.svg" class="icon"></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="inicioLogado.php" class="nav-link">Início
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFFFFF" viewBox="0 -960 960 960" width="25"><path d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm-60 60v-480l320-240 320 240v480H530v-250H430v250H160Zm320-353Z"/></svg>
                    </a></li>
                <li class="nav-item"><a href="sobreLogado.html" class="nav-link">Sobre Nós
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFFFFF" viewBox="0 -960 960 960" width="25"><path d="M431-330q1-72 16.5-105t58.5-72q42-38 64.5-70.5T593-647q0-45-30-75t-84-30q-52 0-80 29.5T358-661l-84-37q22-59 74.5-100.5T479-840q100 0 154 55.5T687-651q0 48-20.5 87T601-482q-49 47-59 72t-11 80H431Zm48 250q-29 0-49.5-20.5T409-150q0-29 20.5-49.5T479-220q29 0 49.5 20.5T549-150q0 29-20.5 49.5T479-80Z"/></svg>
                    </a></li>
            </ul>

            <div class="botao-cadastro">
                <button><a href="casoSair.php">Sair
                <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFF" viewBox="0 -960 960 960" width="25"><path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h291v60H180v600h291v60H180Zm486-185-43-43 102-102H375v-60h348L621-612l43-43 176 176-174 174Z"/></svg>
                </a></button>
            </div>
        </div>
    </header>

    <div class="componente-pesquisa">

        <div class="campo-pesquisa">
            <button onclick="pesquisar_dados()" id="btnpesquisa">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="#FFF" viewBox="0 -960 960 960" width="20"><path d="M796-121 533-384q-30 26-69.959 40.5T378-329q-108.162 0-183.081-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.125-57.5T572-585q0-81-56.875-138.5T377-781q-82.083 0-139.542 57.5Q180-666 180-585t57.458 138.5Q294.917-389 377-389Z"/></svg>
            </button>
            <input type="search" name="search" id="input-pesquisa" type="text" placeholder="Pesquise por serviços">
        </div> 
    </div>
    
    <div class="componente-trabalhador">
        <table>
            <thead>    
                <tr>
                    <th>Resultado(s):</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($dados_usuario = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>
                            <h2>".$dados_usuario["NOME"]." | ".$dados_usuario["TIPO_SERV"]."</h2>
                            <p><b>Contato: </b>".$dados_usuario["EMAIL"].", ".$dados_usuario["N_TEL"]."</p>
                            <p><b>Dias disponíveis: </b>".$dados_usuario["DIAS_DISP"]."</p>
                            <p><b>Horário disponível: </b>".$dados_usuario["HORA_DISP"]."</p> 
                            <p><b>Localidade: </b>".$dados_usuario["MUNICIPIO"].", ".$dados_usuario["BAIRRO"]."</p>
                            <p><b>Descrição do serviço: </b>".$dados_usuario["DESC_SERV"]."</p>
                        </td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="./Javascript/pesquisaLogado.js"></script>
    <script src="./Javascript/MenuMobile.js"></script>
</body>
</html>