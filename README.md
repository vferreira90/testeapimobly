Mobly-TesteAPI

Como executar o teste:

Obs: fiz uma API, mas posteriormente ao tentar usar o resource nas routes, acabei criando outra.

1- criar o banco de dados usuários no mysql
“CREATE DATABASE IF NOT EXISTS Usuarios“

2 - executar o migrate:
Digitar na pasta do projeto (testeapi) o comando através do prompt “php artisan migrate”

Acesso a API utilizando o insomnia 

3 - importar json usuários:
Abrir o insomnia e executar o json com o método POST
Usuários: http://jsonplaceholder.typicode.com/users
http://localhost/testeapi/public/api/users/add

4- importar json posts:
Abrir o insomnia e executar o json com o método POST
Posts: http://jsonplaceholder.typicode.com/posts
http://localhost/testeapi/public/api/usuarios/posts/add

5- listar todos os usuários
No insomnia, utilizando método GET,  digitar a url:
http://localhost/testeapi/public/api/users

7- Editar usuários
No insomnia, utilizando método PUT, digitar a url: http://localhost/testeapi/public/api/users/update/ (id do usuário)
E colar os dados em formato json

8- Excluir usuários
No insomnia, utilizando método DELETE, digitar a url:
http://localhost/testeapi/public/api/users/del/ (id do usuário)

9- Localizar usuario especifico
No insomnia, utilizando método GET, digitar a url:
http://localhost/testeapi/public/api/users/ (id do usuário)

10- Localizar Posts de um usuário
No insomnia, utilizando método GET, digitar a url:
http://localhost/testeapi/public/api/users/(id do usuário)/posts

Acessando os dados utilizando template blade

11- visualizar todos os usuários
Digitar na pasta do projeto (testeapi) o comando através do prompt : 
php artisan serve  

No navegador acessar a url: http://localhost:8000/usuarios

12- incluir usuário
Clicar no texto Criar usuários, incluir os dados e salvar.

13- visualizar detalhes do usuário
Clicar no botao detalhes.

14 - editar dados do usuário
Clicar no botao editar, editar os dados e salvar.

15- visualizar posts relacionados ao usuário:
Clicar no botao posts.

16- apagar usuário
Clicar no botao delete. 
