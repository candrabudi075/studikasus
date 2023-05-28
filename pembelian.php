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
    <form  id="form-pembelian" action="proses_pembelian.php" method="post">
        <table class="table table-striped">
            <tr>
                <td>ID Transaksi</td>
                <td>
                    <input type="text" id="input-id_tr" name="id_transaksi">
                    <p id="text-error-id_tr"></p>
                </td>
            </tr>
            <tr>
                <td>ID Pelanggan</td>
                <td>
                    <input type="text" id="input-id_pe" name="id_pelanggan">
                    <p id="text-error-id_pe"></p>
                </td>
            </tr>
            <tr>
                <td>ID Produk</td>
                <td><input type="text" id="input-pro" name="id_produk">
                <p id="text-error-pro"></p>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pembelian</td>
                <td>
                    <input type="date" id="input-tgl" name="tgl_transaksi">
                    <p id="text-error-tgl"></p>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" id="input-harga" name="total_harga">
                    <p id="text-error-harga"></p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button id="my-button" type="button" class="btn btn-primary">Beli</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<script type="text/javascript">
    	$('#my-button').click(function() {
		if ($('#input-id_tr').val().length == 0 || $('#input-id_pe').val().length == 0 || $('#input-pro').val().length == 0 || $('#input-tgl').val().length == 0  || $('#input-harga').val().length == 0){
			$('#input-id_tr, #input-id_pe , #input-pro, #input-tgl, #input-harga').css({"backgroundColor" : "#ff00002b"});
			$('#text-error-id_tr, #text-error-id_pe, #text-error-pro, #text-error-tgl, #text-error-harga').text('Silahkan isi terlebih dahulu');
		} else {
			$('#form-pembelian').submit();
            $('#input-id_tr, #input-id_pe , #input-pro, #input-tgl, #input-harga').css({"backgroundColor" : "white"});
		}
	});
</script>