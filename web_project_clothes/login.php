


<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['pass'];

		if(!empty($email) && !empty($password))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['pass'] === $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
    </div>




    <div class="container">
        <h2>Logn In</h2>
        <form  method="post">

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" id="email" name="email" placeholder="Enter your username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" placeholder="Enter your password" required>
            </div>
            <div class="form-group">


            <input id="button" type="submit" value="Login"><br><br>

            <a href="signup.php">Click to Signup</a><br><br>

            </div>
        </form>
    </div>
</body>

</html>