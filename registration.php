<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Basic CSS reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form container styling */
        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        /* Label styling */
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        /* Input and select styling */
        input[type="text"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Submit button styling */
        input[type="submit"] {
            background: #007BFF;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        /* Cancel button styling */
        .cancel-button {
            display: inline-block;
            text-align: center;
            background: #dc3545;
            color: #fff;
            padding: 10px;
            border-radius: 4px;
            text-decoration: none;
            width: 100%;
            font-size: 16px;
        }

        .cancel-button:hover {
            background: #c82333;
        }

        /* Optional: styling for the select dropdown */
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('data:image/svg+xml;utf8,<svg fill="none" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5H7z" fill="%23333"/></svg>') no-repeat right 10px center/16px 16px;
        }
    </style>
</head>

<body>
    <form action="insert.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <label for="role">Role:</label>
        <select name="role" id="role" required>
            <option value="">Please select</option>
            <option value="lecturer">Lecturer</option>
            <option value="student">Student</option>
        </select><br>
        <input type="submit" name="submit" value="Submit">
        <a href="login.php" class="cancel-button">Cancel</a>
    </form>
    
</body>

</html>

