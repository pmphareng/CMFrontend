<div class="form-header-container" style="font-weight:bold;">Trip distance </div>
<div class="radio-div">
    <label class="container">Local area &le; 100km
        <input name="longDistance" type="radio" value="false">
        <span class="checkmark"></span>
    </label>
    <label class="container">Long distance &gt; 100km
        <input name="longDistance" type="radio" value="true">
        <span class="checkmark"></span>
    </label>

</div>

<div class="form-header-container" style="font-weight:bold;">From
    <hr>
</div>
<div class="form-segment">
    <div class="form-row">
        <label>Type of location of pickup</label>
        <input type='text' name="fromLocationType">
    </div>
    <div class="form-row">
        <label>Pickup address</label>
        <input type='text' name="fromAddress">
    </div>
    <div class="form-row">
        <label>Pick up time</label>
        <input type='time' name="fromTime">
    </div>
    <div class="form-row">
        <label>Pick up date</label>
        <input type='date' name="fromDate">
    </div>
</div>
<div class="form-header-container" style="font-weight:bold;">To
    <hr>
</div>
<div class="form-segment">
<div class="form-row">
        <label>Type of location of dropoff</label>
        <input type='text' name="toLocationType">
    </div>
    <div class="form-row">
        <label>Address</label>
        <input type='text' name="toAddress">
    </div>
    <div class="form-row">
        <label>Pick up time</label>
        <input type='time' name="toTime">
    </div>
    <div class="form-row">
        <label>Drop off date</label>
        <input type='date' name="toDate">
    </div>
</div>
<div class="radio-div">
    <label class="container">BLS
        <input name='levelOfCare' type="radio" value="BLS">
        <span class="checkmark"></span>
    </label>
    <label class="container">ILS
        <input name='levelOfCare' type="radio" value="ILS">
        <span class="checkmark"></span>
    </label>
    <label class="container">ALS
        <input name='levelOfCare' type="radio" value="ALS">
        <span class="checkmark"></span>
    </label>
    <label class="container">ICU
        <input name='levelOfCare' type="radio" value="ICU">
        <span class="checkmark"></span>
    </label>
    <label class="container">Neonatal
        <input name='levelOfCare' type="radio" value="Neonatal">
        <span class="checkmark"></span>
    </label>
</div>