create table users(
       id int PRIMARY KEY AUTO_INCREMENT,
       name varchar (50) not null,
       email varchar (50) not null,
       password varchar (50) not null
);

create table users(
       id int PRIMARY KEY AUTO_INCREMENT,
       idUser FOREIGN KEY (users.id) REFERENCES users(users.id)
       name varchar (50) not null,
       content varchar (50) not null,
       subject varchar (50) not null,
       time TIME,
       date DATE,
);