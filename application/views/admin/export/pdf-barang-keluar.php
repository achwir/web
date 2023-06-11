<!DOCTYPE html>
<html><head>
    <title>Cetak Daftar Barang Keluar</title>
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
	<h2>Laporan Barang Keluar</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>

    <table>
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Nama Barang</th>
			<th scope="col">Tanggal Keluar</th>
			<th scope="col">Jumlah Barang</th>
        </tr>

        <?php if (!empty($barang_keluar)) : ?>
			<?php $i = 1; foreach ($barang_keluar as $bk) : ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $bk['nama_barang']; ?></td>
					<td><?= $bk['tanggal_keluar']; ?></td>
					<td><?= $bk['jumlah_barang']; ?></td>
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
