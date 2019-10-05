<?php
# Back-end

if(isset($_GET['nome'])){
echo "\n<pre>\n";
print_r($_GET); #Array
echo "\n</pre>\n";

print("<br><strong>Nome: </strong>");
print("$_GET[nome]");

print("<br><strong>E-mail: </strong>");
print("$_GET[email]");

print("<br><strong>Senha: </strong>");
print("$_GET[senha]");

print("<br><strong>Data de Nascimento: </strong>");
print("$_GET[data_de_nascimento]");
}
//verifica se o metodo POST ta enviando dados
if(isset($_POST['nome'])){
    echo "\n<pre>\n";
    print_r($_POST); #Array
    echo "\n</pre>\n";

    print("<br><strong>Nome: </strong>");
    print("$_POST[nome]");

    print("<br><strong>E-mail: </strong>");
    print("$_POST[email]");

    print("<br><strong>Senha: </strong>");
    print("$_POST[senha]");

    print("<br><strong>Data de Nascimento: </strong>");
    print("$_POST[data_de_nascimento]");
}