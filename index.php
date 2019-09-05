<!DOCTYPE  html>
<html>
<head>
	<title> Cek Status Mahasiswa | udinus </title>
</head>

<body>
	<header>
	<h3> 	Identitas dan Status Mahasiswa	</h3>
	<h1> Universitas Dian Nuswantoro </h1>
	</header>
	
	<h4> menu </menu>
	<nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
	<?php endif; ?>
		<ul> 
			<li> <a href="form-daftar.php"> Daftar Baru </li>
			<li> <a href="list-siswa.php"> List Pendaftar </li>
		</ul>
	</nav>	
	
	
</body>


</html>