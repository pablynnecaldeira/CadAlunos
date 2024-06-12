-- Criação do banco de dados
CREATE DATABASE user_registration;

-- Selecionar o banco de dados
USE user_registration;

-- Criação da tabela de usuários
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    rg VARCHAR(20) NOT NULL,
    endereco VARCHAR(255) NOT NULL
);

-- Inserção de dados de exemplo (opcional)
INSERT INTO usuarios (nome, cpf, rg, endereco) VALUES 
('João Silva', '12345678901', 'MG1234567', 'Rua A, 123, Bairro B, Cidade C'),
('Maria Oliveira', '98765432100', 'SP7654321', 'Avenida X, 456, Bairro Y, Cidade Z');


CREATE DATABASE user_cadastro;

use user_cadastro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL
);

