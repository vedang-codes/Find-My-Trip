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
    $pwd = $_POST['pwd'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $package = $_POST['package'];
    $note = $_POST['note'];

    $sql = "INSERT INTO `General`(`user_id`, `user_name`, `email`, `password`, `age`, `gender`, `contact`, `address`, `package`, `note`) VALUES (null,'$name','$email','$pwd','$age','$gender','$contact','$address','$package','$note')";
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
    <title>Registration Form</title>
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

<iu>
    <div class="container1">
        <h1>Find My Trip: Registration Form</h1>
    </div>
    <div class="ctnr">
        <form action="form.php" method="post" onsubmit="validate_pwd()" id="package">
            <input class="ip" type="text" name="name" id="name" placeholder="Name" required><br>
            <input class="ip" type="email" name="email" id="email" placeholder="Email" required><br>
            <input class="ip" type="password" type="pwd" name="pwd" id="pwd" placeholder="Password (Minimum 8 characters)" required><br>
            <input class="ip" type="password" type="pwd" name="pwd" id="cpwd" placeholder="Confirm Password" required><br>
            <input type="number" class="ip" name="age" id="age" placeholder="Age" required><br><br>
            <p>
                Gender:&nbsp;&nbsp;
                <input class="rbtn" type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>&nbsp;
                <input class="rbtn" type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>&nbsp;
                <input class="rbtn" type="radio" name="gender" id="other" value="other">
                <label for="other">Other</label>
            </p><br>
            <input class="ip" type="text" name="contact" id="contact" placeholder="Contact" required><br>
            <textarea name="address" id="address" cols="25" rows="6" placeholder="Enter your Address" required></textarea><br><br>
            <p>
                Package:&nbsp;&nbsp;
                <input class="rbtn" type="radio" name="package" id="Essential_Package" value="Essential Package">
                <label for="Essential_Package">Essential Package</label>&nbsp;
                <input class="rbtn" type="radio" name="package" id="Couple_Package" value="Couple Package">
                <label for="Couple_Package">Couple Package</label>&nbsp;
                <input class="rbtn" type="radio" name="package" id="Family_Package" value="Family Package">
                <label for="Family_Package">Family Package</label>
            </p><br>
            <textarea name="note" id="note" cols="25" rows="6" placeholder="Note"></textarea><br>
            <button type="submit" class="btn2">Submit</button>
            <br><br>
            <?php
            if ($insert == true) {
                echo "<p class = 'Submsg'>You successfully submited registration form...<br>Welcome to Find My Trip</p>";
            }
            ?>
        </form>
    </div>
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
