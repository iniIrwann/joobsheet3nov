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
          <h2 class="" align="center">BIG SUPER</h2>
  <form method="post" action="" class="col-sm-6">
    <label for="Gol">Masukan Barang Belanjaan </label>
    <input type="text" class="form-control col-sm-2"  name="barang" placeholder="Masukan Barang Belanjaan Anda" value="" required="" id="Gol"><br>
    <label for="anak1">Jumlah Barang Belanjaan </label>
    <input type="text" class="form-control col-sm-2"  name="jumlah" placeholder="Masukan Jumlah Barang" value="" required="" id="anak1"><br>
    <label for="lembur1">Harga Barang</label>
    <input type="text" class="form-control col-sm-2"  name="harga" placeholder="Masukan Total Harga" value="" required="" id="lembur1"><br>
    <button type="submit" class="btn btn-dark" name="submit">Result</button>
    </form>
    </div>
    <?php
 if (isset($_POST['submit'])){
   
    $barang1 = $_POST['barang'];
    $jumlah1 = $_POST['jumlah'];
    $harga1 = $_POST['harga'];

    $pajak = $harga1 * 0.1;
    $diskon = $harga1 * 0.2;
    $hasilakhir = $harga1 +  $pajak - $diskon;
    
 
    ?>
      <strong><br><br>
 <div class="container justify-content-center" >
 <div class="card ">
  <div class="card-header " align="center">
    BIG SUPER
  </div>
  <div class="card-body">
      <div class="row">
  <div class="col-sm-6">
      <p>Barang Belanjaan</p>
      <p>Total Belanjaan</p>
      <p>Total Harga Barang Belanjaan Anda</p>
      <p>Pajak</p>
      <p>Diskon</p>
      <?php echo "Total Belanjaan anda beserta diskon dan pajak adalah ";?>
  </div>
  <div class="col-sm-6">
      <p>: <?php echo"$barang1"?> </p>
      <p>: <?php echo"$jumlah1"?> </p>
      <p>: <?php echo"$harga1"?> </p>
      <p>: 10%</p>
      <p>: 20%</p>
      <?php echo": $hasilakhir"?>
  </div>
  </div>
  <div class="container">
  </div>
  </div>
  </div>
 </div>
</body>
</html>

<?php }?>
   