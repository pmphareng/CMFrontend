<div class="form-container">
    <form id="IFHT-form" method="post" target="BookIFHT">
        <div class="form-header-container">
            <span class="form-header">INTER FACILITY/HOSPITAL TRANSFER Booking</span>
            <br><br>
            <br>
            <span class="form-header-small">Trip details</span>
            <hr>
        </div>
        <?php include("views/trip-details.php") ?>
        <?php include ('views/patient-details.php') ?>
        <?php include('views/booking-details.php') ?>
        <?php include('views/terms-and-conditions.php') ?>
    </form>
</div>