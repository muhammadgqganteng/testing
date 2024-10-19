<?php 
$koneksi=mysqli_connect("localhost","root","","smk");
if($koneksi){
    echo "DB berhasil";
}
else {
    echo "DB gagal";
}

?>