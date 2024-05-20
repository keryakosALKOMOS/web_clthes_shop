<?php
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $f_name = $_POST['f_name'];
    $s_name = $_POST['s_name'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    if (!empty($f_name) && !empty($s_name) && !empty($email) && !empty($password)) {

        // Save to the database
        
        $query = "INSERT INTO users (f_name, s_name, email, pass) VALUES ('$f_name', '$s_name', '$email', '$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    } else {
        echo "Please enter valid information in all fields!";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Document</title>
</head>
<header>

</header>

<body>


    <div class="header">
        <span class="logo"><span class="material-symbols-outlined">
                checkroom
            </span></span>
        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class='bx bx-menu' id="menu-icon" style="color: blue;"></i>
            <i class='bx bx-x' id="close-icon" style="color: blueviolet;"></i>
        </label>


        <div class="navbar">

            <a href="index.php">Home</a>

            <!-- <a href="index.html">Contact</a> -->


            <a href="login.php" target="_blank">log in</a>
            <a href="signup.php">Sign Up</a>


        </div>
    </div>




    <div class="container">
        <h2>Sign UP</h2>
        <form  method="post">

        <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="f_name" placeholder="Enter your first name" required>

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="s_name" placeholder="Enter your Last name" required>

                <label for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your Email" required>
            </div>

            <div class="form-group">
            <label for="password">Password:</label>
                <input type="password" id="password" name="pass" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign UP</button>

            </div>
        </form>
    </div>

    <footer>
        <p><span style="margin-right: 100px;">&copy; 2023 Your kkb website. All rights reserved.</span><span
                id="datetime"></span></p>
    </footer>

    <script>
        function updateDateTime() {
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric', timeZoneName: 'short' };
            const formattedDateTime = now.toLocaleDateString('en-US', options);
            document.getElementById('datetime').textContent = formattedDateTime;
        }

        // Update the date and time every second
        setInterval(updateDateTime, 1000);

        // Initial call to set the date and time when the page loads
        updateDateTime();
    </script>
</body>

</html>