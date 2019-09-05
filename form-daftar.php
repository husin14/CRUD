<!DOCTYPE html>
<html>
<head>
    <title>Kemahasiswaan</title>
</head>

<body>
    <header>
        <h3>form status mahasiswa</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="nim">Nim: </label>
			<input type="text" name="nim" placeholder="nim anda" />
            
        </p>
		
		<p>
            <label for="jurusan">Jurusan: </label>
            <input type="text" name="jurusan" placeholder="jurusan" />
        </p>
		
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>
        <p>
            <label for="semester">semester: </label>
		<input type="text" name="semester" placeholder="semester" />
        </p>
      
        <p>
             <label for="alamat">Alamat: </label>
            <textarea name="alamat"></textarea>
        </p>
		
		 <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>