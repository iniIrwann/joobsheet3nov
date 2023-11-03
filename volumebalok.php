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
    <label for="panjang1">Masukan Panjang </label>
    <input type="text" class="form-control col-sm-2"  name="panjang" placeholder="" value="" required="" id="panjang"><br>
    <label for="lebar1">Masukan Lebar </label>
    <input type="text" class="form-control col-sm-2"  name="lebar" placeholder="" value="" required="" id="lebar"><br>
    <label for="tinggi1">Masukan Tinggi </label>
    <input type="text" class="form-control col-sm-2"  name="tinggi" placeholder="" value="" required="" id="tinggi1"><br>

    <button type="submit" class="btn btn-primary" name="submit">Hasil</button>
    </form>
    

    <?php
 if (isset($_POST['submit'])){
   
    $panjang1 = $_POST['panjang'];
    $lebar1 = $_POST['lebar'];
    $tinggi1 = $_POST['tinggi'];
   
       
      $Hasil = $panjang1 * $lebar1 * $tinggi1; 
    echo "<br>";
      echo"Hasil Perhitungan Volume Balok Tersebut Adalah : $Hasil;";
   
 }
 ?>
  </div>
   </body>
</html>