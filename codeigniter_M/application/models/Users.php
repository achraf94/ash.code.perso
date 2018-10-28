<?php

Class Users extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function ValideConnexion($login = "", $mdp = "") {
        $sql = "SELECT id_User FROM `users` where Login = '$login' and Mdp = '$mdp'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function clearKey() {
        $sql = "delete from keydown ";
        $this->db->query($sql);
    }

    public function get_info_user($id = "") {
        $sql = "SELECT * FROM `users` where User_ID = $id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_user($id) {
        return $this->db->query("SELECT * FROM users where not User_ID in($id)")->result();
    }

    public function testUser($p, $u) {
        return $this->db->query("select * from users where Password = '$p' and User_Code = '$u'")->result();
    }

}
