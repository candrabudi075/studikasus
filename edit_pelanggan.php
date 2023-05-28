<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Buat Daftar Pelanggan</title>
</head>
<body>
    <form  id="form-pelanggan" action="proses_pelanggan.php" method="post">
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>
                    <input type="text" id="input-id" name="id_pelanggan">
                    <p id="text-error-id"></p>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" id="input-nama" name="nama_pelanggan">
                <p id="text-error-name"></p>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" id="input-alamat" name="alamat">
                    <p id="text-error-alamat"></p>
                </td>
            </tr>
            <tr>
                <td>Telp</td>
                <td>
                    <input type="number" id="input-telp" name="nomor_telepon">
                    <p id="text-error-telp"></p>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="text" id="input-email" name="email">
                    <p id="text-error-email"></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button id="my-button" type="button" class="btn btn-primary">Daftarkan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<script type="text/javascript">
    	$('#my-button').click(function() {
		if ($('#input-id').val().length == 0 || $('#input-nama').val().length == 0 || $('#input-alamat').val().length == 0 || $('#input-telp').val().length == 0  || $('#input-email').val().length == 0){
			$('#input-id, #input-nama , #input-alamat, #input-telp, #input-email').css({"backgroundColor" : "#ff00002b"});
			$('#text-error-id, #text-error-name, #text-error-alamat, #text-error-telp, #text-error-email').text('Silahkan isi terlebih dahulu');
		} else {
			$('#form-pelanggan').submit();
            $('#input-id, #input-nama , #input-alamat, #input-telp, #input-email').css({"backgroundColor" : "white"});
		}
	});
</script>