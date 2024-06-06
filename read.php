<?php
include 'Database.php';
include 'User.php';

// Create an instance of the Database class and get the connection
$database = new Database();
$db = $database->getConnection();

// Create an instance of the User class
$user = new User($db);
$result = $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <style>
        /* Basic CSS reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Action links styling */
        .action-link {
            display: inline-block;
            padding: 4px 8px;
            text-decoration: none;
            color: #007bff;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .action-link:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Level</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Fetch each row from the result set
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["matric"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["role"]; ?></td>
                    <td><a class="action-link" href="update_form.php?matric=<?php echo $row["matric"]; ?>">Update</a></td>
                    <td><a class="action-link" href="delete.php?matric=<?php echo $row["matric"]; ?>">Delete</a></td>
                </tr>
                <?php
            }
        } else {
            echo "<tr><td colspan='3'>No users found</td></tr>";
        }
        // Close connection
        $db->close();
        ?>
    </table>
     <!-- Logout button -->
     <a href="login.php" class="logout-button">Logout</a>
</body>

</html>