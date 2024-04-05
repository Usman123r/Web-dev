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
        echo 'window.location.href = "signup.php";';
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
    <title>signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=roboto:wght@400;
100;700;300;500;400&display=swap" rel="stylesheet">
    
</head>

<body>
    
            <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                <h2 class="heading heading-yellow">Create account</h2>

                <div class="form-field">
                    <p>your name</p>
                    <input type="text" id="username" name="name" placeholder="Enter your username">
                </div>
                

                <div class="form-field">
                    <p>your email</p>
                    <input type="email" name="email" id="email" placeholder="Enter your emaail or phone number">
                </div>

                <div class="form-field">
                    <p>password</p>
                    <input type="password" name="password" placeholder="Enter your password" id="password" style="margin-left: 35px;">
                    <div id="passResult" class="result" style="color:red;"></div>
                </div>
                
                <input type="submit" name="submit" id="submitbtn" value="submit" style="background-color: green;">
            </form>

</body>

</html>