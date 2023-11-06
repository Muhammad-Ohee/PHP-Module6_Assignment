CREATE TABLE `Order_Items` (
    `order_item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `order_id`  bigint(20) UNSIGNED NOT NULL,
    `product_id` bigint(20) UNSIGNED NOT NULL,
    `quantity` INT,
    `unit_price` DECIMAL(10, 2),

    FOREIGN KEY (`order_id`) REFERENCES `Orders`(`order_id`) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (`product_id`) REFERENCES `Products`(`product_id`) ON DELETE RESTRICT ON UPDATE CASCADE
);

/*

Categories: Contains information about the different categories of products, such as category ID and name.

*/