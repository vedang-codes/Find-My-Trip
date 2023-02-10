<?php
$insert = false;
if (isset($_POST['name'])) {
    $sever = 'localhost';
    $username = 'patel3u1_2707';
    $password = '123456';
    $db = 'patel3u1_2707';

    $con = mysqli_connect($sever, $username, $password, $db);

    if (!$con) {
        die("Connection error " . mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $place = $_POST['place'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $review = $_POST['review'];

    $sql = "INSERT INTO `Feedback`(`name`, `email`, `place`, `age`, `address`, `review`) VALUES ('$name','$email','$place','$age','$address','$review');";
    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $con->error";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <style>
        /* smaller than 1024 pixels */
        @media screen and (max-width: 1024px) {
            body {
                width: 100%;
                height: auto;
            }
        }

        /* smaller than 768 pixels */
        @media screen and (max-width: 768px) {
            body {
                width: 100%;
                height: auto;
            }
        }

        /* smaller than 480 pixels */
        @media screen and (max-width: 480px) {
            body {
                width: 100%;
                height: auto;
            }
        }

        h2 {
            margin: auto;
            padding: 20px;
            font-size: 42px;
            font-weight: bolder;
        }
    </style>
</head>

<body style="background-color: #f8f9fa">
    <div>
        <header>
            <h2>Reviews</h2>
        </header>
    </div>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <div class="container-fluid m-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse m-auto" id="navbarNavAltMarkup">
                    <div class="navbar-nav m-auto">
                        <a href="homepage.html">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="vacation.html">Vacations</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="package.html">Packages</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="destination.html">Destinations</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="mytrip.html">MyTrip</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="staff.html">Staff</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="../php/review.php">Reviews</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="aboutus.html">About
                            Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="ctnr">
        <div id="left">
            <h2>Reviews of Our Customers...</h2>
            <br>
            <img style="margin-left: 20px; max-width: 96%; max-height: 98%;" src="../images/review.png" alt="not loaded">
            <br><br>
            <p style="margin-left: 20px; margin-right: 10px;"><b><i>John McGrey, 24<br>California, USA</i></b></p>
            <p style="margin-left: 10px; margin-right: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestiae vero quisquam esse pariatur. Nobis
                soluta consequuntur doloribus nostrum, corrupti nesciunt ipsa dolorem deserunt illum alias. Fugit recusandae
                voluptas sapiente, tempore reprehenderit magnam consequuntur porro voluptatibus eveniet veritatis labore
                repudiandae!</p><br>
            <p style="margin-left: 20px; margin-right: 10px;"><b><i>Emily Brian, 21<br>Toronto, CA</i></b></p>
            <p style="margin-left: 10px; margin-right: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestiae vero quisquam esse pariatur. Nobis
                soluta consequuntur doloribus nostrum, corrupti nesciunt ipsa dolorem deserunt illum alias. Fugit recusandae
                voluptas sapiente, tempore reprehenderit magnam consequuntur porro voluptatibus eveniet veritatis labore
                repudiandae!</p><br>
            <p style="margin-left: 20px; margin-right: 10px;"><b><i>Serena Williams, 26<br>Calgary, CA</i></b></p>
            <p style="margin-left: 10px; margin-right: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum molestiae vero quisquam esse pariatur. Nobis
                soluta consequuntur doloribus nostrum, corrupti nesciunt ipsa dolorem deserunt illum alias. Fugit recusandae
                voluptas sapiente, tempore reprehenderit magnam consequuntur porro voluptatibus eveniet veritatis labore
                repudiandae!</p><br>
        </div>
        <div id="right" class="right_rev">
            <h2 style="margin-left: 25%;">Feedback Form</h2>
            <p style="margin-left: 15%; margin-right: 15%;">Please share your reviews, so that we can help you out</p>
            <form style="margin-left: 15%; margin-right: 15%;" action="../php/review.php" method="post">
                <input class="ip" type="text" name="name" id="name" placeholder="Name" required><br>
                <input class="ip" type="email" name="email" id="email" placeholder="Email" required><br>
                <input class="ip" type="text" name="place" id="place" placeholder="Your Trip Place"><br>
                <input class="ip" type="number" name="age" id="age" placeholder="Age" required><br>
                <input class="ip" type="text" name="your_palce" id="your_place" placeholder="Your Address" required><br>
                <textarea name="review" id="review" cols="25" rows="8" placeholder="Enter your Expereinces/Reviews" required></textarea><br>
                <button type="submit" class="btn4">Submit</button><br><br>
                <?php
                if ($insert == true) {
                    echo "<p class = 'Submsg'>You successfully submited feedback form...</p>";
                }
                ?>
            </form>
            <br>
        </div>
    </div>
    <br>
    <div class="container">
        <footer class="py-3 my-4 bg-dark">
            <p class="text-center text-muted">Contact Us</p>
            <p class="text-center text-muted">&phone; +1-110-110-1100</p>
            <p class="text-center text-muted">&#x2709; findmytrip@fmt.com</p>
            <p class="text-center text-muted">111 XYZ Street, Toronto,</p>
            <p class="text-center text-muted">ONTARIO, CA, A1A 1A1</p><br>
            <p class="text-center text-muted">&copy; Find My Trip, Inc. All rights reserved</p>
        </footer>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>