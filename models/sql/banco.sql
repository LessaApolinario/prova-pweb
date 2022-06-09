CREATE DATABASE pweb;

USE pweb;

CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(200),
    senha VARCHAR(200)
);