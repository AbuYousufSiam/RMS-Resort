<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    
    <title>Meetings</title>
    <style>
                .middle{
                width:100%;
                height: 500px;
                background-image: url("/RMS/img/conference-hall.jpg");
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-attachment: scroll;
                text-align: center;
                font-size: 25px;
                margin-bottom: 10px;
                border-bottom: 1px black;
                animation: slider 20s infinite linear;
            }

        @keyframes slider{
       0%{
            background-image: url("/RMS/img/conference-hall.jpg");
        }
        25%{
            background-image: url("/RMS/img/dining-hall.jpg");
        }
        50%{
            background-image: url("/RMS/img/large-meeting.jpg");
        }
        75%{
            background-image: url("/RMS/img/small-meeting.jpg");
        }
        100%{
            background-image: url("/RMS/img/lounge-room.jpg");
        }
        }

        .middle h1{
        font-size: 75px;
        font-style: oblique;
        color: rgb(34, 2, 2);
        }       
    
    </style>
</head>
<body>
    <div class="bar">
        <ul>
            <li><a href="/RMS/html-php/home.php">Home</a></li>
            <li><a href="/RMS/html-php/rooms.php">Rooms</a></li>
            <li><a href="/RMS/html-php/villas.php">Villas</a></li>
            <li><a href="/RMS/html-php/meeting.php">Meeting</a></li>
            <li><a href="/RMS/html-php/dining.php">Dining</a></li>
            <li><a href="/RMS/html-php/offers.php">Special Offers</a></li>
            <li><a href="/RMS/html-php/booking.php">Book Now</a></li>
            <li><a href="/RMS/html-php/review.php">Reviews</a></li>
        </ul>
    </div> 

    <div class="middle">
        <h1>Tusti Resort</h1>
        <p style = "color: rgb(250, 248, 248);">"Discover a resort that defines a new dimension of luxury."</p>
    </div>

    <div class="info">

        <h1>MEETING ROOMS & HALLS</h1>
        <br>
        <p style="font-size: 30px;">Features and facilities:</p>
        <ul>
                <li>A 120 seater main Conference Hall. (Theater Style seating)</li>
                <li>A 80 seater Dining Hall</li>
                <li>A Lounge Room</li>
                <li>A 19 seater large Meeting Room</li>
                <li>A 7 seater small Meeting Room</li>
                <li>20 rooms accommodating upto 60 persons</li>
                <li>Business Center</li>
                <li>Car Parking for 40 vehicles</li>
        </ul>
    </div>

    <!-- <div class="headerl">
        <h1 style="text-align: center;">
            Convension Centre
        </h1>
        <img src="/img/convension-centre.jpg" alt="Convension Centre">
        <br><p><a href="/html/booking.html">Book Now</a><p>
    </div> -->

    <div class="headerl">
        <h1 style="text-align: center;">
            Conference Hall
        </h1>
        <img src="/RMS/img/conference-hall.jpg" alt="Conference Hall">
        <br><p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>
    
    <div class="header2">
        <h1 style="text-align: center;">
            Dining Hall
        </h1>
        <img src="/RMS/img/dining-hall.jpg" alt="Dining Hall">
        <br><p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>

    <div class="headerl">
        <h1 style="text-align: center;">
            Lounge Room
        </h1>
        <img src="/RMS/img/lounge-room.jpg" alt="Lounge Room">
        <br><p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>
    
    <div class="header2">
        <h1 style="text-align: center;">
            Large Meeting Room
        </h1>
        <img src="/RMS/img/large-meeting.jpg" alt="Large Meeting Room">
        <br><p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>

    <div class="headerl">
        <h1 style="text-align: center;">
            Small Meeting Room
        </h1>
        <img src="/RMS/img/small-meeting.jpg" alt="Small Meeting Room">
        <br><p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>
    
    <!-- footer -->
    <div class="footer" style="margin-bottom:0px;">
        <p style="font-size: 60px;"><b>Tusti Resort</b></p><br>
        <p style="font-size: 20px;">59/A,Mouchak,Gazipur,Dhaka</p><br>
        <p style="font-size: 15px;">Contact Us: +880 01712577638, Hotline:  +880 1617005522</p>
    </div>

</body>
</html>