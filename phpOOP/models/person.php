<?php
include './models/NPC.php';
class Person extends NPC{
//properties
    public $id;
    public $name;
    public $surname;
    public $age;
    public $birthDate;

    function __construct($name = null, $surname = null, $age = null) {
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;

}

public function toString()
{
    echo "Asmens vardas ". $this->name . " pavardė - ".$this->surname. "amžius - ". $this->actualAge().".<br>";
}

public function actualAge()
{
    $date = new DateTime($this->birthDate);
    $now = new DateTime();
    $interval = $now->diff($date);
    return $interval->y;
}

function makeASound()
{
    echo "<br>Why is it so?<br>";
}

}
?>