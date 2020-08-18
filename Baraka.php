<!DOCTYPE html>
<html lang="id">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarakaChecking</title>
  <meta charset="utf-8">
  <script src="ajax.googleapis.js"></script>
  <script src="cdnjs.cloudflare.js"></script>
  <script src="bootstrapcdn.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="common.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="mainpage.css">
  <script type="text/javascript">

    function hit(){ 

             var dari = document.getElementById("tarif-from").value;              
             var isi = document.getElementById("isi"); 
             // var kober = document.getElementById("bet"); 
             var tipe =document.getElementById("set"); 
            // var k3 = document.getElementById("vol");          


               if (dari == "BGR") {  

                    isi.style.display = "block";
                    // kober.style.display = "none";
                    tipe.style.display = "block"; 
                   // k3.style.display = "none";

               } 

               else isi.style.display ="none";

                                              
             }
  </script>
</head>
<body>
 <div class="container-fluid">
    <div class="col-md-12 mb-12">
      <h2 style="text-align: center">Cek Tarif</h2>
      <form method="post">
        <div class="form-group row">
          <div class="col-md-12">
            <select class="form-control" id="tarif-from" name="prom"required>

                   <option selected disabled value="">Dari :</option>

                  <option disabled style="color: #BBA255;">----Jakarta Tanah Abang-----</option>
                  
                  <option value="TNH"> Cideng</option>
                  
                  <option value="TNH"> Kampung Bali</option>
                  
                  <option value="TNH"> Blok B</option>
                  
                  <option value="TNH"> Nagalintas</option>
                  
                  <option value="TNH"> Jati Negara</option>

                  <option disabled style="color:  #39929d;">----------JAWA BARAT-----------</option>

                  <option value="jak1"> Jakarta</option>
              
                  <option value="jak1"> Depok</option>
              
                  <option value="jak1"> Bekasi</option>
                              
                  <option value="SRG"> Tangerang</option>
              
                  <option value="SRG"> Cikarang</option>      
                                
                  <option value="JTG2"> Purwakarta</option>
              
                  <option value="SRG"> Karawang</option>

                  <option value="JTG2"> Indramayu</option>

                  <option value="SRG"> Serang</option>
              
                  <option value="BGR"> Bogor</option>
            
                  <option value="JTG2"> Cirebon</option>
              
                  <option value="BDG"> Bandung</option>
              
                  <option value="JBR"> Garut</option>

                  <option value="JBR"> Tasik</option>

                  <option value="SRG"> Sukabumi</option>

                  <option disabled style="color: #39929d;">-----------JAWA Tengah-----------</option>

                  <option value="JTG3"> Purwokerto</option>

                  <option value="JTG3"> Kebumen</option>

                  <option value="JTG2"> Tegal</option>

                  <option value="JTG2"> Pemalang</option>

                  <option value="JTG2"> Pekalongan</option>

                  <option value="JBR"> Banjar Patroman</option>

                  <option value="JTG1"> Semarang</option>

                  <option value="JTG1"> Kudus</option>

                  <option value="JTG1"> Jogja</option>

                  <option value="JTG1"> Kelaten</option>

                  <option value="JTG1"> Salatiga</option>

                  <option value="JTG1"> Solo</option>

                  <option value="JTG1"> Magelang</option>

                  <option disabled style="color: #39929d;">-----------JAWA TIMUR-----------</option> 
              
                  <option value="SBY"> Surabaya</option>

                  <option value="JTM1">Bangkalan</option>

                  <option value="JTM1"> Bojonegoro</option>

                  <option value="JTM1"> Gresik</option>

                  <option value="JTM1"> Sidoarjo</option>

                  <option value="JTM1"> Mojokerto</option>

                  <option value="JTM1"> Malang</option>

                  <option value="JTM1"> Kediri</option>

                  <option value="JTM1S"> Blitar</option>

                  <option value="JTM1S"> Tulungagung</option>

                  <option value="JTM2"> Pasuruhan</option>

                  <option value="JTM2"> Probolinggo</option>

                  <option value="JTM1S"> Nganjuk</option>

                  <option value="JTM1S"> Madiun</option>

                  <option value="JTM2U"> Jember</option>

                  <option value="JTM2U"> Lumajang</option>

                  <option value="JTM2U"> Banyuwangi</option>
              
                  <option disabled style="color: #39929d; ">-----------Bali-----------</option>

                  <option value="BALI"> Denpasar</option>

                  <option value="BALI"> Tabanan</option>

                  <option value="BALI"> Nusa Dua</option>

                  <option value="BALI"> Singaraja</option>

                  <option disabled style="color: #39929d; ">-----------Sumatra-----------</option>

                  <option value="LPG"> Bandar Lampung</option>

                  <option value="PLB"> Palembang</option>

                  <option value="JBI"> Jambi</option>

                  <option value="PKB"> Pekan Baru</option>

                
            </select>            
          </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
             <select class="form-control" id="tarif-to" name="tujuan" required>                          
                  <option selected="" disabled="" >Tujuan :</option>

                  <option disabled style="color:  #39929d;">----------JAWA BARAT-----------</option>

                  <option value="JKT"> Jakarta</option>
              
                  <option value="DPK"> Depok</option>
               
                  <option value="BKS"> Bekasi</option>
                              
                  <option value="TGR"> Tangerang</option>
              
                  <option value="CKR"> Cikarang</option>
               
                  <option value="PWA"> Purwakarta</option>

                  <option value="KRW"> Karawang</option>
               
                  <option value="IDW"> Indramayu</option>

                  <option value="SRG"> Serang</option>
              
                  <option value="BGR"> Bogor</option>
            
                  <option value="CRB"> Cirebon</option>
              
                  <option value="BDG"> Bandung</option>
              
                  <option value="GRT"> Garut</option>

                  <option value="TSK"> Tasik</option>

                  <option value="SKB"> Sukabumi</option>

                  <option disabled style="color: #39929d;">-----------JAWA Tengah-----------</option>

                  <option value="PWT"> Purwokerto</option>

                  <option value="KPB"> Kebumen</option>

                  <option value="TGL"> Tegal</option>

                  <option value="PML"> Pemalang</option>

                  <option value="PKL"> Pekalongan</option>

                  <option value="BTR"> Banjar Patroman</option>

                  <option value="KDS"> Kudus</option>

                  <option value="SMG"> Semarang</option>
               
                  <option value="JPI"> Jepara/Pati</option>

                  <option value="YGY"> Jogja</option>

                  <option value="KLT"> Kelaten</option>

                  <option value="SLTG"> Salatiga</option>

                  <option value="SOLO"> Solo</option>

                  <option value="MGL"> Magelang</option>

                  <option disabled style="color: #39929d;">-----------JAWA TIMUR-----------</option> 
              
                  <option value="SBY"> Surabaya</option>

                  <option value="BJG"> Bojonegoro</option>

                  <option value="GSK"> Gresik</option>

                  <option value="SDJ"> Sidoarjo</option>

                  <option value="MJK"> Mojokerto</option>

                  <option value="MLG"> Malang</option>

                  <option value="KDR"> Kediri</option>

                  <option value="BLT"> Blitar</option>

                  <option value="TGA"> Tulungagung</option>

                  <option value="PSR"> Pasuruhan</option>

                  <option value="PRB"> Probolinggo</option>

                  <option value="NGJ"> Nganjuk</option>

                  <option value="MDN"> Madiun</option>

                  <option value="MDN1"> Ponorogo/Magetan</option>

                  <option value="JBR"> Jember</option>

                  <option value="LMG"> Lumajang</option>

                  <option value="BYG"> Banyuwangi</option>
              
                  <option disabled style="color: #39929d; ">-----------Bali-----------</option>

                  <option value="DPS"> Denpasar</option>

                  <option value="TBN"> Tabanan</option>

                  <option value="ND2"> Nusa Dua</option>

                  <option value="SGRJ"> Singaraja</option>

                  <option disabled style="color: #39929d; ">-----------Sumatra-----------</option>
                 
                  <option value="BDR"> Bandar Lampung</option>

                  <option value="PLB"> Palembang</option>

                  <option value="JBI"> Jambi</option>

                  <option value="PKB"> Pekan Baru</option>
             </select>            
            </div>
         </div>         
        <div class="form-group row">
          <div class="col-md-12">
            <div class="input-group mb">
              <input type="text" class="form-control" name="brt" placeholder="Berat (KG) :" style="width: 56%;" required>&emsp;&emsp; 
              <input type="text" class="form-control" name="kol" id="isi" placeholder="  Koli" style="display: none;">
              <select class="form-control" id="set" name="pil" style="display: none;">
                <option disabled selected value=""> Jenis Barang :</option>
                <option value="spt"> Sparepart</option>
                <option value="stu"> Sepatu</option>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group row" id="vol">
          <label for="tarif-to" class="col-md-12 offset-md-12">Volume :</label> 
            <div class="col-md-12">
              <div class="input-group mb-3">
                <input type="text" name="le" placeholder="Panjang" class="form-control">
                (cm)x<input type="text" name="pa" placeholder="Lebar" class="form-control">
                (cm)x<input type="text" name="ti" placeholder="Tinggi" class="form-control">(cm)
              </div>
            </div>
        </div>   
        <div class="row">
          <div class="col-md-6 offset-md-3" style="text-align: center">
            <button type="submit" class="btn btn-primary btn-mainpage btn-lg" id="tombol">Cek Harga</button>
            <div class="row">
              <div class="col-md-12 offset-md-12 mt-12" style="text-align: center">
             <h1 class="display-5 font-weight-normal">
              <?php 

                // include ("fxjabar.php");
                // include ("fxjateng.php");
                // include ("fxjatim.php");
                // include ("fxjatim2.php");
                // include ("fxbalpal.php");

              ?></h1>
            </div>
            </div>
          </div>
        </div> 
    </form>
  </div>
 </body>
</html>
