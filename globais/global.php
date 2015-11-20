<?php

    /**Exemplos**/

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
    /**Fim dos exemplos**/
    /**Funções do Sistema**/
    
    function cadastro(){
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
    
    function login(){
        if (isset($_POST["nome"]) and isset($_POST["senha"])){
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            if($nome === $_SESSION["nome"] and $senha === $_SESSION["senha"]) {
                header("Location: cinema.php");
            }
        }
    }
    
    function salvar_nome(){
        if(empty($_COOKIE["nome"]) && isset($_POST["nome"]) && $_POST["salvar"] === "salvar"){
            $cookie_valor_nome = $_POST["nome"];
            setcookie("nome", $cookie_valor_nome, time() + (86400 * 30), "/"); // 86400 = 1 dia
        }
    }
    
    function salvar_senha(){
        if(empty($_COOKIE["senha"]) && isset($_POST["senha"]) && $_POST["salvar"] === "salvar"){
            $cookie_value_senha = $_POST["senha"];
            setcookie("senha", $cookie_value_senha, time() + (86400 * 30), "/");
        }
    }

    function valor_nome(){
        if(!empty($_COOKIE["nome"])){
            echo $_COOKIE["nome"];
        }
    }
    
    function valor_senha(){
        if(!empty($_COOKIE["senha"])){
            echo $_COOKIE["senha"];
        }
    }
    
    function apagar(){
        if(isset($_POST["esquecer"]) && $_POST["esquecer"] === "esquecer"){
            $cookie_valor_nome = null;
            setcookie("nome", $cookie_valor_nome, time() - 86400, "/"); // 86400 = 1 dia
            
            $cookie_value_senha = null;
            setcookie("senha", $cookie_value_senha, time() - 86400, "/"); // 86400 = 1 dia
        }
    }