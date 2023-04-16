<?php
class pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    // private $gapok;
    static $jml = 0;
    const PT= 'PT.HTP Indonesia';

    public function __construct($nip,$nama,$jabatan,$agama,$status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        // $this->gapok = $gapok;
        self::$jml++;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 6000000; break;
            case 'Karyawan': $gapok = 4000000; break;
            default: $gapok;
        }
        return $gapok;
    }
    public function tunjabatan($jabatan){
        $this->jabatan = $jabatan;
        $tunjabatan = $this->setGajiPokok($this->jabatan)*0.2;
        return $tunjabatan;
      
    }

    public function tunkel($jabatan){
        $this->jabatan = $jabatan;
        $tunkel = $this->setGajiPokok($this->jabatan)*0.1;
        return $tunkel;
      
    }
    public function zakat($jabatan){
        $this->jabatan = $jabatan;
        if ($this->setGajiPokok($this->jabatan)>= 6000000){
            $zakat = $this->setGajiPokok($this->jabatan)*0.025;
        }
        else $zakat="0";
        
        return $zakat;
      
    }
        public function cetak(){
            echo 'NIP pegawai : '.$this->nip;
            echo '<br>Nama Pegawai : '.$this->nama;
            echo '<br>Jabatan : '.$this->jabatan;
            echo '<br>Agama : '.$this->agama;
            echo '<br>Satatus : '.$this->status;
            echo '<br>Gaji Pokok : '.$this->setGajiPokok($this->jabatan);
            echo '<br>Tunjangan Jabatan : '.$this->tunjabatan($this->jabatan);
            echo '<br>Tunjangan Keluarga : '.$this->tunkel($this->jabatan);
            echo '<br>Tunjangan Zakat : '.$this->zakat($this->jabatan);
            echo '<hr>';

        }
}
?>