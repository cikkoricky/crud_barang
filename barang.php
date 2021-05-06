<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body
        {
            background-image:url(08.jpg);
            background-size:1500px;
        }
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<style>
    a{
        text-decoration: none;
        color: white;
    }
    a:hover{
        color: green;
    }
    img {width:80px;}
</style>

    <div class="container">
        <h3 align="center"><big>DATA BARANG</big> </h3><br> 
        <button class="btn btn-success"> 
        <a href="simpanBarang.php">Tambah</a>
         </button>
          
        <table class="table table-bordered table-hover table-striped table-success ">
            <tr class="bg-primary">
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Gambar</th>
                <th>Total</th>
                <th align="center">Aksi</th>
            </tr>
            <?php
                $nomer = 1;
                $data = mysqli_query($db,"select * from produk");
                while($isi = mysqli_fetch_array($data))
                {
            ?>
            <tr>
                <td ><?php echo $nomer++; ?></td>
                <td ><?php echo $isi[0]; ?></td>
                <td ><?php echo $isi[1]; ?></td>
                <td ><?php echo $isi[2]; ?></td>
                <td ><?php echo $isi[3]; ?></td>
                <td style="text-align: center;"><img src="gambar/<?php echo $isi[4]; ?>" style="width: 120px;"></td>
                
                
                
                <td>
                    <?php 
                        $jumlah = $isi[3];
                        $harga = $isi[2];
                        $total = $jumlah * $harga;
                        echo $total;
                    ?>
                    

                </td>
                <td  align="center">
                    <button class="btn btn-danger" title="hapus data" >
                        <a href="hapusBarang.php?kode=<?php echo $isi[0]; ?>">
                           <i class="bi-trash"></i>  </a>
                    </button>
                    <button class="btn btn-warning" title="ubah data">
                        <a href="editBarang.php?kode=<?php echo $isi[0]; ?>">
                        <i class="bi-wrench"></i> </a>
                    </button>
                </td>
            </tr>
            <?php } ?>
        </table>
        
    </div>

</body>
</html>