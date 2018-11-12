<?php

class features{
    private $ID_f;
    private $Name_f;
    private $Date_Create_f;
    private $owner_f;

    public function __construct($id,$name,$date,$ow){
        $this->ID_f = $id;
        $this->Name_f = $name;
        $this->Date_Create_f = $date;
        $this->owner_f = $ow;
    }
}


class Suivi_Versioning{
    private $ID_v; // id version
    private $ID_creator_f; // Features init
    private $ID_modifier_f; // Features updated
    private $model;// prod/dev
    private $comments;// 
    private $date_create;


    public function __construct($id,$idinit,$idUpd,$model,$com,$dc){
        $this->ID_v = $id;
        $this->ID_creator_f = $idinit;
        $this->ID_modifier_f = $idUpd;
        $this->model = $model;
        $this->comments = $com;
        $this->date_create = $dc;
    }
}
?>