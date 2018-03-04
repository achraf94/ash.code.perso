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
        $req1 = "select Project_ID,Project_Name from projects";
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

}
