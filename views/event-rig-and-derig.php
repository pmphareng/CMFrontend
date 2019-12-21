<div class="form-header-container">
    <span class="form-header-small">Event Build up/Rig</span>
    <hr>
</div>
<div class="form-header-container" style="font-weight:bold;">Does the event need medical services for the build up/rig? </div>
<div class="radio-div">
    <label class="container">Yes
       <input name="buRequired" data-display="0" data-for="buildup" type="radio" value="Yes">
      <span class="checkmark"></span>
    </label>
    <label class="container">No
      <input name="buRequired" data-display="0" data-for="buildup" type="radio" value="No">
      <span class="checkmark"></span>
    </label>
</div>

<div id="buildup0" class="subform">
    <div class="form-header-container"><span class="small-header">Build up dates</span><hr></div>
    <?php include("views/rig-dates.php") ?>
</div>
<div class="form-header-container">
    <span class="form-header-small">Event Strike/De-rig</span>
    <hr>
</div>
<div class="form-header-container" style="font-weight:bold;">Does the event need medical services for the strike/de-rig ? </div>
<div class="radio-div">
    <label class="container">Yes
       <input name="strikeRequired" data-display="0" data-for="strike" type="radio" value="Yes">
      <span class="checkmark"></span>
    </label>
    <label class="container">No
      <input name="strikeRequired" data-display="0" data-for="strike" type="radio" value="No">
      <span class="checkmark"></span>
    </label>
</div>
<div id="strike0" class="subform">
    <div class="form-header-container"><span class="small-header">Build up dates</span><hr></div>
    <?php include("views/derig-dates.php") ?>
</div>