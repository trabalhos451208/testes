<?php include_once "/globais/header.php"; ?>

<?php

    session_start();

    if (isset($_POST["nome"]) and isset($_POST["senha"])){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        if($nome === $_SESSION["nome"] and $senha === $_SESSION["senha"]) {
            header("Location: cinema.php");
        }
    }
    if(empty($_COOKIE["nome"]) && isset($_POST["nome"])){
        $cookie_nome = $_POST["nome"];
        $cookie_valor_nome = "nome";
        setcookie($cookie_valor_nome, $cookie_nome, time() + (86400 * 30), "/"); // 86400 = 1 dia
    }
    if(empty($_COOKIE["senha"]) && isset($_POST["senha"])){
        $cookie_senha = $_POST["senha"];
            $cookie_value_senha = "senha";
            setcookie($cookie_value_senha, $cookie_senha, time() + (86400 * 30), "/");
    }
?>

    <h1>Cinema</h1>
    
    <h4>Login</h4>
    <form method="post">
        Nome:<input type="text" value="<?php valor_nome(); ?>" name="nome" />
        Senha:<input type="password" value="<?php valor_senha(); ?>" name="senha" />
        <input type="submit" value="entrar" class="tiny button" />
    </form>
    <hr/>
    <form action="cadastro.php">
        <input type="submit" value="cadastrar" class="button">
    </form>
    

<?php include_once "/globais/footer.php"; ?>