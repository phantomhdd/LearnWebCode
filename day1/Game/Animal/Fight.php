<?php

abstract class Fight {
    // property
    private $attackPower,
            $defencePower;

    // constructor
    public function __construct($attackPower, $defencePower){
        $this->attackPower = $attackPower;
        $this->defencePower = $defencePower;
    }

    // method abstract
    abstract public function serang(Hewan $enemy);
    abstract public function diserang();

    // setter and getter
    public function setAttackPower($attackPower){
        return $this->attackPower = $attackPower;
    }

    public function getAttackPower(){
        return $this->attackPower;
    }

    public function setDefencePower($defencePower){
        return $this->defencePower = $defencePower;
    }

    public function getDefencePower(){
        return $this->defencePower;
    }
}
