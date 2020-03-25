<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalduaController extends Controller
{

    private $uangIbu = 1575250;
    private $arrUang = [100000, 50000, 20000, 5000, 100, 50];

    public function index(){
        return view('welcome');
    }

    public function soalsatu(){
        echo "<h1>Soal 1</h1> <hr/>";
        echo"Buatlah source code PHP yang menghasilkan data sebagai berikut:";
        echo "<br />";

        $bintang = "*";
        $min     = "-";
        $plus    = "+";

        $cek = 0;
        
        for( $a=5;$a>=0;$a--){
            for($a1=5;$a1>$a;$a1--){
                if($cek == 1){
                    echo $plus;
                }elseif($cek == 2){
                    echo $min;
                }else{
                    echo $bintang; 
                }

            } 
                echo"<br>"; 
                // echo $cek;
            if($cek == 3)
            {
                $cek = 0;
            }
            $cek++;
        }


        if($cek == 3)
        {
            $cek = 0;
        }


        for( $a=1; $a<=4; $a++){
            for($c=4; $c>=$a; $c-=1){
                if($cek == 1){
                    echo $plus;
                }elseif($cek == 2){
                    echo $min;
                }else{
                    echo $bintang; 
                }
            }
            if($a != 0){ 
                echo"<br>";
            }
            if($cek == 3)
            {
                $cek = 0;
            }
            $cek++;
        } 


        echo "<hr />";
        echo "<a href='/'>Index Soal</a>";
    }


    public function soaldua()
    {
        echo "<h1>Soal 2</h1> <hr/>";
        echo "Ibu ingin mengambil uang tabungan sejumlah Rp. 1.575.250,- yang dimilikinya di sebuah bank.
        Misalkan  pada  saat  itu  uang  pecahan  yang  berlaku  adalah  Rp.  100.000,-;  Rp. 50.000,-; Rp.
        20.000,-; Rp. 5.000,-; Rp. 100,- dan Rp. 50. Dengan menggunakan script PHP, tentukan
        banyaknya masing-masing uang pecahan yang diperoleh ibu tadi. ";
        echo "<br />";

        echo "<h4>Uang Ibu ada : " . $this->uangIbu . "</h4>";

        for ($i = 0; $i < count($this->arrUang); $i++) {
            if ($this->uangIbu % $this->arrUang[$i] < $this->uangIbu) {
                echo "Uang " . $this->arrUang[$i] .  " = " . floor($this->uangIbu / $this->arrUang[$i]) . " Lembar" . "<br/>";
                    $this->uangIbu = $this->uangIbu % $this->arrUang[$i];
            }
        }

        echo "<hr />";
        echo "<a href='/'>Index Soal</a>";
    }
}
