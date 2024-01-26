<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $class = $_POST["class"];
    $sid = $_POST["sid"];
    $sname = $_POST["sname"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $status = "Present";

    // Insert data into the dynamically created table
    $insertDataQuery = "INSERT INTO `$class` (sid, sname, status, address, contact) VALUES ('$sid', '$sname', '$status', '$address', '$contact')";
    if ($conn->query($insertDataQuery) === TRUE) {
        echo "Student data added successfully!";
    } else {
        echo "Error: " . $insertDataQuery . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!-- HTML form for student data -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            background-image: url('school6.jpg'); /* Set the background image */
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Add more styles as needed */
    </style>
</head>
<body>

<h2>Add Student Data</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Class:
    <select name="class" required>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="4th">4th</option>
        <option value="5th">5th</option>
        <option value="6th">6th</option>
        <option value="7th">7th</option>
        <option value="8th">8th</option>
        <option value="9th">9th</option>
        <option value="10th">10th</option>
        <option value="11th">11th</option>
        <option value="12th">12th</option>
    </select><br>
    Student ID: <input type="text" name="sid" required><br>
    Student Name: <input type="text" name="sname" required><br>
    Contact: <input type="text" name="contact" required><br>
    Address: <input type="text" name="address" required><br> 
    <input type="submit" value="Add Student Data">
</form>

</body>
</html>
