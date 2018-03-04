<?php

Class Users extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function ValideConnexion($login = "", $mdp = "") {
        $sql = "SELECT id_User FROM `user` where Login = '$login' and Mdp = '$mdp'";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function get_info_user($id = "") {
        $sql = "SELECT * FROM `user` where id_User = $id";
        $query = $this->db->query($sql);
        return $query->result();
    }

}
