<?php
ini_set('open_basedir', "../../");
include("views/header.php");

if ($_GET['page'] == "Admin-dashboard") {

    include("views/bookings.php");
}else if ($_GET['page'] == "Customer-dashboard") {

    include("views/bookings.php");
}else if ($_GET['page'] == "Crew-dashboard") {

    include("views/bookings.php");
} else if ($_GET['page'] == "view-bookings") {

    include("views/select-booking.php");
}  else if ($_GET['page'] == "airside") {

    include("views/airside-transfer-form.php");
} else if ($_GET['page'] == "booking") {

    include("views/booking.php");
} else if ($_GET['page'] == 'edit') {

    include("views/edit.php");
} else if ($_GET['page'] == 'organ') {

    include("views/organ-transfer-form.php");
} else if ($_GET['page'] == 'event') {

    include("views/event-form.php");
} else if ($_GET['page'] == 'commercial') {

    include("views/commercial-form.php");
} else if ($_GET['page'] == 'ifht') {

    include("views/ifht-form.php");
} else if ($_GET['page'] == 'film-booking') {

    include("views/film-form.php");
} else {
    include("views/home.php");
}

include("views/footer.php");
