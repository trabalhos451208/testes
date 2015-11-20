<?php

/**Funções do Sistema**/

    function session(){
        
        if(empty($_SESSION["cont"])){
            $_SESSION["cont"] = 1;
        }else{
            $_SESSION["cont"]++;
        }
        if($_SESSION["cont"] == 2){
            $_SESSION["cont"] = 2;
        }
    }
    
    function valor_nome(){
        if ($_SESSION["cont"] == 1){
            $cookie_nome = $_POST["nome"];
            $cookie_valor_nome = "salvar";
            setcookie($cookie_nome, $cookie_valor_nome, time() + (86400 * 30), "/"); // 86400 = 1 dia
        }
        if($_SESSION["cont"] == 2 and $_SESSION["cont"] > 2){
            echo $_COOKIE[$cookie_nome];
            $_SESSION["cont"] = 1;
        }
    }
    
    function valor_senha(){
        if ($_SESSION["cont"] == 1){
            $cookie_senha = $_POST["senha"];
            $cookie_value_senha = "salvar";
            setcookie($cookie_senha, $cookie_value_senha, time() + (86400 * 30), "/");
            echo $_COOKIE[$cookie_senha];
        }
        if($_SESSION["cont"] == 2){
            echo $_COOKIE[$cookie_senha];
            $_SESSION["cont"] = 1;
            echo $_SESSION;
        }
    }