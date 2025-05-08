CREATE TABLE IF NOT EXISTS produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);

INSERT INTO produtos (nome,preco) VALUES
('Notebook gamer', 4999.99),
('Pelucia do Xin Zhao', 39.99),
('Fone QCY T13', 139.99);