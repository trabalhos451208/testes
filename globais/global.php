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
        if(!empty($_COOKIE["nome"])){
            echo $_COOKIE["nome"];
        }
    }
    
    function valor_senha(){
        if(!empty($_COOKIE["senha"])){
            echo $_COOKIE["senha"];
        }
    }