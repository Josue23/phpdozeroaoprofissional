<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 68 - criando a estrutura d banco de dados</title>
    <link rel="stylesheet" href="style.css">
</head>
    <h1><a href="http://membros.phpdozeroaoprofissional.com.br/home/video/68" target="_blank">Aula 68</a> criando a estrutura d banco de dados</h1>
    <!-- https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04  -->

    <div>
    <hr>
    <h3>Nome do banco:</h3>
        blog <br><br>

    <h3>nome da tabela</h3>
        posts <br><br>

        campos da tabela <br>
    <ol>
        <li>1 - id do post, o campo id deve ser marcado como PRIMARY no campo índice e deve ser marcado o auto increment</li>
        <li>2 - título</li>
        <li>3 - data_criado</li>
        <li>4 - corpo</li>
        <li>5 - autor</li>
    </ol>

    <hr>
    </div>

    <div>
        <hr>
        <p><a href="http://www.mysqltutorial.org/mysql-cheat-sheet.aspx" target="_blank">MySQL Cheat Sheet</a></p>
        <h3>Working with Database:</h3>
        <li>Cria o banco com o nome blog</li>
        CREATE DATABASE IF NOT EXISTS blog;<br><br>

        <li>Use database or change current database to another database you are working with</li>
        USE blog;<br><br>

        <li>Eliminar o banco de dados</li>
        Primeiro desativa esse banco que vai ser eliminado <br>
        DROP DATABASE IF EXISTS blog2; <br><br>

        <li>Show all available databases in the MySQL database server</li>
        show databases; <br><br>

        <li></li>
        <p><a href="https://www.udemy.com/curso-mysql/learn/v4/t/lecture/5008840" target="_blank">Aula complementar sobre MySQL</a></p><br>
        <hr>
    </div>

    <div>
        <hr>
        <h3>Working with Table</h3>
        <hr>
    </div>

    <!--
    comando para acessar o MYSQL
    $ mysql -u root -p

    CREATE DATABASE IF NOT EXISTS yellow;
    USE yellow;

    create table if not exists inquilinos(
    id int,
    nome varchar(100)
    );
    
    inserir registro na tabela inquilinos, respeitando a ordem das colunas:
    insert into inquilinos values(1, 'José da Silva');
    select * from inquilinos;

    inserir registro na tabela inquilinos, especificando a ordem das colunas:
    insert into inquilinos (nome, id) values('João da Silva', 2);
    select * from inquilinos;

    ===============================================
    CREATE DATABASE IF NOT EXISTS yellow;                // cria o banco yellow
    USE yellow;                                          // usa o banco yellow
    create table tb_funcionarios(                        // cria a tabela tb_funcionarios
        id INT,
        nome VARCHAR(100),
        salario DECIMAL(10, 2),
        admissao DATE,
        sexo ENUM('F', 'M'),                             // este valor será pré definido
        cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP()   // deve ser passado como NULL no INSERT
    );
    
    // insere um registro na tabela tb_funcionarios
    INSERT INTO tb_funcionarios VALUE(1, 'Pedro Henrique', 4999.99, '2016-01-01', 'M');
    // erro, falta definir o campo cadastro como null

    DESCRIBE tb_funcionarios;                           // comando que exibe a estrutura da tabela, para consulta

    INSERT INTO tb_funcionarios VALUE(1, 'Pedro Henrique', 4999.99, '2016-01-01', 'M', NULL);

    SELECT * FROM tb_funcionarios;                      // verifica se o registro foi inserido
     id   | nome           | salario | admissao   | sexo | cadastro            |
    +------+----------------+---------+------------+------+---------------------+
    |    1 | Pedro Henrique | 4999.99 | 2016-01-01 | M    | 2016-12-30 20:45:39 
    ===============================================
    
    


    -->
<body>
    
</body>
</html>
