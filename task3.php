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

// SQL query for Task 3
$sql = "SELECT c.name AS category_name, SUM(oi.quantity * p.price) AS total_revenue
        FROM Categories c
        LEFT JOIN Products p ON c.category_id = p.category_id
        LEFT JOIN Order_Items oi ON p.product_id = oi.product_id
        GROUP BY c.name
        ORDER BY total_revenue DESC;";

$result = $conn->query($sql);
?>

<table border="1">
    <tr>
        <th>Category Name</th>
        <th>Total Revenue</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['category_name'] . "</td><td>" . $row['total_revenue'] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='2'>No data available</td></tr>";
    }
    ?>
</table>

<?php
$conn->close();
?>
