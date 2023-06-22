<?php 
    session_start();
    
    if(isset($_POST["submit"]) && !empty($_POST["email"]) && !empty($_POST["senha"])){        
        
        include_once("config.php");

        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $verifica_bd = "SELECT * FROM trabalhador INNER JOIN cliente WHERE 
        (trabalhador.EMAIL = '$email' AND trabalhador.SENHA = '$senha') OR (cliente.EMAIL = '$email' AND cliente.SENHA = '$senha')";
        $result = $conexao->query($verifica_bd);

        if(mysqli_num_rows($result) < 1){
            unset($_SESSION["email"]);
            unset($_SESSION["senha"]);
            header("Location: login.html");
        }
        else{
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            header("Location: inicioLogado.php");
        }
    }
    else{
        header("Location: login.html");
    }
?>