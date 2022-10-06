<?php
include("koneksi.php");
if(isset($_GET{'id'})){
    header("location:barang.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM barang where id=$kode";
$query = mysqli_query($db, $sql);
$barang = mysqli_fetch_assoc($query);

if(mysql_num_rows($query) < 1){
    die ("Data tidak ditemukan");
}

?>
<html>
    <head>
</head>
<body>
    <h1> From Edit Barang </h1>
    <form action="proses-edit-barang.php" method="POST">
        <fieldset>

        <label for="nama">Nama Barang :</label>
                    <input type="text" name="nama" />
            <p>
            <label for="nama">Nama Barang :</label>
                    <input type="text"  name="nama" />
</p>
<p>
                <label name="nama">Stok Barang : </label>
                <input type="number"   name="stok"/>
</p>
<p>
               <label name="nama">Harga Barang : </label>
                <input type="number"  name="harga" />
</p>
<p>
                <input type="submit" value="simpan" name="simpan" />
</p>
<fieldset>

</form>
</body>
</html>
     