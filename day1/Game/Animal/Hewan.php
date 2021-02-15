<?php 

abstract class Hewan extends Fight{
    // property
    private $nama,
            $darah = 50,
            $jumlahKaki,
            $keahlian;

    // constructor
    public function __construct($nama, $jumlahKaki, $keahlian, $attackPower, $defencePower){
        parent::__construct($attackPower, $defencePower);
        $this->nama = $nama;
        $this->jumlahKaki = $jumlahKaki;
        $this->keahlian = $keahlian;
    }

    public function serang(Hewan $enemy) {
        echo $this->nama . " sedang menyerang";
    }
    
    public function diserang() {
        echo $this->nama . " sedang diserang";
    }

    // method abstract
    abstract public function atraksi();

    // setter and getter
    public function setNama($nama){
        return $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setDarah($darah){
        return $this->darah = $darah;
    }

    public function getDarah(){
        return $this->darah;
    }

    public function setJumlahKaki($jumlahKaki){
        return $this->jumlahKaki = $jumlahKaki;
    }

    public function getJumlahKaki(){
        return $this->jumlahKaki;
    }

    public function setKeahlian($keahlian){
        return $this->keahlian = $keahlian;
    }

    public function getKeahlian(){
        return $this->keahlian;
    }
}