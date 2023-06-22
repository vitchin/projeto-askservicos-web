<?php
    if(isset($_POST['submit'])){

        include_once("config.php");

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $nTel = $_POST["telefone"];
        $municipio = $_POST["municipio"];
        $bairro = $_POST["bairro"];
        $diasDisp = $_POST["dias_disp"];
        $horaDisp = $_POST["hora_disp"];
        $tipoServ = $_POST["tipo_serv"];
        $descServ = $_POST["desc_serv"];
        $senha = $_POST["senha"];

        $result = mysqli_query($conexao, "INSERT INTO trabalhador(NOME, EMAIL, N_TEL, MUNICIPIO, BAIRRO, DIAS_DISP, HORA_DISP, TIPO_SERV, DESC_SERV, SENHA) 
        VALUES ('$nome', '$email', '$nTel', '$municipio', '$bairro', '$diasDisp', '$horaDisp', '$tipoServ', '$descServ', '$senha');");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Trabalhador</title>
    
    <link rel="stylesheet" href="./CSS/BarraFixa.css">
    <link rel="stylesheet" href="./CSS/Formulário.css">

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

    <div class="componente-cadastro">
        
    <div class="voltar-botao">
            <a href="inicioNaoLogado.php"><button id="btnVoltar">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" Fill="#FFF" viewBox="0 -960 960 960" width="30"><path d="M480-160 160-480l320-320 42 42-248 248h526v60H274l248 248-42 42Z"/></svg>
                Voltar</button></a>
        </div>
        
        <div class="titulo-cadastro">
            <h1>Cadastro Trabalhador</h1>
            <div class="linha"></div>
        </div>
        
        <form action="cadastroTrabalhador.php" method="post"> 

            <fieldset>
                
                <label>*Nome:</label>
                <input type="text" name="nome" id="txtNome" placeholder="Nome completo" required>
            
                <label>*Email:</label>
                <input type="email" name="email" id="txtEmail" placeholder="nomeConta@gmail.com" required>

                <label>*Telefone: </label>
                <input type="text" name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx" required>

                <div class="separacao">    
            
                    <div class="campo">
                        <label>*Município: </label>
                        <input type="text" name="municipio" id="txtMunicipio" placeholder="Ex:Recife" required>
                    </div>
            
                    <div class="campo">
                        <label>*Bairro: </label>
                        <input type="text" name="bairro" id="txtBairro" placeholder="Ex:Zumbi do Pacheco" required>
                    </div>
            
                </div>

                <div class="separacao">    
            
                    <div class="campo">
                        <label>*Dias: </label>
                        <input type="text" name="dias_disp" id="txtDiasDisp" placeholder="SEG-SEX" required>
                    </div>
            
                    <div class="campo">
                        <label>*Horário: </label>
                        <input type="text" name="hora_disp" id="txtHoraDisp" placeholder="06AM-22PM" required>
                    </div>
            
                </div>
            </fieldset>

            <fieldset>
                
                <label>*Serviço:</label>
                <input type="text" name="tipo_serv" id="txtTipoServ" placeholder="Ex: Manutênção de computadores" required>

                <label>Descrição do serviço:</label>
                <textarea name="desc_serv" id="txtDescricao" placeholder="Preencher este campo é opicional. Escreva aqui a descrição do seu serviço, esteja a vontade para colocar o local onde trabalha, seu melhor horário para ligação, etc."></textarea>
                
                <div class="separacao">    
            
                    <div class="campo">
                        <label>*Senha: </label>
                        <input type="password" name="senha" id="txtSenha" placeholder="********" required>
                    </div>
            
                    <div class="campo">
                        <label>*Confirmar senha: </label>
                        <input type="password" name="confirmaSenha" id="txtConfirmaSenha" placeholder="********" required>
                    </div>
            
                </div>
                
                <button type="submit" name="submit" id="btnConcluir">Concluir</button>
            
            </fieldset>
    
        </form>
    </div>

    <script src="./Javascript/MenuMobile.js"></script>

</body>
</html>