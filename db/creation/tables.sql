USE bookstore;

CREATE TABLE user (
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment 'User id',
    username VARCHAR(20) NOT NULL comment 'Username',
    email VARCHAR(50) NOT NULL comment 'Username email',
    password VARCHAR(125) NOT NULL comment 'Username password'
);

