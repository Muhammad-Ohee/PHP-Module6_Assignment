CREATE TABLE `Orders` (
    `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `customer_id` bigint(20) UNSIGNED NOT NULL,
    `order_date` DATE,
    `total_amount` DECIMAL(10, 2),

    FOREIGN KEY (`customer_id`) REFERENCES `Customers`(`customer_id`) ON DELETE RESTRICT ON UPDATE CASCADE
);

/*

Orders: Contains information about the orders placed by customers, such as order ID, customer ID, order date, and total amount.

*/