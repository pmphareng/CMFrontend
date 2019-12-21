<div class="form-header-container" style="font-weight:bold;">Service type</div>
        <div class="radio-div">
            <label class="container">Fire and rescue
               <input name="Service type[Fire and rescue]" data-display="0" data-for="service" type="checkbox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Safety
               <input name="Service type[Safety]" data-display="1" data-for="service" type="checkbox">
              <span class="checkmark"></span>
            </label>
            <label class="container">Medical
               <input name="Service type[Medical]" data-display="2" data-for="service" type="checkbox">
              <span class="checkmark"></span>
            </label>

        </div>

        <?php include("views/fire-and-safety.php") ?>
    <div class="form-header-container">
        <label>Special requests</label>
        <textarea name="Special request[Request]" rows="5"></textarea>
</div>
        
        
        