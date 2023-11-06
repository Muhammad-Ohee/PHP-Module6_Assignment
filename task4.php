<?php
// Database connection parameters
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'module6_assignment';

// Create a database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// SQL query for Task 4
$sql = "SELECT c.name AS customer_name, SUM(oi.quantity * p.price) AS total_purchase_amount
        FROM Customers c
        LEFT JOIN Orders o ON c.customer_id = o.customer_id
        LEFT JOIN Order_Items oi ON o.order_id = oi.order_id
        LEFT JOIN Products p ON oi.product_id = p.product_id
        GROUP BY c.name
        ORDER BY total_purchase_amount DESC
        LIMIT 5;";

$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>Customer Name</th>
        <th>Total Purchase Amount</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['customer_name'] . "</td><td>" . $row['total_purchase_amount'] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No data available</td></tr>";
    }
    ?>
</table>

<?php
$conn->close();
?>
