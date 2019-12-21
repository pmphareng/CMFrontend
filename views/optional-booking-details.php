<div class="form-segment">
    <div class="form-header-container">
        <span class="form-header-small">Optional Booking Details</span>
        <hr>
    </div>
    <div class="form-row">
        <label>Ground ambulance departure facility</label>
        <input type="text" name="ambulanceDepFacility">
    </div>
    <div class="form-row">
        <label>Ground ambulance departure time</label>
        <input type="time" name="ambulanceDepFacilityTime">
    </div>
    <div class="form-row">
        <label>Ground ambulance arrival facility</label>
        <input type="text" name="ambulanceArrFacility">
    </div>
    <div class="form-row">
        <label>Ground ambulance arrival time</label>
        <input type="time" name="ambulanceArrFacilityTime">
    </div>
    <div class="radio-div">
        <div class="form-row">
            <label class="container">Flight escort required
                <input class="deterministic" name='flightEscortRequired' type="checkbox" value="true" data-valueIndex="1">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-row">
            <label class="container">Ambulance escort required
                <input class="deterministic" name='ambulanceEscortRequired' type="checkbox" value="true" data-valueIndex="1">
                <span class="checkmark"></span>
            </label>
        </div>
        <div class="form-row">
            <label class="container">Long distance (if the distance travelled by the ground ambulance if greater than 100km)
                <input class="deterministic" name='longDistance' type="checkbox" value="true" data-valueIndex="1">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
    <div class="form-header-container">
        <label>Any extra information</label>
        <textarea name="extraInfo" rows="5"></textarea>
    </div>
    <div class="form-row">
        <label>Payment method</label>
        <div class="radio-div">
            <label class="container">Cash
                <input class="deterministic" name='account' type="radio" value="false" data-valueIndex="1">
                <span class="checkmark"></span>
            </label>
            <label class="container">Account
                <input class="deterministic" name='account' type="radio" value="true" data-valueIndex="1">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>