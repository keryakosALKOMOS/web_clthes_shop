

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

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

            <a href="#contact">Contact</a>
            <a href="logout.php">logout</a>

        </div>
    </div>

    <section class="main">
        <div>
            <h2><span>WEAR IT</span><br>FOR MEN CLOTHES</h2>
            <h3 style="color: rgb(114, 114, 114);">We Got All You Need 
             <span id="fname"> <?php  echo $user_data['f_name']; ?></span>
            </h3>
            <a href="#men" class="m-btn">shop now</a>
            <div class="icons">

            </div>
        </div>
        <br>
        <hr>
    </section>






    <section class="pro-hp" id="men">
        <h2 class="projects-header">Men</h2>
        <div class="all-ph">
            <div class="image">
                <a href="l1.html"><img src="image/shart1-removebg-preview.jpg" alt=""></a>

            </div>
            <div class="inf">
                <h4>
                    Thinking out box t-shirt
                </h4>
                <p>This 6.0 oz ultra cotton t-shirt is a staple that would go with almost any outfit. Quarter-turned
                    with taped neck and shoulders and a seven-eighths inch collar</p>
            </div>
        </div>

        <div class="all-ph">
            <div class="image">
                <a href="l2.html"><img src="image/t2.jpeg" alt=""></a>
            </div>
            <div class="inf">
                <h4>
                    T-shirt from adidas
                </h4>
                <p>so nice cotton t-shirt made in hand with image in it have alot of texture and details</p>
            </div>
        </div>
        <div class="all-ph">
            <div class="image">
                <a href="l3.html"><img src="image/t5.jpg" alt=""></a>
            </div>
            <div class="inf">
                <h4>
                    T-shirt from adidas
                </h4>
                <p>so nice cotton t-shirt made in hand with image in it have alot of texture and details</p>
            </div>
        </div>
        <div class="all-ph">
            <div class="image">
                <a href="t4.html"><img src="image/t6.jpg" alt=""></a>
            </div>
            <div class="inf">
                <h4>
                    T-shirt from adidas
                </h4>
                <p>so nice cotton t-shirt made in hand with image in it have alot of texture and details</p>
            </div>
        </div>
        <div class="all-ph">
            <div class="image">
                <a href="l4.html"><img src="image/kid1.webp" alt=""></a>
            </div>
            <div class="inf">
                <h4>
                    T-shirt from adidas
                </h4>
                <p>so nice cotton t-shirt made in hand with image in it have alot of texture and details</p>
            </div>
        </div>
        <div class="all-ph">
            <div class="image">
                <a href="t6.html"><img src="image/kid2.webp" alt=""></a>
            </div>
            <div class="inf">
                <h4>
                    T-shirt from adidas
                </h4>
                <p>so nice cotton t-shirt made in hand with image in it have alot of texture and details</p>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2 class="contact-header">BE MY GHEST</h2>
        <div class="contact-card">
            <div class="c-image">

                <i class="fa-solid fa-envelope"></i>



            </div>
            <div class="inf">
                <h4>

                    <a href="mailto:info@example.com">info@example.com</a>
                </h4>

            </div>
        </div>

        <div class="contact-card">
            <div class=" c-image">
                <i class="fa-solid fa-phone"></i>
                </span>
            </div>
            <div class="inf">
                <h4 style="display: inline-block;">

                    <a href="tel:18005551212">+201208063619</a>
                    <a href="tel:18005551212">+201208063619</a>


                </h4>

            </div>
        </div>

    </section>


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