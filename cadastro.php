<?php 
    include_once "/globais/header.php";
    
    if (isset($_POST["nome"]) and isset($_POST["senha"]) and isset($_POST["email"])){
        session_start();
        
        if(empty($_SESSION["nome"]) and empty($_SESSION["senha"])){
            $_SESSION["nome"] = $_POST["nome"];
            $_SESSION["senha"] = $_POST["senha"];
            print_r($_SESSION);
            ?> <script>alert("cadastro aceito!")</script> <?php
            header("Location: index.php");
        }else{
            ?> <script>alert("cadastro negado!")</script> <?php
        }
        
    }
?>

    <h1>Cinema</h1>
    
    <h4>cadastro</h4>
    <form method="post">
        Nome:<input type="text" name="nome" />
        E-mail:<input type="email" name="email" />
        Senha:<input type="password" name="senha" />
        <input type="submit" value="caastrar" class="tiny button">
    </form>
    <hr/>
    <form action="index.php">
        <input type="submit" value="voltar" class="button">
    </form>
    

<?php include_once "/globais/footer.php"; ?>