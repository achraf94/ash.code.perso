<?php

Class Tchat extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_message_users($id1 = "", $id2 = "") {
        return $this->db->query("SELECT * FROM `messages` where user1 = $id1 and user2 = $id2 or  user1 = $id2 and user2 = $id1 order by Date")->result();
    }

    public function set_message_users($id1 = "", $id2 = "", $msg = "") {
        $msg2 = str_replace("'", '"', trim($msg));
        $req = "insert into messages(Content,Date,user1,user2) VALUES('$msg2',NOW(),$id1,$id2);";
        if (!$this->db->query($req)) {
            return false;
        }
        return true;
    }

    public function get_keydown_users($id1 = "", $id2 = "") {
        return $this->db->query("SELECT * FROM `keydown` where idUser1 = $id1 and idUser2 = $id2 or  idUser1 = $id2 and idUser2 = $id1")->result();
    }

    public function get_keydown_users2($id1 = "", $id2 = "") {
        return $this->db->query("SELECT * FROM `keydown` where idUser1 = $id1 and idUser2 = $id2")->result();
    }

    public function set_keydown_users($id1 = "", $id2 = "") {
        $req = "insert into keydown(idUser1,idUser2) VALUES($id1,$id2)";
        $this->Delete_keydown_users($id1, $id2);
        if (!$this->db->query($req)) {
            return false;
        }
        return true;
    }

    public function Delete_keydown_users($id1 = "", $id2 = "") {
        $re = "delete  FROM `keydown` where idUser1 = $id1 and idUser2 = $id2";
        if (!$this->db->query($re)) {
            return false;
        }
        return true;
    }

}
