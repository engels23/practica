CREATE DATABASE IF NOT EXISTS dbmain;
USE dbmain;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'admin');

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_code VARCHAR(50) NOT NULL,
    product_name VARCHAR(100) NOT NULL,
    description TEXT,
    quantity INT NOT NULL
);

INSERT INTO products (product_code, product_name, description, quantity) VALUES
('P001', 'Producto 1', 'Descripción del producto 1', 100),
('P002', 'Producto 2', 'Descripción del producto 2', 200);