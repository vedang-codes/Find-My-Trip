<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sever = 'localhost';
    $username = 'patel3u1_2707';
    $password = '123456';
    $db = 'patel3u1_2707';

    $con = mysqli_connect($sever, $username, $password, $db);

    if (!$con) {
        die("Connection error " . mysqli_connect_error());
    }

    $uname = $_POST['name'];
    $upwd = $_POST['pwd'];

    $query = "SELECT user_name, password FROM General WHERE user_name= '$uname' AND password = '$upwd'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['patel3u1_2707'] = 'true';
        $sqlq = "SELECT `user_id`, `user_name`, `email`, `age`, `gender`, `contact`, `address`, `package` FROM `General` WHERE `user_name` = '$uname';";        
        $res = $con->query($sqlq);
        $num = mysqli_num_rows($res);
        $resArr = array();
        if ($num > 0) {
            while ($item = mysqli_fetch_assoc($res)) {
                $resArr[] = $item;
            }
        }
        echo "<hr><br> <h3 class='ctnr'> Your Details</h3>";
        echo "<table class='ctnr'>";
        echo "<tr><th>User ID</th><th>Name</th><th>Email</th><th>Age</th><th>Gender</th><th>Contact</th><th>Address</th><th>Package</th></tr>";
        foreach ($resArr as $std) {
            echo "<tr><td> " . $std['user_id'] . " </td>" .
            "<td> " . $std['user_name'] . " </td>" .
            "<td> " . $std['email'] . " </td>" .
            "<td> " . $std['age'] . " </td>" .
            "<td> " . $std['gender'] . " </td>" .
            "<td> " . $std['contact'] . " </td>" .
            "<td> " . $std['address'] . " </td>" .
            "<td> " . $std['package'] . " </td></tr>";
        }
            echo "</table>";
            echo "<br><br>&nbsp;&nbsp;&nbsp;<a class='btn1' href='../html/mytrip.html'>MyTrip</a>";
            
        } 
        else {
            echo "<h3 class = 'ctnr'>Invalid Name or password ! </h3>";
            echo "<br> <a class='btn1' href='../html/mytrip.html'>MyTrip</a>";
        }
        $con->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Details</title>
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

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        h1 {
            padding: 20px;
            font-size: 42px;
            font-weight: bolder;
            color: whitesmoke;
        }

        .container1 {
            width: 100%;
            background-color: #212529;
            text-align: center;
        }
    </style>
</head>

<body>
    <br><br>
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
    <script src="../js/source.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>