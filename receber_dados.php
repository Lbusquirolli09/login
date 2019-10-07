<?php

//teste se existe a ação
if(isset($_POST['action'])){
    if(isset($_POST['action']) == 'cadastro'){
        //teste se ação é igual a cadastro
        echo "\n<p>cadstro</p>";
        echo "\n<pre>";//Pre-formatar
        print_r($_POST);
        echo "\n</pre>";
    }else if($_POST['action'] == 'login'){
        //senão, teste se ação é login
        echo "\n<p>login</p>";
        echo "\n<pre>"; //Pre-formatar
        print_r($_POST);
        echo "\n</pre>";
    }else if($_POST['action'] == 'senha'){
        //senão, teste se ação é recuperar senha
        echo "\n<p>senha</p>";
        echo "\n<pre>"; //Pre-formatar
        print_r($_POST);
        echo "\n</pre>";
    }else{
        header("location:index.php");
    }

}else{
    //Redirecionando para index.php, negando o acesso
    //a esse arquivo diretamente.
    header("location:index.php")
}