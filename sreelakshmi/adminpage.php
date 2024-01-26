<?php
// Start the session to check if the user is logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('school2.jpg'); /* Add the path to your image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        h2 {
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.8); /* Adjust the background color and opacity */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .action-link {
            display: block;
            margin-bottom: 10px;
            text-decoration: none;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .action-link:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Welcome to the Admin Page</h2>
    <p>This is the admin-only area.</p>

    <!-- Action Links -->
    <a class="action-link" href="teacher.php">Register Teachers</a>
    <a class="action-link" href="studentadd.php">Add Students</a>
    <a class="action-link" href="remove_teachers.php">Remove Teachers</a>

    <p><a href="logout.php">Logout</a></p>
</div>

</body>
</html>
