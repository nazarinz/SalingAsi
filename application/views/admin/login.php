<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #f2f2f2;
        }
        
        .container {
            width: 100%;
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 3px;
            background-color: #f2f2f2;
        }
        
        input[type=submit] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #5FBECD;
            color: #fff;
            cursor: pointer;
        }
        
        input[type=submit]:hover {
            background-color: #5FBECD;
        }
        
        .error-message {
            color: #FF0000;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Admin Login</h2>
        <?php echo isset($error_message) ? '<div class="error-message">' . $error_message . '</div>' : ''; ?>
        <form action="<?php echo base_url('admin/login'); ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>