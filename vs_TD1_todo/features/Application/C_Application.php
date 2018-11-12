<?php
class Application{
    private $ID_a;
    private $Name_a;
    private $Date_Create_a;
    private $created_by;

    public function __construct($id,$name,$date,$by){
        $this->ID_a = $id;
        $this->Name_a = $name;
        $this->Date_Create_a = $date;
        $this->created_by = $by;
    }
}
?>