<?php 
	//membuat kalkulator

	//tampung inputan textfield ke dalam variabel
	$angka1 = @$_POST['tangka1'];
	$angka2 = @$_POST['tangka2'];
	$hasil = @$_POST['thasil'];

	//uji jika tombol tambah di klik	
	if(isset($_POST['btambah'])){
		$hasil = $angka1 + $angka2;
	}

	//uji jika tombol kurang di klik	
	if(isset($_POST['bkurang'])){
		$hasil = $angka1 - $angka2;
	}

	//uji jika tombol bagi di klik	
	if(isset($_POST['bbagi'])){
		$hasil = $angka1 / $angka2;
	}

	if(isset($_POST['bkali'])){
		$hasil = $angka1 * $angka2;
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Kalkulator sederhana</title>
 </head>
 <body>
 
 <form method="post">
 	<table align="center" border="0">
 		<tr>
 			<td colspan="3">Kalkulator Sederhana</td>
 		</tr>
 		<tr>
 			<td colspan="3"> <hr> </td>
 		</tr>
 		<tr>
 			<td>Angka 1</td>
 			<td>:</td>
 			<td>
 				<input type="text" name="tangka1" value="<?=$angka1?>">
 			</td>
 		</tr>
 		<tr>
 			<td>Angka 2</td>
 			<td>:</td>
 			<td>
 				<input type="text" name="tangka2" value="<?=$angka2?>">
 			</td>
 		</tr>
 		<tr>
 			<td></td>
 			<td></td>
 			<td>
 				<input type="submit" name="btambah" value="+">
 				<input type="submit" name="bkurang" value="-">
 				<input type="submit" name="bbagi" value="/">
 				<input type="submit" name="bkali" value="*">
 			</td>
 		</tr>
 		<tr>
 			<td>Hasil</td>
 			<td>:</td>
 			<td>
 				<input type="text" name="thasil" value="<?=$hasil?>">
 			</td>
 		</tr>
 		<tr>
 			<td colspan="3"> <hr> </td>
 		</tr>
 	</table>
 </form>
 </body>
 </html>