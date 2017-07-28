//创建数据库
emlog
CREATE DATABASE shzj DEFAULT CHARACTER SET utf8;
//建表
create table testphp(
	id int not null primary key auto_increment,
	name varchar(20) not null,
	account varchar(20) not null,
	password varchar(20) not null,
	email varchar(50) not null,
	address varchar(100) not null,
	phone varchar(12) not null
) auto_increment=10000;

//插入数据
INSERT INTO testphp( name, account, password, email, address, phone ) VALUES ('肖中波', 'mediumwave', '123456','xxzzll11@163.com',  '上海市浦东新区', '18964767565');



insert into testphp (name,account,password,email,address,phone,img,sex) SELECT name,account,password,email,address,phone,img,sex from testphp;

alter table testphp add sex char(1) not Null;
alter table testphp add img blob not null;

（1）
1,用户表
2,角色表
3,功能表
1.主表中的外键关系得两个表：用户与角色表、角色与功能表














#创建数据库
CREATE DATABASE shhk DEFAULT CHARACTER SET utf8;
#用户表
create table x_users(
	userid int not null  auto_increment,
	username varchar(30) not null,
	password varchar(30) not null,
	realname varchar(30) not null,
	age varchar(3) not null,
	email varchar(50) not null,
	address varchar(100) not null,
	phone varchar(12) not null,
	primary key (userid)  
) auto_increment=10000;
insert into x_users(username,password,realname,age,email,address,phone) values ('mediumwave','111111','肖中波','20','79182248@qq.com','上海市虹口区','17301764656');
insert into x_users(username,password,realname,age,email,address,phone) values ('zhangsan','111111','张三','20','79134248@qq.com','上海市虹口区','17301264656');
#角色表
create table x_roles(
	roleid int not null  auto_increment,
	rolename varchar(30) not null,
	primary key (roleid)  
) auto_increment=20000;

insert into x_roles (rolename) values ('管理员');
insert into x_roles (rolename) values ('前台');
insert into x_roles (rolename) values ('市场');
insert into x_roles (rolename) values ('财务');
insert into x_roles (rolename) values ('行政');
#功能表
create table x_rules(
	ruleid int not null auto_increment,
	rulename varchar(30) not null,
	primary key (ruleid) 
) auto_increment=30000;
insert into x_rules (rulename) values ('咨询登记');
insert into x_rules (rulename) values ('招聘面试');
insert into x_rules (rulename) values ('业务洽谈');
insert into x_rules (rulename) values ('市场分析');
#用户与角色表
create table x_users_roles(
	userid int  not null,
	roleid int  not null
);


#角色与功能表
create table x_roles_rules(
	roleid  int  not null,
	ruleid  int  not null
);
select rulename from x_users,x_rules

select roleid from x_users_roles where userid=10000
select password from x_users where userid='' and password='' 
select rulename from x_rules where ruleid in (
	select ruleid from x_roles_rules where roleid in (
		select roleid from x_roles where roleid in (
			select roleid from x_users_roles where userid='10000')))


#用户表+用户与角色表 

select username from x_users;
select username,rolename from x_roles,x_users;




CREATE TABLE tbl_dept(  
  id INT(11) NOT NULL AUTO_INCREMENT,
  deptName VARCHAR(30),
  locAdd VARCHAR(40),
  PRIMARY KEY (id)
)

CREATE TABLE tbl_emp(  
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(20),
  deptId INT(11),
  PRIMARY KEY (id),
  FOREIGN KEY (deptId) REFERENCES tb_dept(id)
)
/*插入数据*/
INSERT INTO tbl_dept(deptName,locAdd) VALUES('RD',11);
INSERT INTO tbl_dept(deptName,locAdd) VALUES('HR',12);
INSERT INTO tbl_dept(deptName,locAdd) VALUES('MK',13);
INSERT INTO tbl_dept(deptName,locAdd) VALUES('MIS',14);
INSERT INTO tbl_dept(deptName,locAdd) VALUES('FD',15);

INSERT INTO tbl_emp(NAME,deptId) VALUES('z3',1);
INSERT INTO tbl_emp(NAME,deptId) VALUES('z4',1);
INSERT INTO tbl_emp(NAME,deptId) VALUES('z5',1);

INSERT INTO tbl_emp(NAME,deptId) VALUES('w5',2);
INSERT INTO tbl_emp(NAME,deptId) VALUES('w6',2);

INSERT INTO tbl_emp(NAME,deptId) VALUES('s7',3);

INSERT INTO tbl_emp(NAME,deptId) VALUES('s8',4);

select * from tbl_dept a inner join tbl_emp b on a.id=b.deptId;