	<?php
	include("header_admin.php");
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM admin");
	?>
		<div class="container">
			<br>
			<br>
			<h5>
				Selamat Datang di Sistem Penyewaan Gedung (SIPEGA) <br>
				Pilih menu di pojok atas kanan untuk memulai petualangan anda
			</h5>
		</div>
	<?php
	}
	?>
