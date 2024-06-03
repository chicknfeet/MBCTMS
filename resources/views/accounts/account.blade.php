<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mariveles Mini Bus Coop Transport Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        nav {
            background-color: #333;
            height: 50px;
            width: 100%;
            display: inline-flex;
            padding-left: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
        }

        nav a {
            margin: 15px;
            
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        nav a:hover {
            color: #555;
        }

        nav a:hover:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            color: #fff;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
            color: #333;
        }

        header {
            background-color: #fff;
            color: #333;
            text-align: center;
            padding: 20px 0;
            animation: fadeInUp 1s ease-out;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            animation: fadeIn 1s ease-out;
        }

        h1, h2 {
            margin-top: 0;
        }

        p {
            margin-bottom: 20px;
        }

        .welcome {
            text-align: center;
            margin-bottom: 40px;
            animation: fadeIn 1s ease-out;
        }

        .about {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            text-align: justify;
            text-justify: inter-word;
            animation: fadeIn 1s ease-out;
        }

        .about h2 {
            color: #007bff;
        }

        footer {
            text-align: center;
            color: #000;
            position: fixed;
            width: 100%;
            bottom: 0;
            background-color: #fff;
            padding: 10px 0;
            animation: fadeInUp 1s ease-out;
        }

        /* Animations */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

<nav>
    <a href="{{route('accounts')}}">Home</a>
    <a href="{{route('admin.login')}}">Admin</a>
    <a href="{{route('passenger.businfo')}}">Passenger</a>
</nav>

<header>
    <h1>Welcome to Mariveles Mini Bus Coop</h1>
    <p>Transport Management System</p>
</header>

<div class="container">
    <div class="welcome">
        <h2>Welcome!</h2>
        <p>We're pleased to extend a warm welcome to you. Mariveles Mini Bus Coop is dedicated to offering seamless transportation solutions to our valued customers.</p>
    </div>
    <section class="about">
        <h2>About Us</h2>
        <p>Mariveles Mini Bus Coop takes pride in its mission to offer dependable and efficient transportation services catering to both residents and visitors of Mariveles. With a focus on reliability and excellence, our Transport Management System ensures streamlined operations, providing passengers with a hassle-free travel experience.</p>
    </section>
</div>

<footer>
    <p>&copy; 2024 Mariveles Mini Bus Coop. All rights reserved.</p>
</footer>

</body>
</html>
