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

    <title>Document</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
		<div class="container">
			<div class="modal-dialog table table-bordered ">
				<div class="modal-content">
				<div class="card">
					<div class="modal-header  ">
					<h1>Login</h1>
					</div>
					<div class="modal-body ">
					<form action="verifikasi.php"  method="">
						<div class="form-group">
						Username :
						<input type="text" name="user" class="form-control">
						</div>
						<br>
						<div class="from-group">	
						Password :
						<input type="text" name="pass" class="form-control">
						</div>
						<div class="modal-footer">
							<button type="submit" value="Login" class="btn btn-success">Login</button>
						</div>
						</div>
					</form>
					<a href="tambahakun.php">
						<button class="btn btn-info">buat akun baru</button>
					</a>
				</div>
			</div>
		</div>
</body>
</html>