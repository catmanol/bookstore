use BOOKSTORE;

CREATE TABLE USER (
    USER_ID int(11) not null auto_increment comment 'User id',
    USERNAME varchar(20) not null comment 'Username',
    EMAIL varchar(50) not null comment 'Username email',
    PASSWORD varchar(125) not null comment 'Username password',
    primary key (USER_ID)
) engine=InnoDB default charset=utf8 comment 'Users able to login';

