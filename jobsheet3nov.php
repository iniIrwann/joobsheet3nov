<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body><br>
      <div class="container justify-content-center">
  <form method="post" action="" class="col-sm-6">
    <label for="Gol">Masukan Golongan Anda </label>
    <input type="text" class="form-control col-sm-2"  name="golongan" placeholder="1 , 2 , 3" value="" required="" id="Gol"><br>
    <label for="anak1">Jumlah Anak </label>
    <input type="text" class="form-control col-sm-2"  name="anak1" placeholder="Masukan Jumlah Anak" value="" required="" id="Gol"><br>
    <label for="lembur1">Jumlah Jam Lembur </label>
    <input type="text" class="form-control col-sm-2"  name="lembur1" placeholder="Masukan Jam Lembur" value="" required="" id="Gol"><br>

    <button type="submit" class="btn btn-primary" name="submit">Result</button>
    </form>
    </div>
  


<?php
 if (isset($_POST['submit'])){
   
    $Golongan = $_POST['golongan'];
    $JMLanak = $_POST['anak1'];
    $Lembur = $_POST['lembur1'];
   
    if ($Golongan == 1){
     $gajipokok = 1700000;
     $tunjangan_istri = 300000;
     $tunjangan_anak  = 100000;
     $jml_jam_lembur  = 50000;
    }
    else if($Golongan == 2){
        $gajipokok = 2000000;
        $tunjangan_istri = 500000;
        $tunjangan_anak  = 150000;
        $jml_jam_lembur  = 75000;
       }
    else if
       ($Golongan == 3){
        $gajipokok = 2500000;
        $tunjangan_istri = 750000;
        $tunjangan_anak  = 200000;
        $jml_jam_lembur  = 100000;
       }
       $gaji_kotor = $gajipokok + $tunjangan_istri + ($tunjangan_anak * $JMLanak) + ($jml_jam_lembur * $Lembur);
       $pajak  = $gaji_kotor * 0.05;
       $Potongan = $gaji_kotor - 100000 - $pajak;
   
   
 ?>

  <strong><br><br>
 <div class="container justify-content-center" >
 <div class="card ">
  <div class="card-header " align="center">
    Bank Syariah Indonesia
  </div>
  <div class="card-body">
  <div class="container">
   <p>=============================================================================================</p>
   <div class="row">
   <div class="col-sm-6">
       <p>Golongan </p>
       <p>Gaji Pokok</p>
       <p>Tunjangan Istri</p>
       <p>Jumlah Anak</p>
       <p>Tunjangan Anak</p>
       <p>Jumlah Jam Lembur</p>
       <p>Lembur</p>  
   </div>
   <div class="col-sm-6">
       <p>: <?php echo "$Golongan"?> </p>
       <p>: Rp.<?php echo"$gajipokok"?></p>
       <p>: Rp.<?php echo "$tunjangan_istri"?></p>
       <p>: <?php echo"$JMLanak"?></p>
       <p>: Rp.<?php echo"$tunjangan_anak"?></p>
       <p>: <?php echo"$Lembur"?></p>
       <p>: Rp.<?php echo"$jml_jam_lembur"?></p>
   </div>
   <p>----------------------------------------------------------------------------------------------------------------</p>
</div>

<div class="row">
    <div class="col-sm-6">
        <p>Gaji Kotor </p>
    </div>
    <div class="col-sm-6">
        <p>: Rp.<?php echo"$gaji_kotor"?></p>
    </div>
</div>
<p>----------------------------------------------------------------------------------------------------------------</p>
 
 <div class="row">
     <div class="col-sm-6">
         <p>Potongan</p>
         <p>a. BPJS</p>
         <p>b. Pajak</p>
     </div>
     <div class="col-sm-6">
         <p></p>
         <p>: Rp.100.000</p>
         <p>: Rp.<?php echo"$pajak"?></p>
     </div>
 </div>
 <p>=============================================================================================</p>
 <div class="row">
     <div class="col-sm-6">
         <p>Total Gaji</p>
     </div>
     <div class="col-sm-6">
         <p>: Rp.<?php echo"$Potongan"?></p>
     </div>
 </div>
 <p>=============================================================================================</p>

  </div>
  </div>
</div>
 </div></strong><br><br>
 <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
