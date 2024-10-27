<?php 
class Users {
    private $nip_id;
    private $nama_lengkap;
    private $role;
    private $pass;

    function set_login_data($nip_id, $pass) {
        $this -> nip_id = $nip_id;
        $this -> pass = $pass;
    }

    function get_nip_id() {
        return $this -> nip_id;
    }
    
    function get_pass() {
        return $this -> pass;
    }

    function set_profile_data() {

    }
}

?>