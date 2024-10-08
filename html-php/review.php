<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/RMS/css/style.css">
    <link rel="stylesheet" href="/RMS/css/styleform.css">
    <title>Customer Reviews</title>
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
<!--Customer Review-->
    <section id="review">
        <!--review-heading-->
        <div class="review-heading">
            <h1>Customer Reviews</h1>
        </div>

        <!--Review-box-container--->
        <div class="review-box-container">
            <!--Box-1-->
            <div class="review-box">
                <!--top-->
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        <!--image-->
                        <div class="profile-img">
                            <img src="/RMS/img/villa1.jpg">
                        </div>
                        <!--name-and-email-->
                        <div class="name-email">
                            <strong>Namira Rahman</strong>
                            <span>namira@gmail.com</span>

                        </div>
                    </div>
                    <!--reviews-->
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <!--Comments-->
                <div class="comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat perferendis ipsum rem officia? Accusamus nihil est blanditiis aliquid, voluptatem id asperiores ab maiores molestias perferendis, officiis at error accusantium facilis</p>
                </div>
            </div>
            <!--Box-2-->
            <div class="review-box">
                <!--top-->
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        <!--image-->
                        <div class="profile-img">
                            <img src="/RMS/img/villa2.jpg">
                        </div>
                        <!--name-and-email-->
                        <div class="name-email">
                            <strong>Tanmoy Chowdhury</strong>
                            <span>tanmoy@gmail.com</span>

                        </div>
                    </div>
                    <!--reviews-->
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <!--Comments-->
                <div class="comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat perferendis ipsum rem officia? Accusamus nihil est blanditiis aliquid, voluptatem id asperiores ab maiores molestias perferendis, officiis at error accusantium facilis</p>
                </div>
            </div>
            <!--Box-3-->
            <div class="review-box">
                <!--top-->
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        <!--image-->
                        <div class="profile-img">
                            <img src="/RMS/img/villa3.jpg">
                        </div>
                        <!--name-and-email-->
                        <div class="name-email">
                            <strong>Uday Ahmed</strong>
                            <span>uday@gmail.com</span>

                        </div>
                    </div>
                    <!--reviews-->
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                </div>

                <!--Comments-->
                <div class="comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat perferendis ipsum rem officia? Accusamus nihil est blanditiis aliquid, voluptatem id asperiores ab maiores molestias perferendis, officiis at error accusantium facilis</p>
                </div>
            </div>
            <!--Box-4-->
            <div class="review-box">
                <!--top-->
                <div class="box-top">
                    <!--profile-->
                    <div class="profile">
                        <!--image-->
                        <div class="profile-img">
                            <img src="/RMS/img/villa4.jpg">
                        </div>
                        <!--name-and-email-->
                        <div class="name-email">
                            <strong>Jahid Islam</strong>
                            <span>jahid@gmail.com</span>

                        </div>
                    </div>
                    <!--reviews-->
                    <div class="reviews">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                </div>

                <!--Comments-->
                <div class="comment">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat perferendis ipsum rem officia? Accusamus nihil est blanditiis aliquid, voluptatem id asperiores ab maiores molestias perferendis, officiis at error accusantium facilis</p>
                </div>
            </div>
        </div>

    </section>
    
    <hr>
    <!--Review-Form-->
    <div class="review-form">
        <div class="review-heading">
            <h1>Give Review:</h1>
        </div>
        <div class="review-form-input">
            <form action="review.php" method="POST">
                <label for="name"><b>Name:</b></label><br>
                <input type="text" id="name" name="Name"><br>
                
                <label for="email"><b>Email:</b></label><br>
                <input type="email" id="email" name="email"><br>
                
                <label for="reviews"><b>Comment:</b></label><br>
                <textarea name="comment" rows="4" cols="50" ></textarea><br>

                <label for="quantity"><b>Give Rating(out of 5):</b></label><br>
                <input type="number" id="quantity" name="quantity" min="0" max="5" step="0.5" value="5"><br>
                
                <input class="button" type="submit" name="button" value="Submit" style="color: black;cursor: pointer;width: 30%">
            </form>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <p style="font-size: 60px;"><b>Tusti Resort</b></p><br>
        <p style="font-size: 20px;">59/A,Mouchak,Gazipur,Dhaka</p><br>
        <p style="font-size: 15px;">Contact Us: +880 01712577638, Hotline:  +880 1617005522</p>
    </div>

    <?php
        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "rms";
    
        $con = mysqli_connect($server,$username,$password,$database);
        if($con){
                if(isset($_POST["button"]))
                {
                    $name = $_POST["Name"];
                    $mail = $_POST["email"];
                    $review = $_REQUEST["comment"];
                    $rating = $_POST["quantity"];

                     $insertquery = " INSERT INTO `customer_review` (`Name`, `Email`, `Review`, `Rating`)
                         VALUES ('$name','$mail','$review','$rating')";
                    $res = mysqli_query($con,$insertquery);

                        if($res){
                            ?>
                            <script>
                                alert("Thanks for your review!");
                            </script>
                            <?php
                            header("Location:/RMS/html-php/home.php");
                            }
                        else{
                                ?>
                                <script>
                                    alert("Sorry! data not inserted");
                                </script>
                                <?php
                                 header("Location:/RMS/html-php/home.php");
                            }
                        
                }
            }
        ?>

</body>
</html>