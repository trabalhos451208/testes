<?php 
    include_once "/globais/header.php";
    
    if (isset($_POST["nome"]) and isset($_POST["senha"]) and isset($_POST["email"])){
        session_start();
        cadastro();
    }
?>

    <h1>Cinema</h1>
    
    <h4>cadastro</h4>
    <form method="post">
        Nome:<input type="text" name="nome" />
        E-mail:<input type="email" name="email" />
        Senha:<input type="password" name="senha" />
        <input type="submit" value="cadastrar" class="tiny button">
    </form>
    <hr/>
    <form action="index.php">
        <input type="submit" value="voltar" class="button">
    </form>
    

<?php include_once "/globais/footer.php"; ?>