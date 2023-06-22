<?php

    include_once("config.php");

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
                    <li class="nav-item"><a href="inicioNaoLogado.php" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="sobreNaoLogado.html" class="nav-link">Sobre Nós</a></li>
                </ul>
            </div>
            <div class="botao-cadastro">
                <button><a href="escolha.html">Cadastre-se
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFF" viewBox="0 -960 960 960" width="25"><path d="M390-327q-9-9-9-21.75t9-21.25l80-80H150q-12.75 0-21.375-8.675-8.625-8.676-8.625-21.5 0-12.825 8.625-21.325T150-510h318l-81-81q-8-8-8-20.447 0-12.448 9.214-21.5Q396.661-642 409.33-642q12.67 0 21.67 9l133 133q5 5 7 10.133 2 5.134 2 11Q573-473 571-468q-2 5-7 10L432-326q-8 8-20.5 8t-21.5-9Zm129 207q-12.75 0-21.375-8.675-8.625-8.676-8.625-21.5 0-12.825 8.625-21.325T519-180h261v-600H519q-12.75 0-21.375-8.675-8.625-8.676-8.625-21.5 0-12.825 8.625-21.325T519-840h261q24 0 42 18t18 42v600q0 24-18 42t-42 18H519Z"/></svg>
                    </a></button>
                <button><a href="login.html">Entrar
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFF" viewBox="0 -960 960 960" width="25"><path d="M222-255q63-44 125-67.5T480-346q71 0 133.5 23.5T739-255q44-54 62.5-109T820-480q0-145-97.5-242.5T480-820q-145 0-242.5 97.5T140-480q0 61 19 116t63 109Zm257.814-195Q422-450 382.5-489.686q-39.5-39.686-39.5-97.5t39.686-97.314q39.686-39.5 97.5-39.5t97.314 39.686q39.5 39.686 39.5 97.5T577.314-489.5q-39.686 39.5-97.5 39.5Zm.654 370Q398-80 325-111.5q-73-31.5-127.5-86t-86-127.266Q80-397.532 80-480.266T111.5-635.5q31.5-72.5 86-127t127.266-86q72.766-31.5 155.5-31.5T635.5-848.5q72.5 31.5 127 86t86 127.032q31.5 72.532 31.5 155T848.5-325q-31.5 73-86 127.5t-127.032 86q-72.532 31.5-155 31.5ZM480-140q55 0 107.5-16T691-212q-51-36-104-55t-107-19q-54 0-107 19t-104 55q51 40 103.5 56T480-140Zm0-370q34 0 55.5-21.5T557-587q0-34-21.5-55.5T480-664q-34 0-55.5 21.5T403-587q0 34 21.5 55.5T480-510Zm0-77Zm0 374Z"/></svg>
                    </a></button>
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img src="./Imagens/menu_white_36dp.svg" class="icon"></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="inicioNaoLogado.php" class="nav-link">Início
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFFFFF" viewBox="0 -960 960 960" width="25"><path d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm-60 60v-480l320-240 320 240v480H530v-250H430v250H160Zm320-353Z"/></svg>
                    </a></li>
                <li class="nav-item"><a href="sobreNaoLogado.html" class="nav-link">Sobre Nós
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFFFFF" viewBox="0 -960 960 960" width="25"><path d="M431-330q1-72 16.5-105t58.5-72q42-38 64.5-70.5T593-647q0-45-30-75t-84-30q-52 0-80 29.5T358-661l-84-37q22-59 74.5-100.5T479-840q100 0 154 55.5T687-651q0 48-20.5 87T601-482q-49 47-59 72t-11 80H431Zm48 250q-29 0-49.5-20.5T409-150q0-29 20.5-49.5T479-220q29 0 49.5 20.5T549-150q0 29-20.5 49.5T479-80Z"/></svg>
                    </a></li>
            </ul>

            <div class="botao-cadastro">
                <button><a href="escolha.html">Cadastre-se
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFF" viewBox="0 -960 960 960" width="25"><path d="M390-327q-9-9-9-21.75t9-21.25l80-80H150q-12.75 0-21.375-8.675-8.625-8.676-8.625-21.5 0-12.825 8.625-21.325T150-510h318l-81-81q-8-8-8-20.447 0-12.448 9.214-21.5Q396.661-642 409.33-642q12.67 0 21.67 9l133 133q5 5 7 10.133 2 5.134 2 11Q573-473 571-468q-2 5-7 10L432-326q-8 8-20.5 8t-21.5-9Zm129 207q-12.75 0-21.375-8.675-8.625-8.676-8.625-21.5 0-12.825 8.625-21.325T519-180h261v-600H519q-12.75 0-21.375-8.675-8.625-8.676-8.625-21.5 0-12.825 8.625-21.325T519-840h261q24 0 42 18t18 42v600q0 24-18 42t-42 18H519Z"/></svg>
                    </a></button>
            </div>
            <div class="botao-cadastro">
                <button><a href="login.html">Entrar
                    <svg xmlns="http://www.w3.org/2000/svg" height="25" fill="#FFF" viewBox="0 -960 960 960" width="25"><path d="M222-255q63-44 125-67.5T480-346q71 0 133.5 23.5T739-255q44-54 62.5-109T820-480q0-145-97.5-242.5T480-820q-145 0-242.5 97.5T140-480q0 61 19 116t63 109Zm257.814-195Q422-450 382.5-489.686q-39.5-39.686-39.5-97.5t39.686-97.314q39.686-39.5 97.5-39.5t97.314 39.686q39.5 39.686 39.5 97.5T577.314-489.5q-39.686 39.5-97.5 39.5Zm.654 370Q398-80 325-111.5q-73-31.5-127.5-86t-86-127.266Q80-397.532 80-480.266T111.5-635.5q31.5-72.5 86-127t127.266-86q72.766-31.5 155.5-31.5T635.5-848.5q72.5 31.5 127 86t86 127.032q31.5 72.532 31.5 155T848.5-325q-31.5 73-86 127.5t-127.032 86q-72.532 31.5-155 31.5ZM480-140q55 0 107.5-16T691-212q-51-36-104-55t-107-19q-54 0-107 19t-104 55q51 40 103.5 56T480-140Zm0-370q34 0 55.5-21.5T557-587q0-34-21.5-55.5T480-664q-34 0-55.5 21.5T403-587q0 34 21.5 55.5T480-510Zm0-77Zm0 374Z"/></svg>
                    </a></button>
            </div>
        </div>
    </header>
    
    <div class="componente-pesquisa">

        <div class="campo-pesquisa">
            <button onclick="pesquisar_dados()" id="btnPesquisa">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" fill="#FFF" viewBox="0 -960 960 960" width="20"><path d="M796-121 533-384q-30 26-69.959 40.5T378-329q-108.162 0-183.081-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.125-57.5T572-585q0-81-56.875-138.5T377-781q-82.083 0-139.542 57.5Q180-666 180-585t57.458 138.5Q294.917-389 377-389Z"/></svg>
            </button>
            <input type="search" name="search" id="input-pesquisa" type="text" placeholder="Pesquise por serviços">
        </div> 
    </div>
    
    <div class="componente-trabalhador">
        <table>
            <thead>    
                <tr>
                    <th>Resultado encontrado:</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($dados_usuario = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>
                            <h2>".$dados_usuario["NOME"]." | ".$dados_usuario["TIPO_SERV"]."</h2>
                            <p><b>Dias disponíveis: </b>".$dados_usuario["DIAS_DISP"].", <b>Horário disponível: </b>".$dados_usuario["HORA_DISP"]."</p>
                            <p><b>Localidade: </b>".$dados_usuario["MUNICIPIO"].", ".$dados_usuario["BAIRRO"]."</p>
                            <p><b><a href='login.html'>Para saber mais é necessário se cadastrar</a></b></p>
                        </td>
                        </tr>";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    <script src="./Javascript/pesquisaNaoLogado.js"></script>
    <script src="./Javascript/MenuMobile.js"></script>
</body>
</html>