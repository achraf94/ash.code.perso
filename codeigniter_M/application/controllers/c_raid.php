<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class c_raid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Users');
        $this->load->model('action_mo');
    }

    public function index() {
        $this->load->view("teste");
    }

    public function action() {
        $data["actions"] = $this->action_mo->lastNday("select * from actions");
        $data["project"] = $this->action_mo->setProject();
        $data["owner"] = $this->action_mo->setOwner();
        $this->load->view("actions", $data);
    }

    public function decision() {
        $data["decision"] = $this->action_mo->lastNday("select * from decisions");
        $data["project"] = $this->action_mo->setProject();
        $this->load->view("decision", $data);
    }

    public function issue() {
        $data["issues"] = $this->action_mo->lastNday("select * from issues");
        $data["project"] = $this->action_mo->setProject();
        $data["owner"] = $this->action_mo->setOwner();
        $this->load->view("Issues", $data);
    }

    public function risk() {
        $data["risks"] = $this->action_mo->lastNday("select * from Risks");
        $data["project"] = $this->action_mo->setProject();
        $data["owner"] = $this->action_mo->setOwner();
        $data["risk_categoriy"] = $this->action_mo->setRiskCat();
        $this->load->view("risks", $data);
    }

}
