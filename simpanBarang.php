<?php
include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body
        {
            background-image:url(05.jpg);
            background-size:1500px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Document </title>
</head>
<body>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h4>Tambah Data Barang</h4>
                </div>
                <div class="modal-body btn btn-secondary ">
                    <form action="tambah.php">
                        <div class="form-group">
                            Kode Barang : 
                            <input type="text" name="kode" class="form-control" placeholder="isi kode barang disini!">
                        </div>
                        <br>
                        <div class="form-group">
                            Nama Barang :
                            <input type="text" name="nama" class="form-control" placeholder="isi data barang!">
                        </div>
                        <br>
                        <div class="form-group">
                            Harga : 
                            <input type="text" name="harga" class="form-control" placeholder="tentukan jumlah harga disini!">
                        </div>
                        <br>
                        <div class="form-group">
                            Jumlah : 
                            <input type="text" name="jumblah" class="form-control" placeholder="tentukan jumlah barang disini!">
                        </div>
                        <div class="form-group">
                            Gambar : 
                            <input type="file" name="gambar" class="form-control" placeholder="masukkan gambar disini!">
                        </div>
                        
                       
                        <br>
                </div>
                <div class="modal-footer btn btn-secondary">
                    
                    <button  class="btn btn-success" type="submit" id="tombol" onclick="Swal.fire(
                        'Berhasil Disimpan!',
                        'You clicked the button!',
                        'success')"
                        >SIMPAN</button>
                        
                    
                    <button class="btn btn-warning" type="reset" id="tombol" onclick="Swal.fire(
                        'Batal Disimpan!',
                        'You clicked the button!',
                        'warning')">BATAL</button>
                    <button class="btn btn-info"> 
                        <a href="barang.php">Barang</a>
                    </button>
                    <button class="btn btn-danger">
                        <a href="login.php">Logout</a>
                    </button>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
