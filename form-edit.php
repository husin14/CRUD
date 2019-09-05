<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Status Mahasiswa </title>
</head>

<body>
    <header>
        <h3>Formulir Edit </h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

			 <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

           <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" value="<?php echo $siswa['nama']?>"  >
        </p>
        <p>
            <label for="nim">Nim: </label>
			<input type="text" name="nim" value="<?php echo $siswa['nim']?>" >
            
        </p>
		
		<p>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" value="<?php echo $siswa['jurusan']?>" >
        </p>
		
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label>
				<input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if($siswa['jenis_kelamin']=='laki-laki') {echo 'checked';}?> />
				Laki-laki 
			</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php if($siswa['jenis_kelamin']=='perempuan') {echo 'checked';}?> />
				perempuan
			</label>
        </p>
        <p>
            <label for="semester">semester: </label>
		<input type="text" name="semester" value="<?php echo $siswa['semester']?>" />
        </p>
      
        <p>
             <label for="alamat">Alamat: </label>
            <textarea name="alamat">
			<?php echo $siswa ['jurusan'] ?>
			</textarea>
			
        </p>
		
		 <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>