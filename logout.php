<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Successful</title>

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css"> 


    <section id="hero-animated" class="hero-animated d-flex align-items-center">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
        </div>
    </section>

    <style>
        body {
            background-color: #f4f6f9; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }
        .logout-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h2 {
            color:orange;
            font-weight: 600;
        }
        p {
            color: #555;
            margin-top: 10px;
        }
        .btn-home {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
            display: inline-block;
            margin-top: 15px;
        }
        .btn-home:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="logout-container">
        <img src="assets/img/login.jpg" alt="Logout Icon" width="80">
        <h2><i>Logout Successful</i> </h2>
        <p>You have successfully logged out. See you again soon!</p>
        <a href="index.php" class="btn-home">Go to Home</a>
    </div>

</body>
</html>
