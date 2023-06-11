<!DOCTYPE html>
<html><head>
    <title>Cetak Laporan Data Barang</title>
    <style>
        body {
            font-family: arial, sans-serif;
            margin: 1cm 1cm 1cm 1cm;
        }

        

        table {
            border-collapse: collapse;
            width: 100%;
            padding: 4px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head><body>
    <div class="cetak">
	<center>
	<h2>Laporan Data Barang</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>

    <table>
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Kode Barang</th>
			<th scope="col">Nama Barang</th>
			<th scope="col">Harga Barang</th>
        </tr>

        <?php if (!empty($data_barang)) : ?>
			<?php $i = 1; foreach ($data_barang as $su) : ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $su['kode_barang']; ?></td>
					<td><?= $su['nama_barang']; ?></td>
					<td><?= $su['harga_barang']; ?></td>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
        <?php else : ?>
            <h3>Tidak ada data!</h3>
        <?php endif; ?>
    </table>
	<br>
                <table border="0" width="100%">
                    <tr>
                        <td></td>
                        <td width="100px">
                            <p>Pekalongan, <?php echo date('d-m-Y'); ?><br />
                            </p>
                            <p>Ketua KOPINDO Pekalongan</p>
                            <br />
							<br />
							<br />
                            <p>_________________________</p>
                            <p>dr.H. Herlan Afandi</p>
                        </td>
                    </tr>
                </table>

</body></html>
