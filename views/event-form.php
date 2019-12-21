<div class="form-container">
    <form id="Event-form" method="post" target="BookEvent">
        <div class="form-header-container">
            <span class="form-header">Event Booking</span>
            <br><br>
            <br>
            <span class="form-header-small">Event details</span>
            <hr>
        </div>
        <?php include('views/event-details.php') ?>
        <?php include("views/event-rig-and-derig.php") ?>
        <?php include("views/risk-matrix.php") ?>
        <?php include('views/booking-details.php') ?>
        <?php include('views/terms-and-conditions.php') ?>
    </form>
</div>