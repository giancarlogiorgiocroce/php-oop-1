<?php
$ciao = 'ciao';

class Movie {
    private $name;
    private $length;

    public function __constructor(
                                $_name, 
                                $_length){
        $this->name = $_name;
        $this->length = $_length;
    }

    public function setName($_name){
        $this->name = $_name;
    }
    public function setName($_length){
        $this->length = $_length;
    }
    
    public function getName(){
        return $this->name;
    }
    public function getLength(){
        return $this->length;
    }
}

<div class="film">
<?php foreach ($movies as $k => $v):?>
    <h4> Nome Film: </h4>
    <h3> <?php echo $v->name ?> </h3>
    <h4> Durata: </h4>
    <h3> <?php echo $v->length ?> </h3>
    <br>
<?php endforeach;?>
</div>