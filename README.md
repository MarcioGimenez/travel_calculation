# Rota de Viagem #

Um turista deseja viajar pelo mundo pagando o menor preço possível independentemente do número de conexões necessárias.
Esse programa facilita ao nosso turista, escolher a melhor rota para sua viagem.

Para isso podemos consultar ou inserir as rotas através de uma Api Rest.


## Explicando os Diretórios## 


* **api** diretório utilizado para armazenar os arquivos que processam a api Rest.
* **app/business** diretório utilizado para armazenar os arquivos que contém as regras de negócio da aplicação.
* **cli** diretório utilizado para armazenar os arquivos utilizados para a interface por linha de comando.
* **config** diretório utilizado para armazenar os arquivos de configuração da aplicação.
* **data** diretório que armazena as rotas no formato .csv
* **docker** diretório que armazena os arquivos responsáveis por contruir o ambiente para a aplicação.
* **tests** diretório que armazena os com testes unitários.
* **postman** diretório que armazena a documentação e testes de integração.


### Execução do programa ###
Após clonar o projeto basta editar o arquivo **/etc/hosts** adicionando a linha ```127.0.0.1 travelcalculation.com```
depois acessar o diretório **docker** e rodar o comando ```docker-compose up```
para utilizar a interface por linha de comando acesse o diretório **cli** e execute ```php cli.php```

## Documentação da Api Rest ##
Os arquivos com a documentação e testes criados no **Postman** estão no diretório ```postman``` ou no link https://documenter.getpostman.com/view/1131744/TVCfV7tr


