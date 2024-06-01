<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS</title>
</head>
<body>
    <Style>
        header {
            margin: 0;
            padding: 0;
        }
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
    </Style>
    
    <header>
        <nav>
            <a href="{{route('accounts')}}">Home</a>
            <a href="{{route('admin.login')}}">Admin</a>
            <a href="{{route('passenger.login')}}">Passenger</a> 
        </nav>
    </header>
    <tbody>
        <h1>LANDING PAGE</h1>
    </tbody>
</body>
</html>