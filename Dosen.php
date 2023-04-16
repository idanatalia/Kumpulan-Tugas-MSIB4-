<?php
require_once 'Person.php';
class Mahasiswa extends Person{

    public $semester;
    public $jurusan;
    public function __construct($nama,$gender,$semester,$jurusan);
        parent::__cinstruct($nama,$gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
}


?>