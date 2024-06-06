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
            flex-direction: column;
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
        input[type="password"] {
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

        /* Register button styling */
        .register-button {
            display: inline-block;
            text-align: center;
            background: #28a745;
            color: #fff;
            padding: 10px; /* Reduced padding */
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px; /* Reduced font size */
        }

        .register-button:hover {
            background: #218838;
        }
    </style>
</head>

<body>
    <h1>Login Page</h1>
    <form action="authenticate.php" method="post">
        <label for="matric">Matric:</label>
        <input type="text" name="matric" id="matric" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <b>
    <a href="registration.php" class="register-button">Register</a>
</body>

</html>
