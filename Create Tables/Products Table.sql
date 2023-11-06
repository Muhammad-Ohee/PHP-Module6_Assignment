CREATE TABLE `Products` (
    `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `price` DECIMAL(10, 2),
    `category_id` bigint(20) UNSIGNED NOT NULL,

    FOREIGN KEY (`category_id`) REFERENCES `Categories`(`category_id`) ON DELETE RESTRICT ON UPDATE CASCADE
);

/*

Products: Contains information about the products available for purchase, such as product ID, name, description, and price.

*/