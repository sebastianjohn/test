<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>--Designed--</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<?php
 require_once('connection.php');
 session_start(); 
 ?>
	<div id="main">
	<div id="header"><img src="images/header.jpg" width="850" /></div>
	
	<!-- Ini adalah pondasi menu atas -->
	<div id="menutop">
		<?php 
	    require_once ('cari produk.php');
        ?>
	</div>
	
	<!-- Ini adalah pondasi menu kiri -->
	<div id="left">	

	<div id="bg_menu">Main Menu</div>
	<div id="content_menu">
		
		<?php 
		if ((isset($_SESSION['user'])) and(isset($_SESSION['pass']))){
		if ($_SESSION['status']=='Operator') { ?>
		<a href="?menu=home">- Home </a> <br />
		<a href="?menu=pelanggan">- Customers </a> <br />
		<a href="?menu=pembayaran">- Pay </a> <br />
		<?php } 
		else if ($_SESSION['status']=='Admin') {
		?>
		<a href="?menu=home">- Home </a> <br />
	    <a href="?menu=pelanggan">- Customers </a> <br />
		<a href="?menu=i-produk">- Input Product </a> <br />
		<a href="?menu=i-user">- Input User </a>
		<?php }} else { ?>
		<a href="?menu=home">- Home </a> <br />
		<a href="?menu=news">- Customers Service </a> <br />
		<a href="?menu=aturan">- Rules </a> <br />
		<a href="?menu=kontak">- Contact Us </a> <br />
		<a href="?menu=Bonus">- Utility </a> <br />
		<?php }?>
	</div>
	
	<div id="bg_menu">Bands Support</div>
	<div id="content_menu">
	<a href = 'https://en.wikipedia.org/wiki/Chelsea_Grin'>Chelsea Grin</a><br />
    <a href = 'http://www.askingalexandria.com/'>Asking Alexandria</a><br>
	<a href = 'http://www.bulletformyvalentine.com/'>Bullet For My Valentine</a>
     
    </div>
	
	</div>
	
	<!-- Ini adalah pondasi konten -->
	<div id="middle"> 
	<?php if (!isset($_GET['menu'])) {$judul='DAFTAR PRODUK'; } 
	else 
	{
	if ($_GET['menu']=='home')  {$judul='PRODUCT LIST'; } 
	if ($_GET['menu']=='pelanggan')  {$judul='CUSTOMERS'; } 
	if ($_GET['menu']=='pembayaran')  {$judul='PAY'; } 
	if ($_GET['menu']=='i-produk')  {$judul='INPUT PRODUCT'; } 
	if ($_GET['menu']=='i-user')  {$judul='INPUT USER'; } 
	if ($_GET['menu']=='kredit_produk')  {$judul='KREDIT PRODUK'; } 
	if ($_GET['menu']=='proses_kredit')  {$judul='KREDIT PRODUK'; }
	if ($_GET['menu']=='prs_input_prd')  {$judul='PROSES INPUT PRODUK'; }
	if ($_GET['menu']=='proses_bayar')  {$judul='PROSES TAGIHAN'; }
	if ($_GET['menu']=='news')  {$judul='CUSTOMERS SERVICE'; }
	if ($_GET['menu']=='aturan')  {$judul='RULES'; }
	if ($_GET['menu']=='kontak')  {$judul='CONTACT US'; }
	if ($_GET['menu']=='Bonus')  {$judul='UTILITY'; }

	
	}
	?>
	<div id="bg_menu"> <?php echo $judul; ?></div>
	<div id="content_menu">
	<?php require_once('content.php'); ?>
</div>
	
	</div>
	
<!-- Ini adalah pondasi menu kanan -->
<div class="clear"></div>
	<div id="footer"><img src="images/footer.jpg" width="850" /></div>
</div>
</body>
</html>

