-- source base-student.sql
-- REMOVE THIS ON SUBMIT
-- drop table ft_table;

create table ft_table (
	id int not null auto_increment not null,
	login char(8) not null default 'toto',
	`group` enum('staff', 'student', 'other') not null,
	creation_date date not null,
	primary key (id)
);

-- testcode

/*
describe ft_table;
insert into ft_table values () ;
insert into ft_table (login) values ('lars') ;
insert into ft_table (login, `group`) values ('monkey', 'student') ;
select * from ft_table;
-- insert into ft_table (login) values ('monkeylarge') ;
-- describe ft_table; insert into ft_table values ('monkey') ; select * from ft_table;
*/

