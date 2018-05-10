<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//namespace person;

class person{
    private $id;
    
    protected $username;
    protected $password;
    protected $first_name;
    protected $last_name;
    protected $email;
    
    public function get_username() {
        return $this->username;
    }

    function get_password() {
        return $this->password;
    }

    function get_first_name() {
        return $this->first_name;
    }

    function get_last_name() {
        return $this->last_name;
    }

    function get_email() {
        return $this->email;
    }
    
    public function set_username($username) {
        $this->username = $username;
    }
    
    function set_password($password) {
        $this->password = $password;
    }

    function set_first_name($first_name) {
        $this->first_name = $first_name;
    }

    function set_last_name($last_name) {
        $this->last_name = $last_name;
    }

    function set_email($email) {
        $this->email = $email;
    }


}   
     
?>    
