<h1>Welcome!</h1>
<?php
	$judul = post('judul');
	$konten = post('konten');
	$penulis = post('penulis');
	?>

<?php 
	$addonq = ''; 
	if(get("q")!=""){ 
	$addonq = " WHERE judul LIKE '%".get('q')."%'";} 
	$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq. " ORDER BY id DESC"); 
	$hasil->execute(); 
	$data = $hasil->fetchAll(); 

	$i = 1; 
		foreach ($data as $key) { 
			?> 
			 
				<h2><?php echo $key['judul'];?></h2> 
				<h4><?php echo $key['konten'];?></h4>
				<br>
				<p><?php echo $key['penulis'];?></p> 

				<?php
 $i++; 
} 
?>  
