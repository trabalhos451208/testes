<?php include_once "/globais/header.php"; ?>

<?php

    session_start();
    
    login();
    salvar_nome();
    salvar_senha();
    apagar();
?>

    <h1>Cinema</h1>
    
    <h4>Login</h4>
    <form method="post">
        Nome:<input type="text" value="<?php valor_nome(); ?>" name="nome" />
        Senha:<input type="password" value="<?php valor_senha(); ?>" name="senha" />
        Salvar:<input type="checkbox" name="salvar" value="salvar" />
        Esquecer:<input type="checkbox" name="esquecer" value="esquecer" />
        <br/>
        <input type="submit" value="entrar" class="tiny button" />
    </form>
    <hr/>
    <form action="cadastro.php">
        <input type="submit" value="cadastrar" class="button">
    </form>
    

<?php include_once "/globais/footer.php"; ?>