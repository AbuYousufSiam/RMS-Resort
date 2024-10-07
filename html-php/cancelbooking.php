<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <link rel="stylesheet" href="/RMS/css/styleform.css">
    <title>Cancel Booking Page</title>
</head>
<body>

    <!--Navigation Bar-->
    <div class="bar">
        <ul>
            <li><a href="/RMS/html-php/home.php">Home</a></li>
            <li><a href="/RMS/html-php/info.php">Info</a></li>
            <li><a href="/RMS/html-php/CheckBookingStatus.php">Check  Booking Status</a></li>
            <li><a href="/RMS/html-php/review.php">Reviews</a></li>
        </ul>
    </div>

    <!--Check Availability-->
    <!--CSS from Review-Form-->
    <div class="review-form">
        <div class="review-heading">
            <h1>Cancel Booking:</h1>
        </div>
        <div class="review-form-input">
            <form>
                <label for="name"><b>Name</b></label><br>
                <input type="text" id="name" name="name"><br>
                <label for="email"><b>Email:</b></label><br>
                <input type="email" id="email" name="email"><br>
                <label for="code"><b>Booking Id:</b></label><br>
                <input type="text" id="id" name="id"><br>
                <br>
                <input type="button" name="" value="Cancel"style="color: black;cursor: pointer;">
            </form>
        </div>
        
    </div>

</body>
</html>