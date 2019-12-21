<div id="crewReg-modal">
    <div id="myCarousel" class="carousel slide" data-interval="false">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <form method="post" id="" target="">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="form-row">
                        <label>First name</label>
                        <input name="name" type="text">
                    </div>
                    <div class="form-row">
                        <label>Surname</label>
                        <input name="surname" type="text">
                    </div>
                    <div class="form-row">
                        <label>Date of birth</label>
                        <input name="dob" type="date">
                    </div>
                    <div class="form-row">
                        <label>Email</label>
                        <input name="email" type="email">
                    </div>
                    <div class="form-row">
                        <label>Contact number</label>
                        <input name="number" type="number">
                    </div>
                    <div class="form-row">
                        <label>ID/Passport number</label>
                        <input name="idPassport" type="number">
                    </div>
                </div>

                <div class="item">
                    <div class="form-row">
                        <label>Physical address</label>
                        <input name="address" type="text">
                    </div>
                    <div class="form-row">
                        <label>Area code</label>
                        <input name="areaCode" type="number">
                    </div>
                    <div class="form-row">
                        <label>Next of kin full name</label>
                        <input name="nokName" type="text">
                    </div>
                    <div class="form-row">
                        <label>Next of kin cell</label>
                        <input name="nokNumber" type="text">
                    </div>
                </div>

                <div class="item">
                    <div class="form-row">
                        <label>Bank account holder name</label>
                        <input name="bankAccountHolderName" type="text">
                    </div>
                    <div class="form-row">
                        <label>Bank account number</label>
                        <input name="bankAccountNumber" type="number">
                    </div>
                    <div class="form-row">
                        <label>Bank name</label>
                        <input name="bankName" type="text">
                    </div>
                    <div class="form-row">
                        <label>Bank branch</label>
                        <input name="bankBranch" type="text">
                    </div>
                    <div class="form-row">
                        <label>Bank branch code</label>
                        <input name="bankBranchCode" type="text">
                    </div>
                    <div class="form-row">
                        <label>Tax ref</label>
                        <input name="taxRef" type="text">
                    </div>
                </div>
                <div class="item">
                    <div class="form-row">
                    <div class="form-header-container" style="font-weight:bold;">Registered for fire and rescue</div>
                        <div class="radio-div">
                            <label class="container">True
                                <input class="deterministic" name="typeFire" data-display="0" data-for="airside" type="radio" value="d" data-valueIndex="0" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">False
                                <input class="deterministic" name="typeFire" data-display="0" data-for="airside" type="radio" value="i" data-valueIndex="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                    <div class="form-header-container" style="font-weight:bold;">Registered for medical</div>
                        <div class="radio-div">
                            <label class="container">True
                                <input class="deterministic" name="typeMedical" data-display="0" data-for="airside" type="radio" value="d" data-valueIndex="0" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">False
                                <input class="deterministic" name="typeMedical" data-display="0" data-for="airside" type="radio" value="i" data-valueIndex="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="form-header-container" style="font-weight:bold;">Registered for safety</div>
                        <div class="radio-div">
                            <label class="container">True
                                <input class="deterministic" name="typeSafety" data-display="0" data-for="airside" type="radio" value="d" data-valueIndex="0" checked>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">False
                                <input class="deterministic" name="typeSafety" data-display="0" data-for="airside" type="radio" value="i" data-valueIndex="0">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <label>Fire certification number</label>
                        <input name="fireCertNumber" type="text">
                    </div>
                    <div class="form-row">
                        <label>HSPCA number</label>
                        <input name="hpscaNumber" type="text">
                    </div>
                    <div class="form-row">
                        <label>SAIOSH number</label>
                        <input name="saioshNumber" type="text">
                    </div>
                </div>
                <div class="item">
                    <div class="form-row">
                        <label>Upload ID copy</label>
                        <input type="file" name="idFile">
                    </div>
                    <div class="form-row">
                        <label>Any other supporting files</label>
                        <input type="file" name="documentFiles" multiple>
                    </div>
                    <button class="form-button" action="login">Register</button>
                </div>
            </div>
        </form>
    </div>

</div>
<!-- Left and right controls -->
<div class="carousel-control-container" id="carousel-control-container">
    <div>
        <button type="button" href="#myCarousel" data-slide="prev">
            <span>Previous</span>
        </button>
        <button type="button" href="#myCarousel" data-slide="next">
            <span>Next</span>
        </button>
    </div>
</div>