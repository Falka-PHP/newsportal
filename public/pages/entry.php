<div>
    <h2>Login</h2>
    <form id="login_form" action="login_handler" method="post">
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" id="login" name="login" class="form-control" required>
            <span id="login_err" class="error text-danger"></span>
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" class="form-control" required>
            <span id="pass_err" class="error text-danger"></span>
        </div>
        <div class="form-group">
            <input type="submit" id="submit" name="submit" value="Send" class="btn btn-success my-btn">
            <input type="reset" id="reset" name="reset" value="Clear" class="btn btn-danger my-btn">
        </div>
    </form>
</div>