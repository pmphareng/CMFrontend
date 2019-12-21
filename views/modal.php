<div class="modal">
    <div id="modal-card" class="center">
        <div class="row" id="modal-header">
            <span></span>
            <span class="exit-modal">&times;</span>
        </div>
        <hr>
        <div id="modal-error" class="error"></div>
        <div id="login-modal">
            <form method="post" id="login" target="Login">
                <div class="form-row">
                    <label>Email</label>
                    <input name="email" type="text">
                </div>
                <div class="form-row">
                    <label>Password</label>
                    <input name="password" type="password">
                </div>

                <button class="form-button" action="login">Login</button>
            </form>
        </div>
        <?php include("views/customerRegModal.php") ?>
        <?php include("views/crewRegModal.php") ?>
        <div class="modal-message">

        </div>
    </div>
</div>