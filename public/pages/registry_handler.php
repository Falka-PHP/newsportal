<div>
    <h2>Registration results</h2>
    <?php
    $login = $_POST['login'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $email = $_POST['email'];

    //1. Server side validation
    $errors = [];
    $pattern1 = '/^[a-zA-Z][a-zA-Z0-9_]{5,15}$/';
    $pattern2 = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z0-9_]{6,}$/';
    $pattern3 = '/^[^@\s]+@[^@\s]+\.[^@\s]+$/';

    if (!preg_match($pattern1, $login)) {
        $errors[] = 'Login doesen\'t match security pattern! (...)';
    }
    if (!preg_match($pattern2, $pass1)) {
        $errors[] = 'Password doesen\'t match security pattern! (...)';
    }
    if ($pass1 !== $pass2) {
        $errors[] = 'Passwords don\'t match';
    }
    if (!preg_match($pattern3, $email)) {
        $errors[] = 'E-mail doesen\'t match security pattern! (...)';
    }

    //2. Creating class instance
    require('system/services/users_service.php');
    $service = new UsersService();

    //3. Final data analysis
    if (count($errors) > 0) {
        echo '<h5 style="color: red">';
        foreach ($errors as $err) {
            echo $err . '<br>';
        }
        echo '</h5>';
    } else {
        //Registration scenario
        try {
            $passw = md5($pass1);
            $regdate = date('Y-m-d H:i:s');
            $role_id = 3; //user
            $status_id = 5; //active

            $service->register($login, $passw, $email, $regdate, $role_id, $status_id);
            echo '
            <h5 style=\"color: green\">
            Registration successful!
            </h5>   
            ';
        } catch (Exception $e) {
            echo "
                <h5 style=\"color: red\">
                Errors corrupted during the registration process: 
                {$e->getMessage()}
                </h5>
                ";
        }
    }

    ?>
</div>