<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa :<label><br>
    <input type="number" name="nis" placeholder= "Ex. 12001142" /><br>

    <label for="nama">Nama Lengkap ;</label><br>
    <input type="text" name="nama" placeholder="Ex. Firdaus" /><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
    <input type="date" name="tanggal_lahir" /><br>
    
    <label for="nilai">Nilai :</label><br>
    <input type="number" name="nilai" placeholder="Ex.80.56"><br>
    
    <input type="submit" name="simpan" value="Simpan Data"/>
</form>

<?php
    if( isset($_POST["simpan"]) ){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $tanggal_lahir = $_POST["tanggal_lahir"];
        $nilai = $_POST["nilai"];
    

        // CREATE
        $query = "
        INSERT INTO datadiri VALUES
        ('$nis','$nama','$tanggal_lahir','$nilai');
        ";

        include ('./input-config.php');
        $insert = mysqli_query($mysqli, $query);

        if ($insert){
            echo "
                <script>
                    alert('Data berhasil ditambahkan');
                    window.location='input-datadiri.php';
                </script>
            ";
        }
    }
?>