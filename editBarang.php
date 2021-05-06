<?php
    error_reporting(error_reporting() & ~E_NOTICE);
    include "database.php";
    $kode = $_REQUEST['kode'];
    $data = mysqli_query($db,"select * from produk where kode = '$kode'");
    $isi = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body
        {
            background-image:url(07.jpg);
            background-size:1500px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
</style>
    <div class="container">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4>Ubah data barang</h4>
                </div>
                <div class="modal-body btn btn-secondary">
                    <form action="update.php">
                        <div class="form-group">
                            Kode Barang : 
                            <input type="text" name="kode" class="form-control" value="<?php echo $isi[0]; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            Nama Barang : 
                            <input type="text" name="nama" class="form-control" value="<?php echo $isi[1]; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            Harga : 
                            <input type="text" name="harga" class="form-control" value="<?php echo $isi[2]; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            Jumblah : 
                            <input type="text" name="jumblah" class="form-control" value="<?php echo $isi[3];?>">
                        </div>
                        <div class="form-group">
                            Gambar : 
                            <input type="file" name="gambar" class="form-control" value="<?php echo $isi['gambar']?>">
                        </div>
                        <br>
                </div>
                <div class="modal-footer btn btn-secondary">
                    <button class="btn btn-success" type="submit" id="tombol" onclick="Swal.fire(
                        'Berhasil Diubah!',
                        'You clicked the button!',
                        'success')">SIMPAN</button>
                    
                    <button class="btn btn-info">
                        <a href="barang.php">Barang</a>
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

