<div>
    <?php
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    //Server side validation for an incorrect characters
    $pattern1 = '/^[a-zA-Z0-9_]+/';
    $errors = [];
    if (!preg_match($pattern1, $login)) {
        $errors[] = 'Login contains invalid characters';
    }
    if (!preg_match($pattern1, $pass)) {
        $errors[] = 'Password contains invalid characters';
    }

    require('system/services/users_service.php');
    $service = new UsersService();

    if (count($errors) > 0) {
        echo '<h5 style="color: red">';
        foreach ($errors as $err) {
            echo $err . '<br>';
        }
        echo '</h5>';
    } else {
        if ($service->authenticate($login, $pass) === true) {
            echo "
            <h5 style=\"color: green\">
            Authorisation successfully!
            Welcome {$this->define_user()}!
            </h5>   
            ";
        } else {
            echo "
                <h5 style=\"color: red\">
                Authorization error!
                Please try again.
                </h5>
                ";
        }
    }
    ?>
</div>
