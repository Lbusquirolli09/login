# login
Sistema de Login em PHP e Javascript

# aula07 - 18/10/2019
- Inicio da autentificação e entrada no sistema

# aula06 - 15/10/2019
Persistencia de dados no banco de dados

# aula05 - 07/10/2019
 Envio de dados do Front-end para o Back-end,
 métodos GET e POST.

# aula04 - 01/10/2019
 - Validação com HTML5
 - Validação dos campos com jQuerry validate

# aula03 - 30/09/2019
 - Formulário de Cadastro de novos usúarios
 - ~Validação dos campos com jQuerry validate~
 - Ocultar e Mostrar os formulários com jQuerry
 
 jQuerry é uma biblioteca de funções javascript.

# aula02 - 24/09/2019
Layout Bootstrap para os formulários
- Formulário de Login
- Formulário de recuperação de senha
- ~Formulário de Cadastro de novos usuários~

# aula01 - 23/09/2019
Começou a primavera😃
Aula inicial, configurando do projeto no Github
E criação do passo a passo.


---
# Passo a passo em todo início de aula

## Habilitar o Proxy
Tecla Windows - Abrir a janela Prompt de Comando
Copie e cole a linha abaixo - selecione e pressione as teclas Ctrl C

git config --global http.proxy http://10.1.21.254:3128

Pressione Enter

## Clonar o repositório **login** na pasta **c:\xampp\htdocs**
 - Tecla Windows - Abrir o Github Desktop
 - Clique em *Sign in to Github.com*
 - Digite seu Login e Senha do Github
 - Caso necessário, após o login, digite seu nome email
 - Selecione o repositorio **login** e logo abaixo clique no botão azul *Clone...*
 - Clique no *Choose* e encontre no disco local C: a pasta xampp e dentro dela htdocs
 - Selecione a pasta e confira se o *local path* foi *c:\xampp\htdocs\login*
 - Clique no botão azul *Clone*
 
 ## Habilitar o servidor web **Apache** e o servidor **MySQL**
 - Tecla Windows - abrir o XAMPP Control Panel
 - Clique em Start para o Apache
 - Clique em Start para o MySQL
 - Verifique se apareceu a porte 80 Apache e 3306 MySQL
 - Verifique se ficou verde o Apache e MySQL
 
 ## Testar se está funcionando
 - Abra o navegador Firefox Azul e digite Http://localhost/login
 
 ## Editar utilizando o VS Code 
 - Tecla Windows - Abrir o Visual Studio Code (é o azul)
 - *Abrir Pasta* no VS Code escolha c:\xampp\htdocs\login

 ## Importar o banco de dados
 - Acessar o navegador http://localhost/phpmyadmin
 - Clicar em importar
 - Selecione o arquivo, clicando em Browse ou escolha o arquivo
 - Abra o arquivo 127.0.0.1.sql e clique em executar
 - O banco deve ter sido importado corretamente
