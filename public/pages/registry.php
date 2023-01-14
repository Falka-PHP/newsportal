<div>
    <h2>Реєстрація</h2>
    <form id="form1" action="registry_handler" method="post">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" class="form-control" required>
            <span id="login_err" class="error text-danger"></span>
        </div>
        <div class="form-group">
            <label for="pass1">Password:</label>
            <input type="password" id="pass1" name="pass1" class="form-control" required>
            <span id="pass1_err" class="error text-danger"></span>
        </div>
        <div class="form-group">
            <label for="pass2">Password confirmation:</label>
            <input type="password" id="pass2" name="pass2" class="form-control" required>
            <span id="pass2_err" class="error text-danger"></span>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            <span id="email_err" class="error text-danger"></span>
        </div>
        <div class="form-group">
            <input type="submit" id="submit" name="submit" value="Send" class="btn btn-success my-btn">
            <input type="reset" id="reset" name="reset" value="Clear" class="btn btn-danger my-btn">
        </div>
    </form>
</div>