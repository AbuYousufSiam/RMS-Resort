<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <title>Rooms</title>
    <style>
        .middle{
    width:100%;
    height: 400px;
    background-image: url("/RMS/img/room1.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: scroll;
    text-align: center;
    font-size: 25px;
    margin-bottom: 10px;
    border-bottom: 1px black;
    animation: slider 15s infinite linear;
}
@keyframes slider{
    0%{
        background-image: url("/RMS/img/room1.jpg");
    }
    35%{
        background-image: url("/RMS/img/room4.jpg");
    }
    75%{
        background-image: url("/RMS/img/room3.jpg");
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

    <div class="headerl">
        <h1 style="text-align: center;">
            Superior King / Twin
        </h1>
            <img src="/RMS/img/room2.jpg" alt="Superior Room">
        
        <p>
            <b>Room Capacity:</b>2 Adults / Room<br>
            <b>Rates:</b>12000++/ Night<br>
            There are 18 Superior class rooms on the three floors of the north side of the main hotel building.
             These rooms sporting wooden designed linear floor tiles have all the international standard room and
              bathroom amenities & facilities.
        </p>
        <p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>

    <div class="header2">
        <h1 style="text-align: center;">
            Premium King / Twin
        </h1>
        <img src="/RMS/img/room1.jpg" alt="Premium Room">
        <p>
            <b>Room Capacity:</b>2 Adults / Room<br>
            <b>Rates:</b>14000++/ Night<br>
            There are 12 Premium rooms on the south (front) side of the Main Hotel.
             These rooms have wooden parquet floors south facing private balconies overlooking the tree-infested main garden.
        </p>
        <p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>
    <!-- footer -->
    <div class="footer">
        <p style="font-size: 60px;"><b>Tusti Resort</b></p><br>
        <p style="font-size: 20px;">59/A,Mouchak,Gazipur,Dhaka</p><br>
        <p style="font-size: 15px;">Contact Us: +880 01712577638, Hotline:  +880 1617005522</p>
    </div>
    
</body>
</html>