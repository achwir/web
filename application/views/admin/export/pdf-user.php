<!DOCTYPE html>
<html><head>
    <title>Cetak Laporan User</title>
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
	<h2>Laporan User</h2>
	</center>
        Tanggal di cetak: <?= date('d/m/Y'); ?>
    </div>

    <table>
        <tr>
			<th scope="col">No.</th>
			<th scope="col">Name</th>
			<th scope="col">Email</th>
			<th scope="col">Nama Lengkap</th>
			<th scope="col">Group Id</th>
        </tr>

        <?php if (!empty($users)) : ?>
			<?php $i = 1; foreach ($users as $us) : ?>
				<tr>
					<th scope="row"><?= $i; ?></th>
					<td><?= $us['username']; ?></td>
					<td><?= $us['email']; ?></td>
					<td><?= $us['nama_lengkap']; ?></td>
					<td>
						<?php if ($us['group_id'] == '1') : ?>
							Administrator
						<?php elseif ($us['group_id'] == '2') : ?>
							Gudang
						<?php elseif ($us['group_id'] == '3') : ?>
							Direktur
						<?php else : ?>
							Bagian Umum
						<?php endif; ?>
					</td>
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
