<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();

class c_raid extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Users');
        $this->load->model('action_mo');
        $this->load->model('Tchat');
    }

    public function registre() {
        $this->load->view("3D/Connexion");
    }

    public function setconnexion() {
        $us = $_POST["u"];
        $pas = $_POST["p"];
        $data = $this->Users->testUser($us, $pas);
        if (empty($data)) {
            echo 'vide';
        } else {
            $_SESSION['id'] = $data[0]->User_ID;
            $_SESSION['picture'] = $data[0]->Picture;
        }
    }

    public function carousel() {
        if (isset($_SESSION["id"])) {
            $data["moi"] = $_SESSION['id'];
            $data["photo"] = $_SESSION['picture'];
            $data["user"] = $this->Users->get_user($_SESSION['id']);
            $this->load->view("3D/carousel", $data);
        } else {
            $this->registre();
        }
    }

    public function destroy() {
        unset(
                $_SESSION['id'], $_SESSION['picture']
        );
        $this->registre();
    }

    public function TchatC($id = "") {
        $data["moi"] = $_SESSION['id'];
        $data["autre"] = $id;
        $data["users"] = $this->Users->get_info_user($id);
        $this->load->view("3D/tchat", $data);
    }

    public function setMsg() {
        $id1 = $_POST["id1"];
        $id2 = $_POST["id2"];
        $msg = $_POST["msg"];
        $this->Tchat->set_message_users($id1, $id2, $msg);
    }

    public function getMsg() {
        $id1 = $_POST["id1"];
        $id2 = $_POST["id2"];
        $infouser = $this->Users->get_info_user($id2);
        $data = $this->Tchat->get_message_users($id1, $id2);
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]->user1 !== $_SESSION['id'] && $i === count($data) - 1) {
                echo "<div class='message '><figure class='avatar'><img src='" . base_url() . "/assets/img/" . $infouser[0]->Picture . "'/></figure>" . $data[$i]->Content . "</div>";
            } else {
                if ($data[$i]->user1 !== $_SESSION['id']) {
                    echo "<div class='message'><figure class='avatar'><img src='" . base_url() . "/assets/img/" . $infouser[0]->Picture . "'/></figure>" . $data[$i]->Content . "</div>";
                } else {
                    echo "<div class='message message-personal'>" . $data[$i]->Content . "</div>";
                }
            }
        }
    }

    public function checkKeyDown() {
        $id1 = $_POST["id1"];
        $id2 = $_POST["id2"];
        $dat = $this->Tchat->get_keydown_users2($id2, $id1);
        if (!(empty($dat))) {
            echo "plein";
        } else {
            echo "vide";
        }
    }

    public function setcheckKeyDown() {
        $type = $_POST["type"];
        $id1 = $_POST["id1"];
        $id2 = $_POST["id2"];
        switch ($type) {
            case "insert":
                $this->Tchat->set_keydown_users($id1, $id2);
                break;
            case "delete":
                $this->Tchat->Delete_keydown_users($id1, $id2);
                break;
        }
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

    public function setUpdate($id = "") {
        $data["project"] = $this->action_mo->getActionById($id);
        $data["project"] = $this->action_mo->setProject();
        $data["owner"] = $this->action_mo->setOwner();
        $this->load->view("sousRAID/EditActions", $data);
    }

    public function setCharts() {
        $data["risk"] = $this->action_mo->getRisk();
        $this->load->view("test/charts", $data);
    }

    public function setprojectcharts() {
        $data["project"] = $this->action_mo->setProject();
        $this->load->view("test/ProjectCharts", $data);
    }

    public function loaddata() {
        $mode = $_POST["mode"];
        $id = $_POST["id"];
        $risks = array();
        $data = array();
        switch ($mode) {
            case 'single':
                $data["risks"] = $this->action_mo->getRisksByID($id);
                $this->load->view("test/loadCharts", $data);
                break;
            case 'milti':
                foreach ($id as $r) {
                    array_push($risks, $this->moulinette($this->action_mo->getRisksByID($r)));
                }
                $data["data"] = $risks;
                $data["count"] = count($id);
                $this->load->view("test/setDATA", $data);
                break;
        }
    }

    function moulinette($data = '') {
        $aray = array();
        $project = $this->action_mo->setProject();
        foreach ($project as $key => $value) {

            foreach ($data as $row) {
                if ($key == $row->Project_ID) {
                    $risksData = array();
                    $risksData["name"] = $this->action_mo->getNameProject($key);
                    $risksData["y"] = $row->Probability * $row->Impact * 100;
                    $risksData["x"] = $row->Open_Date;
                    array_push($aray, $risksData);
                }
            }
        }
        return $aray;
    }

    public function files() {

        $data["file"] = $this->scan2();
        $this->load->view("file/page1", $data);
    }

    public function scan2() {
        $dir = FCPATH . 'assets/filesBrowser/files/';
        $out = $this->scan($dir);
        return $out;
    }

    public function UserToJson() {
        $user = $this->Users->get_user($_SESSION['id']);
        $data = array();
        for ($i = 0; $i < count($user); $i++) {

            $row = array();
            $row["ID"] = $user[$i]->User_ID;
            $row["name"] = $user[$i]->Lastname . " " . $user[$i]->Firstname;
            $data[] = $row;
        }
        echo json_encode($data);
    }

    private function scan($dir) {

        $files = array();

        // Is there actually such a folder/file?

        if (file_exists($dir)) {

            foreach (scandir($dir) as $f) {

                if (!$f || $f[0] == '.') {
                    continue; // Ignore hidden files
                }

                if (is_dir($dir . '/' . $f)) {

                    // The path is a folder

                    $files[] = array(
                        "name" => $f,
                        "type" => "folder",
                        "path" => $dir . '/' . $f,
                        "items" => $this->scan($dir . '/' . $f) // Recursively get the contents of the folder
                    );
                } else {

                    // It is a file

                    $files[] = array(
                        "name" => $f,
                        "type" => "file",
                        "path" => $dir . '/' . $f,
                        "size" => filesize($dir . '/' . $f) // Gets the size of this file
                    );
                }
            }
        }

        return $files;
    }

    public function timeline() {
        $data["actions"] = $this->action_mo->lastNday("select * from actions order by Due_Date desc");
        $this->load->view("timeline", $data);
    }

    function agenda() {
        $this->load->view("agenda/Agenda");
    }

    function checklist() {
        $this->load->view("agenda/checklist");
    }

    function alimente_row($idMeeting = "") {
        $operation = $_POST["operation"];
        $row = $_POST["row"];
        switch ($operation) {
            case "I":
                $this->action_mo->Agenda_new($row);
                break;
            case "U":
                $this->action_mo->Agenda_update($row);
                break;
            case "D":
                $this->action_mo->Agenda_delete($idMeeting);
                break;
        }
    }

    function initAgenda() {
        $agenda["moi"] = "28";
        //   $id = $this->action_mo->Agenda_new_init($agenda);
        $id = "2";
        $ret = array("idAgenda" => $id);
        echo json_encode($ret);
    }

    function page1() {
        $this->load->view("upload/head");
        $data["images"] = $this->action_mo->getFile_info();
        $this->load->view("upload/page1", $data);
    }

    function upload() {

        $url = FCPATH . "application/third_party/img/";
        $url_base = base_url() . "application/third_party/img/";
        $Images = count(isset($_FILES['file']['name']) ? $_FILES['file']['name'] : 0);
        $infoImagene = array();
        $ext = "";
        $size = "";
        for ($i = 0; $i < $Images; $i++) {
            $nombrefile = isset($_FILES['file']['name'][$i]) ? $_FILES['file']['name'][$i] : null;
            $nombreTemp = isset($_FILES['file']['tmp_name'][$i]) ? $_FILES['file']['tmp_name'][$i] : null;
            $ext = explode('.', basename($_FILES['file']['name'][$i]));
            $size = $_FILES['file']["size"][$i];
            $filepath = $url . $nombrefile;
            if (!is_file($filepath)) {
                move_uploaded_file($nombreTemp, $filepath);
                $key = $this->action_mo->setFile_info($nombrefile, $ext[1], $size);
                $imag = $this->action_mo->getfile_info_byID_all($key);
                foreach ($imag as $row) {
                    $infoImagene[$i] = array("caption" => "" . $url_base . "" . $row->name . "", "height" => "120px", "url" => base_url() . "index.php/c_raid/delete", "key" => $row->id_file);
                    $Imagesinfovalue[$i] = "<img  height='120px'  src='" . $url_base . "" . $row->name . "' class='file-preview-image'>";
                    $arr = array("file_id" => 0, "overwriteInitial" => true, "initialPreviewConfig" => $infoImagene,
                        "initialPreview" => $Imagesinfovalue);
                    echo json_encode($arr);
                }
            } else {
                echo 0;
            }
        }
    }

    function delete() {

        $path = FCPATH . "application/third_party/img/";
        if ($_SERVER['PATH_INFO'] == "/c_raid/delete") {
            parse_str(file_get_contents("php://input"), $datosDELETE);
            $key = $datosDELETE['key'];
            $file = $this->action_mo->getfile_info_byID($key);
            if (unlink($path . $file)) {
                $this->action_mo->delete_file_byID($key);
                echo 0;
            }
        }
    }

}
