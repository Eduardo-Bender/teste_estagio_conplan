SELECT 
    c.nome AS cliente,
    p.nome AS produto,
    p.preco AS preco
FROM pedidos pd
JOIN clientes c ON pd.id_cliente = c.id
JOIN produtos p ON pd.id_produto = p.id
ORDER BY c.nome, p.nome;