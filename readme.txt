1. Нужно создать БД MySQL: пользователь 'root', пароль '', название БД 'db_wbns', название таблицы 'table_info'

  create table table_info
     (
     	id int auto_increment,
     	first_name VARCHAR(255) not null,
     	second_name varchar(255) not null,
     	email varchar(255) not null,
     	constraint table_info_pk
     		primary key (id)
     )

