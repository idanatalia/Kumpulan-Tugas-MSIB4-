<?php
class pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT= 'PT.HTP Indonesia';

    public function __construct($nip,$nama,$jabatan,$agama,$status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 15000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default:$gapok;
        }
        return $gapok;
        }
        public function cetak(){
            echo 'NIP pegawai'.$this->nip;
            echo 'Nama Pegawai'.$this->nama;
            echo 'Jabatan'.$this->jabatan;
            echo 'Agama'.$this->agama;
            echo 'Satatus'.$this->status;
            echo 'Gaji Pokok'.$this->setGajiPokok($this->jabatan);

        }
}
?>