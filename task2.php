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

// SQL query for Task 2
$sql = "SELECT o.order_id, p.name AS product_name, oi.quantity, (oi.quantity * p.price) AS total_amount
        FROM Orders o
        LEFT JOIN Order_Items oi ON o.order_id = oi.order_id
        LEFT JOIN Products p ON oi.product_id = p.product_id
        ORDER BY o.order_id ASC;";

$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>Order ID</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Total Amount</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['order_id'] . "</td><td>" . $row['product_name'] . "</td><td>" . $row['quantity'] . "</td><td>" . $row['total_amount'] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No data available</td></tr>";
    }
    ?>
</table>

<?php
$conn->close();
?>
