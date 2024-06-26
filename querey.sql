

/* Q1- */;
SELECT product.name,
       SUM(stock_transactions.quantity) AS current_stock
FROM product LEFT JOIN stock_transactions ON product.id = stock_transactions.product_id
GROUP BY product.name;


/* Q2- */;
SELECT product.name,
       SUM(CASE WHEN stock_transactions.type = 'sold' THEN stock_transactions.quantity ELSE 0 END) AS total_sold,
       SUM(CASE WHEN stock_transactions.type = 'purchased' THEN stock_transactions.quantity ELSE 0 END) AS total_purchased
FROM product product
         JOIN stock_transactions  ON product.id = stock_transactions.product_id
GROUP BY product.name;


/* Q3- */;

SELECT product.name,
       AVG(CASE WHEN stock_transactions.type = 'sold' THEN stock_transactions.price ELSE NULL END) AS average_sold_price
FROM product
         JOIN stock_transactions  ON product.id = stock_transactions.product_id
WHERE stock_transactions.type = 'sold'  -- Only consider 'sold' transactions
GROUP BY product.name;