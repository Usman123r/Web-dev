<?php
include 'yes2.php';
$success = 0;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = hash("md5", $password);

    $query = "INSERT INTO users(name, email, password) VALUES(\"$name\",\"$email\",\"$password_hash\")";
    $result = mysqli_query($connect, $query);

    if ($result) {
        $success = 1;
        echo '<script>';
        echo 'alert("Successfully registered!");';
        echo 'window.location.href = "exer.php";';
        echo '</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        $success = 0;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Signup</title>
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
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .heading {
            color: #333;
            text-align: center;
        }

        .form-field {
            margin-bottom: 15px;
        }

        .form-field p {
            margin: 0;
            color: #777;
        }

        .form-field input[type="text"],
        .form-field input[type="email"],
        .form-field input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        #submitbtn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        #submitbtn:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
            <h2 class="heading">Create account</h2>

            <div class="form-field">
                <p>Your Name</p>
                <input type="text" name="name" placeholder="Enter your username">
            </div>

            <div class="form-field">
                <p>Your Email</p>
                <input type="email" name="email" placeholder="Enter your email">
            </div>

            <div class="form-field">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter your password">
                <div id="passResult" class="result" style="color:red;"></div>
            </div>

            <input type="submit" name="submit" id="submitbtn" value="Submit">
        </form>
    </div>
</body>

</html>
