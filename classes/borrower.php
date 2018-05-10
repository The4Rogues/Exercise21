<?php

/* 
 * 
 *  id as Primary key on SQL are not included
 * 
 *  DOB was added
 *  acc_last active is time stamp of logged in
 * 
 */
//namespace borrower;


include_once ("person.php");

class borrower extends person {

    private $dob;
    private $address;
    private $tel;
    private $acc_last_active;

    //private $email;    
    public function __construct($username, $password, $first_name, $last_name, $dob, $address, $tel, $email='') {
        $this->username = $username;
        $this->password = $password;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->dob = $dob;
        $this->address = $address;
        $this->tel = $tel;        
        $this->email = $email;
    }
 
    public function get_id() {
        return $this->id;
    }

    public function get_dob() {
        return $this->dob;
    }

    public function get_address() {
        return $this->address;
    }

    public function get_tel() {
        return $this->tel;
    }

    public function get_acc_last_active() {
        return $this->acc_last_active;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_dob($dob) {
        $this->dob = $dob;
    }

    public function set_address($address) {
        $this->address = $address;
    }

    public function set_tel($tel) {
        $this->tel = $tel;
    }

    public function set_acc_last_active($acc_last_active) {
        $this->acc_last_active = $acc_last_active;
    }
    
}
?>
