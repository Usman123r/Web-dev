<?php
session_start();
include 'yes2.php';

// Assuming $connect is your database connection variable, make sure it's properly initialized before using it

if (isset($_SESSION['user_id'])) {
    header("Location: exer.html");
    exit;
}

$error = '';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = hash("md5", $password);

    // Assuming your database table name is 'users'
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password_hash'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['name'];
        header("Location: exer.html");
        exit;
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;100;700;300;500;400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .heading {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-field {
            margin-bottom: 15px;
        }

        .form-field p {
            margin: 0;
            color: #777;
        }

        .form-field input[type="email"],
        .form-field input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }

        #loginbtn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        #loginbtn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="heading">Login</h2>
        <?php if (!empty($error)) : ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <div class="form-field">
                <p>Email</p>
                <input type="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-field">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter your password">
            </div>
            <input type="submit" name="login" id="loginbtn" value="Login">
        </form>
    </div>
</body>
</html>
