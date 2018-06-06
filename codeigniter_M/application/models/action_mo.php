<?php

class action_mo extends CI_Model {

    public function lastNday($sql) {
        $query = $this->db->query($sql)->result();
        return $query;
    }

    public function GetInfoProjet($sql) {
        $query = $this->db->query($sql)->result();
        return $query;
    }

    public function getNomProje($id) {
        $query = $this->db->query("select Project_Name from PROJECTS where PROJECTS.Project_ID =$id")->result();
        return $query;
    }

    function getActionById($id = null) {
        $req1 = " select * from ACTIONS a where a.Action_ID = $id";
        $query = $this->db->query($req1);
        return $query->result();
    }

    function getActionLast7days($id = null) {
        $req1 = "    select * from ACTIONS a where a.Owner_id = $id  and a.Last_Update_Date >= DATE_ADD(NOW(),INTERVAL  -7 day)";
        $query = $this->db->query($req1);
        return $query->result();
    }

    function getRisksLast7days($id = null) {
        $req1 = "    select * from RISKS a where a.Owner_id = $id  and a.Last_Update_Date >= DATE_ADD(NOW(),INTERVAL  -7 day)";
        $query = $this->db->query($req1);
        return $query->result();
    }

    function getISSUESLast7days($id = null) {
        $req1 = "    select * from ISSUES a where a.Owner_id = $id  and a.Last_Update_Date >= DATE_ADD(NOW(),INTERVAL  -7 day)";
        $query = $this->db->query($req1);
        return $query->result();
    }

    function getDECISIONLast7days($id = null) {
        $req1 = "    select * from DECISIONS a where a.Last_Update_Date >= DATE_ADD(NOW(),INTERVAL -7 day)";
        $query = $this->db->query($req1);
        return $query->result();
    }

    function getALERTLast7days($id = null) {
        $req1 = "select * from ALERTS";
        $query = $this->db->query($req1);
        return $query->result();
    }

    public function setProject() {
        $req1 = "select DISTINCT projects.Project_ID, projects.Project_Name from risks,projects where projects.Project_ID in(risks.Project_ID)";
        $query = $this->db->query($req1);
        $array = array();
        foreach ($query->result() as $row) {
            $array[$row->Project_ID] = $row->Project_Name;
        }
        return $array;
    }

    public function setOwner() {
        $req1 = "select User_ID,Lastname,Firstname  from users";
        $query = $this->db->query($req1);
        $array = array();
        foreach ($query->result() as $row) {
            $array[$row->User_ID] = $row->Firstname . " " . $row->Lastname;
        }
        return $array;
    }

    function setRiskCat() {
        $req1 = "select RISK_CATEGORY_ID,RISK_CATEGORY_NAME from risk_category";
        $query = $this->db->query($req1);
        $array = array();
        foreach ($query->result() as $row) {
            $array[$row->RISK_CATEGORY_ID] = $row->RISK_CATEGORY_NAME;
        }
        return $array;
    }

    function getRisk() {
        $req1 = "select * from risks";
        $query = $this->db->query($req1);
        return $query->result();
    }

    function getRisksByID($id = "") {
        $sql = "select * from RISKS where Project_ID = $id order by risks.Open_Date desc";
        $query = $this->db->query($sql);
        return $query->result();
    }

    function getNameProject($id = "") {
        $pro = $this->setProject();
        return $pro[$id];
    }

    function Agenda_new($agenda = array()) {
        $sql = "insert into Agenda (meeintg_ID,item,desc,duration,Owner_id,Creation_Date,Created_By)";
        $sql.="  values('" . $agenda["idM"] . "','" . $agenda["item"] . "','" . $agenda["desc"] . "'";
        $sql.=",'" . $agenda["dur"] . "','" . $agenda["owner"] . "',NOW(),'" . $agenda["moi"] . "')";
        $this->db->query($sql);
    }

    function Agenda_new_init($agenda = array()) {
        $sql = "insert into Agenda (Creation_Date,Created_By) values('NOW()','" . $agenda["moi"] . "')";
        $this->db->query($sql);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function Agenda_update($agenda = array()) {
        $sql = "Update  Agenda set meeintg_ID = '" . $agenda["idM"] . "',item = '" . $agenda["item"] . "', ";
        $sql.="desc = '" . $agenda["desc"] . "',duration = '" . $agenda["dur"] . "',Owner_id = '" . $agenda["owners"] . "' ,";
        $sql.=" Last_Update_Date=NOW(),Last_Update_By= '" . $agenda["moi"] . "' where Agenda_ID = '" . $agenda["idA"] . "'";
        $this->db->query($sql);
    }

    function Agenda_delete($id = "") {
        $sql = "delete from Agenda where Agenda_ID= $id";
        $this->db->query($sql);
    }

}
