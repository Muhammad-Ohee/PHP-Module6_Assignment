<!DOCTYPE html>
<html>
<head>
    <title>Task Results</title>
    <style>
        .container {
            display: flex;
        }

        .task {
            flex: 1;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Task Results</h1>
    <div class="container">
        <div class="task">
            <h2>Task 1: Customer Orders</h2>
            <?php include 'task1.php'; ?>
        </div>
        <div class="task">
            <h2>Task 2: Order Items</h2>
            <?php include 'task2.php'; ?>
        </div>
        <div class="task">
            <h2>Task 3: Category Revenue</h2>
            <?php include 'task3.php'; ?>
        </div>
        <div class="task">
            <h2>Task 4: Top Customers</h2>
            <?php include 'task4.php'; ?>
        </div>
    </div>
</body>
</html>
