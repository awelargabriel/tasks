create database tasks;
use tasks;
create table tarefas (
	id int(11) not null auto_increment,
    nome varchar(20) not null,
    descricao text,
    prazo date default null,
    prioridade enum('baixa', 'media','alta'),
    finalizada boolean,
    primary key(id)
    ) engine=innoDB default charset = utf8;
    
    select * from tasks;