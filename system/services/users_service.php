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

    public function authenticate() {
        // ...
    }

}
