<div class="form-container">
    <form id="Airside_Transfer-form" target="BookAirsideTransfer" method="post">
        <div class="form-header-container">
            <span class="form-header">Airside Transfer Booking</span>
            <br><br>
            <br>
            <!-- <span class="form-header-small">Flight Details</span> -->
            <hr>
        </div>
        <div class="form-header-container" style="font-weight:bold;">Flight type</div>
        <div class="radio-div">
            <label class="container">Domestic
               <input class="deterministic" name="flightType" data-display="0" data-for="airside" type="radio" value="d" data-valueIndex="0">
              <span class="checkmark"></span>
            </label>
            <label class="container">International
               <input class="deterministic" name="flightType" data-display="0" data-for="airside" type="radio" value="i" data-valueIndex="0">
              <span class="checkmark"></span>
            </label>
            <label class="container">Both
               <input class="deterministic" name="flightType" data-display="0" data-for="airside"type="radio" value="b" data-valueIndex="0">
              <span class="checkmark"></span>
            </label>
        </div>
        <div id="airside0" class="subform">
            <div class="form-header-container"><span class="small-header">Flight details</span><hr></div>

            <?php include("views/flight-details.php") ?>
        </div>
        
        <div class="form-header-container" style="font-weight:bold;">Terminal type</div>
        <div class="radio-div">
            <label class="container">Arrivals
               <input class="deterministic" name='flightTerminalType' type="radio" value="a" data-valueIndex="1">
              <span class="checkmark"></span>
            </label>
            <label class="container">Departures
               <input class="deterministic" name='flightTerminalType' type="radio" value="d" data-valueIndex="1">
              <span class="checkmark"></span>
            </label>
            <label class="container">Both
               <input class="deterministic" name='flightTerminalType' type="radio" value="b" data-valueIndex="1">
              <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-header-container" style="font-weight:bold;">Level of care needed </div>
        <div class="radio-div">
            <label class="container">BLS/ILS
               <input class="deterministic" name='careLevel' type="radio" value="b" data-valueIndex="2">
              <span class="checkmark"></span>
            </label>
            <label class="container">ALS
               <input class="deterministic" name='careLevel' type="radio" value="a" data-valueIndex="2">
              <span class="checkmark"></span>
            </label>
        </div>
        
        

        <?php include("views/patient-details.php") ?>

        <?php include("views/booking-details.php") ?>

        <?php include("views/optional-booking-details.php") ?>

        <?php include('views/terms-and-conditions.php') ?>
        

    </form>
</div>
