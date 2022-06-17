<?php
class Movie {
    public $name;
    public $length;
    private $box_office;
  
    public function __construct($name, $length) {
      $this->name = $name;
      $this->length = $length;
    }

    public function setBoxOffice($_box_office){
        $this->box_office = $_box_office;
    }

    public function getBoxOffice(){
        return $this->box_office;
    }
}