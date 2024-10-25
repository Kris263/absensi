<?php 
class Users {
    private $nip;
    private $nama_lengkap;
    private $role;
    private $password;

    function set_login_data($nip, $password) {
        $this -> nip = $nip;
        $this -> password = $password;
    }

    function get_nip_id() {
        return $this -> nip;
    }
    
    function get_password() {
        return $this -> password;
    }

    function set_profile_data() {

    }
}

?>