<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <title>Special Offers</title>
    <style>
        .middle{
    width:100%;
    height: 400px;
    background-image: url("/RMS/img/home1.jpg");
    background-size: 100% 100%;
    background-repeat: no-repeat;
    background-attachment: scroll;
    text-align: center;
    font-size: 25px;
    margin-bottom: 10px;
    animation: slider 12s infinite linear;
    }
    @keyframes slider{
    0%{
        background-image: url("/RMS/img/home1.jpg");
    }
    35%{
        background-image: url("/RMS/img/home2.jpg");
    }
    75%{
        background-image: url("/RMS/img/home3.jpg");
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
 
    <div class="div1">
         <div class="left">
             <h3>Feel the the luxury and peace in</h3> <br>
             <h3>TUSTI RESORT</h3>
         </div> 
         <div class="right">
            <h4>ADDED ATTRACTIONS!!!</h4>
            <ul>
                <li><i class="fa fa-coffee" style="font-size:36px;color:rgb(250, 248, 248);"></i> Complementary Breakfast  </li><br>
                <li><i class="fa fa-wifi" style="font-size:36px; color:rgb(250, 248, 248); "></i> Free Wifi </li><br>
                <li><i class="fa fa-heartbeat" style="font-size:36px;color:rgb(250, 248, 248);"></i>  Gym  </li><br>
            </ul>
        </div>
     </div>

    <div class="headerl">
        <h1>
            RAMADAN SPECIAL OFFER
        </h1>
        <img src="/RMS/img/offer1.jpg" alt="Offer">
        <p style="font-size: 30px;text-align: left; padding: 0;margin: 0;"><b>Offer Includes:</b></p>
            <ul style="padding: 20px;">
                <li>One night Stay</li>
                <li>Special set meal Sehri, Iftar cum dinner</li>
                <li>Complimentary Wi-Fi access throughout the entire resort premises.</li>
            </ul>
        <p><a href="/RMS/html-php/booking.php">Book Now</a><p>
        
    </div>

    <div class="footer">
        <p style="font-size: 60px;"><b>Tusti Resort</b></p><br>
        <p style="font-size: 20px;">59/A,Mouchak,Gazipur,Dhaka</p><br>
        <p style="font-size: 15px;">Contact Us: +880 01712577638, Hotline:  +880 1617005522</p>
    </div>
</body>
</html>