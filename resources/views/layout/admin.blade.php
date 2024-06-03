<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
            @if(auth()->check())
                <a href="{{route('admin.drivers')}}">Drivers</a>
                <a href="{{route('admin.schedule')}}">Schedule</a>
                <a href="{{route('admin.checkpoint')}}">Checkpoint</a>
                <a href="{{route('admin.logout')}}">Log Out</a>
            @else
                <a href="{{ route('accounts') }}">Home</a>
                <a href="{{ route('admin.login') }}">Admin</a>
                <a href="{{route('passenger.businfo')}}">Passenger</a>
            @endif
        </nav>
    </header>

    @yield('content')

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "150px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
