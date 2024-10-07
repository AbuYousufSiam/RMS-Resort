<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <link rel="stylesheet" href="/RMS/css/styleform.css">
    <title>Booking Page</title>
</head>
<body>

    <!--Navigation Bar-->
    <div class="bar">
        <ul>
            <li><a href="/RMS/html-php/home.php">Home</a></li>
            <li><a href="/RMS/html-php/info.php">Info</a></li>
            <li><a href="/RMS/html-php/login.php">Log In</a></li>
            <li><a href="/RMS/html-php/cancelbooking.php">Cancel Booking</a></li>
            <li><a href="/RMS/html-php/CheckBookingStatus.php">Check Booking Status</a></li>
            <li><a href="/RMS/html-php/review.php">Reviews</a></li>
        </ul>
    </div>

    <!--Check Availability-->
    <!--CSS from Review-Form-->
    <div class="review-form">
        <div class="review-heading">
            <h1>Check Availability:</h1>
        </div>
        <div class="review-form-input">
            <form>
                <label for="name"><b>Check In Date:</b></label><br>
                <input type="date" id="check-in" name="check-in"><br>
                
                <label for="email"><b>Check Out Date:</b></label><br>
                <input type="date" id="check-out" name="check-out"><br>
                
                <label for="quantity"><b>Rooms:</b></label><br>
                <input type="number" id="quantity" name="quantity" min="1" max="15" step="1" value="1"><br>
                <br>
                
                <input type="button" name="" value="Check Availability"style="color: black;cursor: pointer;">
            </form>
        </div>
        
    </div>

</body>
</html>