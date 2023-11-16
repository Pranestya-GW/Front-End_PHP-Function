<!DOCTYPE html>
<head>
<h1 class="ui icon header">
  <i class="cart plus icon"></i>
  <div class="content">
    Aplikasi Listing Daftar Belanja
    <div class="sub header">Atur Daftar Belanja Anda disini. Gunakan Untuk Mencatat Daftar Belanjaan Anda.</div>
  </div>
</h1>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<style>
	</style>
</head>
<body>
<div class="ui grid">
  <div class="four wide column">
    <div class="ui vertical fluid tabular menu" align="center">
      <a class="item active">
        Masukkan Ketentuan Belanja
      </a>
	  <a class="item">
 
      </a>
	  <h3 class="ui icon header"><i class ="users icon" align="center"></i></h3>
      <a class="item">
	    <h5>Pengembang :</h5>
        <h5>Pranestya Gaung Wicaksono (201751101) 201751101@std.umk.ac.id</h5>
      </a>

    </div>
  </div>
  <div class="twelve wide stretched column">
    <div class="ui segment" align="center">
      <form method="get" name="frm" action="">
		<div class="ui left icon input">
			<input type="text" name="jumlah" placeholder="Masukkan Jumlah...">
			<i class="pencil alternate icon"></i>
			<div class="ui left pointing label">
				Masukkan Jumlah Belanjaan lalu klik OK
			</div>
		</div>
		<br></br>
			<button class="ui primary button" type = "submit" name="btnJumlah">
				Ok
			</button> 
		<br></br>
		<br></br>
  </form>
  <form method = "POST" name ="casepost" action="">

  <h3>Dimana anda akan membelinya?</h3>
			<div class="ui toggle checkbox" >
				<input type="radio" name="gol" value="Toko/Pasar">
				<label>Toko/Pasar        </label>
			</div>
			<div class="ui toggle checkbox" >
				<input type="radio" name="gol" value="Mini-Market">
				<label>Mini-Market       </label>
			</div>
			<div class="ui toggle checkbox" >
				<input type="radio" name="gol" value="Mall">
				<label>Mall     </label>
			</div>
			<br></br>
			<tr><td>
			<button class="ui primary button" type = "submit">
				Hitung Beda Harga
			</button> 
</td></tr>
			<br></br>
			<br></br>
	<?php
	//error reporting untuk null pertama
	error_reporting(0);
	//case untuk radio button
		switch($_POST['gol'])
	{
		case 'Toko/Pasar': echo "Anda membelinya di $_POST[gol] anda hemat 200 rupiah <br></br>" ; break;
		case 'Mini-Market': echo "Anda membelinya di $_POST[gol] anda hemat 400 rupiah <br></br>"; break;
		case 'Mall': echo "Anda membelinya di $_POST[gol] anda hemat 800 rupiah <br></br>"; break;
	default:$gol=0; break;
}
	?>
  </form>

<form method="post" name="frmpost" action="">
  <table class = "ui celled table" width="547" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td width="32" height="22" valign="top">No</td>
			<td width="114" valign="top">Barang</td>
			<td width="240" valign="top">Jumlah yang akan dibeli</td>
			<td width="161" valign="top">Harga</td>
		</tr>
		

  <?php
    //menghitung jumlah belanjaan dan mengubahnya ke looping tabel
	if(isset($_GET['jumlah']) && $_GET['jumlah']>0){
			$jml_form = $_GET['jumlah'];
		}
		else{
			$jml_form = 1;
		}
	for($i=1; $i<=$jml_form; $i++){
  ?>
  
  <tr>
	<td height="23"><?php echo $i; ?></td>
	<td>
		<div class="ui left icon input">
			<input type="text" name="nmbarang[]" placeholder="Masukkan Barang...">
			<i class="pencil alternate icon"></i>
		</div>
	</td>
	<td>
	<div class="ui left icon input">
			<input type="text" name="jmlbarang[]" placeholder="Masukkan Jumlah...">
			<i class="pencil alternate icon"></i>
		</div>
	</td>
	<td>
	<div class="ui left icon input">
			<input type="text" name="hrgbarang[]" placeholder="Masukkan Harga...">
			<i class="pencil alternate icon"></i>
		</div>
	</td>
  </tr>
  
  <?php
  }
  ?>
  
	<tr>
		<td align= "Left">
			<button class="ui primary button" type = "submit" name="btnOk" >
				Simpan
			</button>
		</td>
	</tr>
  </table>
<?php
  if(isset($_POST['btnOk'])){
  $nmbarang = $_POST['nmbarang'];
  $jmlbarang= $_POST['jmlbarang'];
  $hrgbarang= $_POST['hrgbarang'];
  //do while memberi nomer
  $x=1;
  do{

	  foreach($nmbarang as $key => $val){
		echo 'No = '.$x.'Nama Barang = '.$nmbarang[$key].' Jumlah barang = '.$jmlbarang[$key].' Harga barang = '.$hrgbarang[$key].'<br/>';
		$x++;
		}

  }while ($x==jumlah);
  //memanggil setiap anggota array
  
  }
  ?>
  </form>
    </div>
  </div>
</div>

</body>
</html>
