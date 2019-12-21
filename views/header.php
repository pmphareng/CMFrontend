<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <nav>
        <div id="brand-div">
            <div class="brand"><span>CAPE</span><span>MEDICS</span></div>
            <button id="nav-button">Options</button>
        </div>

        <div id="link-div">
            <a href="?page=home">Home</a>
            <?php if (!key_exists('page', $_GET) || $_GET['page'] == 'home') { ?>
                <a href="#about-us">About Us</a>
                <a href="#service-header">Services</a>

                <a href="#contact-us-container">Contact Us</a>
                <a href="#Bookings-div">Make a booking</a>
            <?php } ?>
            <?php if (isset($_SESSION['id'])) { ?>
                <a href="?page=login">Bookings</a>
            <?php } ?>
        </div>

        <div id="action-div">
            <?php if (isset($_SESSION['id'])) { ?>
                <a href="?page=home&function=logout"><button id="logout">Logout</button></a>
            <?php } else { ?>

                <button id="loginBtn">Login</button>
                <div class="dropdown">
                    <button class="dropbtn">Register</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#customer" id="customerRegBtn">Customer</a>
                        <a href="#crew" id="crewRegBtn">Crew</a>
                    </div>
                </div>
            <?php } ?>
        </div>

    </nav>
    <?php include("views/modal.php") ?>