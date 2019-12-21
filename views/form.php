<form id="Airside_Transfer-form" method="post" target="BookAirsideTransfer">
    <div class="radio-div">
        <label class="container">Domestic
           <input name="flight type" data-display="0" data-for="airside" type="radio" value="Domestic">
          <span class="checkmark"></span>
        </label>
        <label class="container">International
           <input name="flight type" data-display="1" data-for="airside" type="radio" value="International">
          <span class="checkmark"></span>
        </label>
        <label class="container">Both
           <input name="flight type" data-display="both" data-for="airside"type="radio" value="Both">
          <span class="checkmark"></span>
        </label>
        
    </div>
    <div id="airside0" class="subform">
        <div class="form-row"><span class="small-header">Domestic Flight</span><hr></div>
        
        <?php include("views/flight-details.php") ?>
    </div>
    <div id="airside1" class="subform">
         <div class="form-row"><span class="small-header">International Flight</span><hr></div>
        <?php include("views/flight-details.php") ?>
    </div>
    
    <?php include("views/patient-details.php") ?>
    
    <?php include("views/booking-details.php") ?>
    
    <?php include('views/terms-and-conditions.php') ?>
    <button class="form-button" action ="book">Login</button>
    
</form>
