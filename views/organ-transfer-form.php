<div class="form-container">
    <form id="Organ_Transfer-form" method="post" target="BookOrganTransfer">
        <div class="form-header-container">
            <span class="form-header">Organ Transfer Booking</span>
            <br><br>
            <br>
            <span class="form-header-small">Transfer Type</span>
            <hr>
        </div>
        <div class="radio-div">
            <label class="container">Load
               <input name="service" data-display="0" data-for="organ" type="radio" value="l">
              <span class="checkmark"></span>
            </label>
            <label class="container">Offload
               <input name="service" data-display="1" data-for="organ" type="radio" value="o">
              <span class="checkmark"></span>
            </label>
            <label class="container">Both
               <input name="service" data-display="both" data-for="organ"type="radio" value="b">
              <span class="checkmark"></span>
            </label>

        </div>
        <div id="organ0" class="subform">
            <div class="form-header-container"><span class="small-header">Load details</span><hr></div>
            <?php include("views/organ-transfer-details-load.php") ?>
             <div class="form-row">
                <label>Departure time</label>
                <input name = "Transfer details[Departure time]" type="time">
            </div>
        </div>
        <div id="organ1" class="subform">
             <div class="form-header-container"><span class="small-header">Offload details</span><hr></div>
            <?php include("views/organ-transfer-details-offload.php") ?>
            <div class="form-row">
                <label>Arrival time</label>
                <input name = "Transfer details[Arrival time]" type="time">
            </div>
        </div>
        <?php include('views/booking-details.php') ?>
        <?php include('views/terms-and-conditions.php') ?>
    </form>
</div>