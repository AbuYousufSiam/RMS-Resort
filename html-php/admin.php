<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="/RMS/css/style_admin.css">
    <title>Admin Page</title>
    <style>
        .background{
            background-image: url(/RMS/img/home2.jpg);
            height:665px;
        }
        a{
            color: whitesmoke;
            text-decoration: none;
        }
        
    </style>

    <title>Admin Page</title>
</head>
<body>
    <h1>Admin Page</h1>
    <div class= "background">
    <!--Navigation Bar-->
    <nav>
    <div class="logo"><a href="/RMS/html-php/home.php">Tusti Resort</a></div>
        <ul>
            <li><a href="/RMS/html-php/admin.php">Admin Page</a></li>
            <li><a href="#">Manage Admins</a>
                <ul>
                    <li><a href="/RMS/html-php/admin-list.php">Admins List</a></li>
                    <li><a href="#">Update Admin List</a></li>
                </ul>
            </li>
            <li><a href="#">Accomodations</a>
                <ul>
                    <li><a href="/RMS/html-php/admin_room.php">Rooms</a></li>
                    <li><a href="/RMS/html-php/admin-villa.php">Villas</a></li> 
                    <li><a href="/RMS/html-php/admin-meeting.php">Meeting Rooms & Halls</a></li>
                </ul>
            </li>
            <li><a href="#">Reservations</a>
                <ul>
                    <li><a href="#">Reserved Rooms</a></li>
                    <li><a href="#">Available Rooms</a></li>
                    <li><a href="#">Reserved Villas</a></li>
                    <li><a href="#">Available Villas</a></li>
                    <li><a href="#">Reserved Meeting Rooms & Halls</a></li>
                    <li><a href="#">Available Meeting Rooms & Halls</a></li>
                </ul>
            </li>
            <li><a href="/RMS/html-php/home.php">Log Out</a></li>
        </ul>
    </nav>

    </div>

<!-- before body tag ends, paste this jquery cdn-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   
</body>
</html>

<!-- http://localhost/RMS/html-php/admin.php -->
