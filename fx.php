<?php
     error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
      

      include ("kone.php");

       
        // rumus dasar//

    $data = mysqli_query($koneksi,"select * from tabelharga");
    while($d = mysqli_fetch_array($data)){

          $berat = $_POST['brt'];
            $Lebar = $_POST['le'];
            $Panjang = $_POST['pa'];
            $Tinggi = $_POST['ti'];
            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];


        if($berat == 1 &&$d['Dari'] == $dari && $d['Tujuan'] ==$tujuan){

          echo rupiah($d['fix1']);
        }

        elseif ($berat == 2 && $d['Dari']== $dari && $d['Tujuan'] ==$tujuan) {

          echo rupiah($d['fix2']);
        }

        elseif ($berat > 2 &&$berat < 11 && $d['Dari'] == $dari &&$d['Tujuan'] == $tujuan ) {

          echo rupiah((($berat - 1) * $d['Kg3'] + $d['minim3']) + ($Lebar * $Panjang * $Tinggi  * ($d['kubikasi'] / 1000000)));
        }

        elseif ($berat > 10 &&$berat < 101 && $d['Dari'] == $dari &&$d['Tujuan'] == $tujuan ) {

          echo rupiah((($berat - 10) * $d['Kg11'] + $d['minim11']) + ($Lebar * $Panjang * $Tinggi  * ($d['kubikasi'] / 1000000)));
        }

        elseif ($berat > 100 && $d['Dari'] == $dari &&$d['Tujuan'] == $tujuan) {

          echo rupiah(($berat * $d['lebih100']) + ($Lebar * $Panjang * $Tinggi  * ($d['kubikasi'] / 1000000)));
        }

        elseif ($berat == 0 &&$d['Dari'] == $dari &&$d['Tujuan'] == $tujuan) {

          echo rupiah($Lebar * $Panjang * $Tinggi  * ($d['kubikasi'] / 1000000));
        }
    }
        


        // rumus Bogor //

        $data2 = mysqli_query($koneksi,"select * from tabelharga2");
        while($dd = mysqli_fetch_array($data2)){

            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];
            $kol = $_POST['kol'];
            $jenis = $_POST['pil'];

        if ($dd['Dari'] == $dari &&$dd['Tujuan'] == $tujuan &&$jenis == 'stu') {

            echo rupiah($dd['fix2'] * $kol);
        }
        elseif ($dd['Dari'] == $dari &&$dd['Tujuan'] == $tujuan &&$jenis == 'spt') {

            echo rupiah($dd['fix1'] * $kol);
        }
    }


        // jambi riau II

        $data3 = mysqli_query($koneksi,"select * from tabelharga3");
        while($dds = mysqli_fetch_array($data3)){

            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];
            $berat = $_POST['brt'];
            $Lebar = $_POST['le'];
            $Panjang = $_POST['pa'];
            $Tinggi = $_POST['ti'];


         // ruwet

        if ($berat == 1 &&$dds['Dari'] ==$dari  &&$dds['Tujuan'] ==$tujuan ) {
            
         echo rupiah($dds['fix1']);
            
        }
        elseif ($berat >1 &&$berat < 11 && $dds['Dari'] ==$dari &&$dds['Tujuan'] ==$tujuan ) {
            
         echo rupiah(($dds['fix1'] + ($berat-1) * $dds['fix2'])+ ($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000)));
        }

        elseif ($berat >10 &&$berat < 21 &&$dds['Dari'] ==$dari &&$dds['Tujuan'] ==$tujuan ) {

         echo rupiah($dds['minim3'] + ($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000)));
        }

        elseif ($berat > 20 &&$dds['Dari'] ==$dari &&$dds['Tujuan'] ==$tujuan) {

         echo rupiah($dds['Kg3'] * $berat);
        }

        elseif ($berat == 0 &&$dds['Dari'] ==$dari &&$dds['Tujuan']==$tujuan ){

         echo rupiah($Lebar * $Panjang * $Tinggi  * ($dds['kubikasi'] / 1000000));

        } 

    }
        //BANDAR METRO PALEMBANG

        $datab = mysqli_query($koneksi,"select * from tabelharga4");
        while($ds = mysqli_fetch_array($datab)){

            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];
            $berat = $_POST['brt'];
            $Lebar = $_POST['le'];
            $Panjang = $_POST['pa'];
            $Tinggi = $_POST['ti'];

         // ruwet

        if ($berat== 1 &&$ds['Dari'] ==$dari  &&$ds['Tujuan'] ==$tujuan ) {
            
         echo rupiah($ds['fix1']);
            
        }
        elseif ($berat ==2 &&$ds['Dari'] == $dari &&$ds['Tujuan'] == $tujuan) {
            
            echo rupiah($ds['fix2']);
        }
        elseif ($berat >2 &&$berat < 51 && $ds['Dari'] ==$dari &&$ds['Tujuan'] ==$tujuan ) {
            
         echo rupiah($ds['minim3']);
        }

        elseif ($berat >50  &&$ds['Dari'] ==$dari &&$ds['Tujuan'] ==$tujuan ) {

         echo rupiah(($ds['perKg'] * $berat ) + ($Lebar * $Panjang * $Tinggi  * ($ds['kubikasi'] / 1000000)));
        }

        elseif ($berat == 0 &&$ds['Dari'] ==$dari &&$ds['Tujuan']==$tujuan ){

         echo rupiah($Lebar * $Panjang * $Tinggi  * ($ds['kubikasi'] / 1000000));

        } 

    }

        //serang!!

        $datb = mysqli_query($koneksi,"select * from serang");
        while($dsd = mysqli_fetch_array($datb)){

            $tujuan = $_POST['tujuan'];
            $dari = $_POST['prom'];
            $berat = $_POST['brt'];
            $Lebar = $_POST['le'];
            $Panjang = $_POST['pa'];
            $Tinggi = $_POST['ti'];

         // ruwet

        if ($berat== 1 &&$dsd['Dari'] ==$dari  &&$dsd['Tujuan'] ==$tujuan ) {
            
         echo rupiah($dsd['fix1']);
            
        }
        elseif ($berat ==2 &&$dsd['Dari'] == $dari &&$dsd['Tujuan'] == $tujuan) {
            
            echo rupiah($dsd['fix2']);
        }
        elseif ($berat >2 &&$berat < 51 && $dsd['Dari'] ==$dari &&$dsd['Tujuan'] ==$tujuan ) {
            
         echo rupiah(($dsd['minim3'] + $berat * $dsd['Kg3']) + ($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000)));
        }

        elseif ($berat >50  &&$dsd['Dari'] ==$dari &&$dsd['Tujuan'] ==$tujuan ) {

         echo rupiah(($dsd['L100'] * $berat ) + ($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000)));
        }

        elseif ($berat == 0 &&$dsd['Dari'] ==$dari &&$dsd['Tujuan']==$tujuan ){

         echo rupiah($Lebar * $Panjang * $Tinggi  * ($dsd['kubikasi'] / 1000000));

        } 

    }

    //Tanah Abang
   

    $dat = mysqli_query($koneksi,"SELECT * FROM tanah_abang");
    while($uwu = mysqli_fetch_array($dat)){

        $tujuan = $_POST['tujuan'];
        $dari = $_POST['prom'];
        $berat = $_POST['brt'];
        $Lebar = $_POST['le'];
        $Panjang = $_POST['pa'];
        $Tinggi = $_POST['ti'];


        if($berat > 10 &&$berat < 26 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan){

            echo rupiah(($uwu['range1']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000));

        }

        elseif($berat > 25 &&$berat <51 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan){

            echo rupiah(($uwu['range2']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000));

        }

        elseif ($berat > 50 &&$berat < 101 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {
            
            echo rupiah(($uwu['range3']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000));

        }

        elseif ($berat >100 &&$berat <151 &&$uwu['dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            echo rupiah(($uwu['range4']) + $Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000));
            
        }

        elseif ($berat >150 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            echo rupiah(($uwu['range5']) + $Lebar * $Panjang * $tinggi * ($uwu['kubikasi']/1000000));
            
        }
       elseif($berat === 1 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            echo rupiah($uwu['fix1']);

       }

       elseif($berat === 2 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan) {

            echo rupiah($uwu['fix2']);
       }

           // elseif ($berat >2 &&$berat <11 &&$uwu['Dari'] == $dari &&$uwu['Tujuan'] == $tujuan ) {

           //      echo rupiah((($berat * $uwu['Kg3']) + $uwu['minim3']) + ($Lebar * $Panjang * $Tinggi * ($uwu['kubikasi']/1000000)));
               
           // }
     }


     $tnh = mysqli_query($koneksi,"SELECT * FROM tnh1");
     while ($owo = mysqli_fetch_array($tnh)) {
         
        if ($berat == 1 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan){

            echo rupiah( $owo['fix1']);

        }
        elseif ($berat == 2 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan)  {
            echo rupiah( $owo['fix2']);
        }
        elseif ($berat > 2 &&$berat < 11 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan)  {
            echo rupiah(($owo['Kg3'] * $berat) + $owo['minim'] + ($Panjang * $Lebar * $Tinggi * ($owo['kubikasi']/1000000)));
        }
        elseif ($berat >10 &&$berat < 26 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan) {
            echo rupiah($owo['range1']);
        }
        elseif ($berat > 25 &&$berat <51 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan) {
            echo rupiah($owo['range2']);
        }
        elseif ($berat > 50 &&$owo['Dari'] == $dari &&$owo['Tujuan'] == $tujuan){
            echo rupiah($berat * $owo['range3']);
        }

     }

    function rupiah($angka){  

                        $hasil_rupiah = "Rp. " . number_format($angka,2,',','.'); 
                        return $hasil_rupiah; 
                      }
                      ?>