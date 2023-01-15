<?php

require_once('system/providers/db_provider.php');


class UsersService extends DbProvider {

    public function register($login, $passw, $email, $regdate, $role_id, $status_id) {
        $query = 'insert into users (login, passw, email, regdate, role_id, status_id) ';
        $query .= 'values (?, ?, ?, ?, ?, ?)';
        $stmt = $this->_conn->prepare($query);
        $stmt->bind_param('ssssii',$login, $passw, $email, $regdate, $role_id, $status_id);
        if(!$stmt->execute()){
            throw new Exception("Adding user sql request execution error!");
        }
    }

    public function check_login_unique() {
        // ...
    }

    public function check_email_unique() {
        // ...
    }

    public function authenticate($login, $pass) {
        $passw = md5($pass);
        $query = 'SELECT COUNT(*) FROM `users` as u WHERE u.login= ? AND u.passw = ?';
        //$query = 'SELECT COUNT(*) FROM `users` as u WHERE u.login="Anna123" AND u.passw="5f01837834945c5878a227f0b950accd"';

        $stmt = $this->_conn->prepare($query);
        if($stmt === false){echo 'Internal database error!'; return false;}
        $stmt->bind_param('ss',$login, $passw);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->fetch_row()[0] > 0) {
            $_SESSION['user'] = $login;
            return true;
        }
        else{
            return false;
        }



    }

}
