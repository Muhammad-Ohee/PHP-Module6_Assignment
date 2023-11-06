/*
Write a SQL query to retrieve the product name, quantity, and 
total amount for each order item. Display the result in ascending order of the order ID.
*/

SELECT o.order_id, p.name AS product_name, oi.quantity, (oi.quantity * p.price) AS total_amount
FROM Orders o
LEFT JOIN Order_Items oi ON o.order_id = oi.order_id
LEFT JOIN Products p ON oi.product_id = p.product_id
ORDER BY o.order_id ASC;
