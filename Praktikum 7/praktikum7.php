<?php 
    if(isset($_POST["submit"])){
        $nilai_akhir = $_POST["Tugas"]*0.4 + $_POST["UTS"]*0.3 + $_POST["UAS"]*0.3;
        if ($nilai_akhir>=80) {
            $keterangan = "Anda Lulus Dengan Predikat A";
        }elseif ($nilai_akhir>=70) {
            $keterangan = "Anda Lulus Dengan Predikat B";
        }elseif ($nilai_akhir>=60) {
            $keterangan = "Anda Lulus Dengan Predikat C";
        }else {
            $keterangan = "Anda Lulus Dengan Predikat D";
        }
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="praktikum7.css">

    <title> Praktikum 7  </title>
  </head>
  <body>
  	<div class="container">
  		<form action="" method="post">
  			<h2 class="judul"> <b>DATA MAHASISWA</b> </h2>
			 <div class="form-group">
			    <label for="Nama">Nama Mahasiswa</label>
			    <input type="text" class="form-control" name="Nama" id="Nama">
			  </div>
			  <div class="form-group">
			    <label for="NIM">NIM</label>
			    <input type="text" class="form-control" name="NIM" id="NIM">
			  </div>
			  <div class="form-group">
			    <label for="Tugas"> Nilai Tugas</label>
			    <input type="number" class="form-control"  name="Tugas" id="Tugas" placeholder="0-100">
			  </div>
			  <div class="form-group">
			    <label for="UTS"> Nilai UTS</label>
			    <input type="number" class="form-control" name="UTS" id="UTS" placeholder="0-100">
			  </div>
			  <div class="form-group">
			    <label for="UAS"> Nilai UAS</label>
			    <input type="number" class="form-control" name="UAS" id="UAS" placeholder="0-100">
			  </div>
			  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form> 
  	</div>
 <?php if(isset($nilai_akhir)){ ?>   
        <div class="container">
  			<form >
	  			<h2 class="judul"> <b>NILAI AKHIR MAHASISWA</b> </h2>
				 <div class="form-group">
				    <label>Nama Mahasiswa</label>
				    <input type="text" class="form-control" placeholder="<?= $_POST["Nama"];?>" readonly>
				  </div>
				  <div class="form-group">
				    <label>NIM</label>
				    <input type="text" class="form-control" placeholder="<?= $_POST["NIM"]; ?>" readonly>
				  </div>
				  <div class="form-group">
				    <label> Nilai Tugas</label>
				    <input type="number" class="form-control" placeholder="<?= $_POST["Tugas"]; ?>" readonly>
				  </div>
				  <div class="form-group">
				    <label> Nilai UTS</label>
				    <input type="number" class="form-control" placeholder="<?= $_POST["UTS"]; ?>" readonly>
				  </div>
				  <div class="form-group">
				    <label> Nilai UAS</label>
				    <input type="number" class="form-control" placeholder="<?= $_POST["UAS"]; ?>" readonly>
				  </div>
				  <div class="form-group">
				    <label> Nilai Akhir</label>
				    <input type="number" class="form-control" placeholder="<?= $nilai_akhir; ?>" readonly>
				  </div>
				  <div class="form-group">
				    <label> Keterangan Hasil  </label>
				    <input type="text" class="form-control" placeholder="<?= $keterangan; ?>" readonly>
				  </div>
			</form> 
  		</div>
  		<br><br><br>
    <?php } 
    ?>
    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>