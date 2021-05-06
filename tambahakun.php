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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
		<div class="container">
			<div class="modal-dialog table table-bordered">
				<div class="modal-content">
				<div class="card">
					<div class="modal-header ">
					<h1>Buat Akun Baru</h1>
					</div>
					<div class="modal-body ">
					<form action="simpanakun.php"  method="">
						<div class="form-group">
						Username :
						<input type="text" name="user" class="form-control">
						</div>
						<br>
						<div class="from-group">	
						Password :
						<input type="password" name="pass" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="submit" value="Login">Simpan</button>
						</div>
						</div>
					</form>
					<a href="login.php">
						<button class="btn btn-info">kembali kehalaman login</button>
					</a>
				</div>
			</div>
		</div>
</body>
</html>