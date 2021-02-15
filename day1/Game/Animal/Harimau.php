<?php 

class Harimau extends Hewan{
    // constanta
    const TYPE = 'Harimau';
    private static $angka = 1;

    // constructor
    public function __construct(){
        $nama = self::TYPE . '_' . self::$angka++;
        parent::__construct($nama, 4, "lari cepat", 7, 8);
    }

    // atraksi
    public function atraksi(){
        return $this->getNama() . " sedang " . $this->getKeahlian();
    }

    // serang
    public function serang(Hewan $enemy) {
        $enemy->setDarah($enemy->getDarah() - $this->getAttackPower() / $enemy->getDefencePower());
        echo $this->getNama() . " sedang menyerang " . $enemy->getNama() . '<br/>';
    }

    // diserang
    public function diserang() {
        echo $this->getNama() . " sedang diserang";
    }

    // get Info Hewan
    public function getInfoHewan(){
        $info = "INFO HEWAN " . '<br/>' .
                "Jenis: " . self::TYPE . '<br/>' .
                "Nama: " . $this->getNama() . '<br/>' .
                "Darah: " . $this->getDarah() . '<br/>' .
                "Jumlah Kaki: " . $this->getJumlahKaki() . '<br/>' .
                "Keahlian: " . $this->getKeahlian() . '<br/>' .
                "Attack Power: " . $this->getAttackPower() . '<br/>' .
                "Defence Power: " . $this->getDefencePower();
        echo $info;
    }
}