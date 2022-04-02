<?php 
class NilaiMahasiswa {
    public $matkul;
    public $nilai;
    public $nim;
    
    function __construct ($matkul, $nilai, $nim){
        $this-> matkul = $matkul;
        $this-> nilai = $nilai;
        $this-> nim = $nim;
    }

    function hitungnilai(){
        return $this->nilai;
    }

    function grade () {
        if ($this->nilai > 85 && $this->nilai <= 100)
            return "A";
        
        elseif ($this->nilai > 84 && $this->nilai <= 70)
            return "B";
            
        elseif ($this->nilai > 56 && $this->nilai <= 69)
            return "C";
        
        elseif ($this->nilai > 36 && $this->nilai <= 55)
            return "D";
        
        elseif ($this->nilai > 0 && $this->nilai <= 35)
            return "E";
    }

    function hasil (){
        if ($this->nilai < 56)
            return "TIDAK LULUS";
            
        elseif ($this->nilai >= 56) 
            return "LULUS";
    }
}
?>