<?php 
if(isset($_GET['nama_kelas'])){;
    $data_nama_kelas = $_GET['nama_kelas'];
    include "koneksi.php";
    $simpan=mysqli_query($koneksi,"insert into kelas set nama_kelas=$data_nama_kelas");
    if($simpan) {
?>
        <script>
            alert('simpan berhasil');
            window.location.href="index.php";

        </script>

        <?php 
    }
    else{
        echo "gagal";
    }
}





?>
<a href="index.php"><button>kembali</button></a>
<h3>tambah nama kelas</h3>
<form action="" method="get">
    <input type="text" name="nama_kelas" >
    <button type="submit">tambah</button>
</form>