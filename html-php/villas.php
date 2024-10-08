<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <title>Villas</title>
    <style>
            .middle{
                    width:100%;
                    height: 500px;
                    background-image: url("/RMS/img/villa2.jpg");
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
                background-image: url("/RMS/img/villa2.jpg");
            }
            35%{
                background-image: url("/RMS/img/villa3.jpg");
            }
            75%{
                background-image: url("/RMS/img/villa4.jpg");
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
            Villa Deluxe Queen
        </h1>
        <img src="/RMS/img/villaQueen.jpg" alt="villaQueen">
        <p>
            <b>Room Capacity:</b>2 Adults/room(Total 4)<br>
            <b>Rates:</b>19000++/ Night<br>
        </p>
        <p>
            These rooms are in the lower floor of the Villas. These rooms have Queen size beds facing towards the balcony,<br>
            The balcony features a open air bath-tub over looking the serpentine lake and the tea garden beyond it.
        </p>
        <p><a href="/RMS/html-php/booking.php">Book Now</a><p>
    </div>

    <div class="header2">
        <h1 style="text-align: center;">
            Villa Deluxe King
        </h1>
        <img src="/RMS/img/villaKing.jpg" alt="villaKing">
        <p>
            <b>Room Capacity:</b>2 Adults/Room(Total 6: 4 Adults, 2 Children)<br>
            <b>Rates:</b>16000++/ Night<br>
        </p>
        <p>
            These rooms are in the upper floor of the villas featuring 20’ high natural thatch roof.
             These rooms have King size four poster beds. These rooms also have balcony with open air bath tub.
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