<!DOCTYPE html>
<html><head>
    <title>Cetak Laporan Data Asset</title>
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
	<h2>Laporan Data Asset</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>

    <table>
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Nama Asset</th>
			<th scope="col">Tempat</th>
        </tr>

        <?php if (!empty($data_asset)) : ?>
			<?php $i = 1; foreach ($data_asset as $su) : ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $su['nama_asset']; ?></td>
					<td><?= $su['tempat']; ?></td>
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
