<html>
<head>
<title>login</title>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #595;
            border: 1px solid #ccc;
            padding: 20px;
            width: 400px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #348;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #000;
        }
    </style>
</head>
<body>
<form action="check-login.php" method="POST">
   Username: <input type="text" name="username"><br>
   Password: <input type="password" name="password"><br>
   <input type="submit" value="Login">
</form>
</body>
</html>
