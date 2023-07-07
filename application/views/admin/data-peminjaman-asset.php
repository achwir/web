<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Peminjaman Aset</h3>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md">
                                        <button class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Aset</th>
                                                <th>Tempat</th>
                                                <th>Nama Peminjam</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Berakhir</th>
                                                <th>Jumlah Hari</th>
                                                <th>Tanggal Diterima</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-peminjaman-asset">
                                            <?php
                                                
                                                $no = 1;
                                                
                                                foreach ($datapeminjamanasset as $db) {
                                                    $validation = "";

                                                    $tgl1 = strtotime($db->tanggal_pengembalian);
                                                    $tgl2 = strtotime($db->tanggal_peminjaman); 
                                                    
                                                    $jarak = $tgl1-$tgl2;
                                                    $hari = $jarak / 60 / 60 / 24;
                                                    
                                                    if($db->tgl_validation_pengembalian == NULL){
                                                        $validation = '<button class="btn btn-success btn-sm btn-validation" 
                                                                data-id="'.$db->id.'"
                                                                data-id_asset="'.$db->id_asset.'"
                                                                data-nama="'.$db->nama_asset.'"
                                                                data-tempat="'.$db->tempat.'"
                                                                data-peminjam="'.$db->nama_peminjam.'"
                                                                data-peminjaman="'.$db->tanggal_peminjaman.'"
                                                                data-pengembalian="'.$db->tanggal_pengembalian.'"
                                                                ><i class="fas fa-check"></i></button>';
                                                    }

                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_asset.'</td>     
                                                            <td>'.$db->tempat.'</td>     
                                                            <td>'.$db->nama_peminjam.'</td>     
                                                            <td>'.$db->tanggal_peminjaman.'</td>    
                                                            <td>'.$db->tanggal_pengembalian.'</td>    
                                                            <td>'.$hari.' Hari</td>    
                                                            <td>'.$db->tgl_validation_pengembalian.'</td>   
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                data-id="'.$db->id.'"
                                                                data-id_asset="'.$db->id_asset.'"
                                                                data-nama="'.$db->nama_asset.'"
                                                                data-tempat="'.$db->tempat.'"
                                                                data-peminjam="'.$db->nama_peminjam.'"
                                                                data-peminjaman="'.$db->tanggal_peminjaman.'"
                                                                data-pengembalian="'.$db->tanggal_pengembalian.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                '.$validation.'
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('peminjaman-asset/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>';    
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Tambah Data Peminjaman Aset</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('peminjaman-asset/insert') ?>" method="POST" id="form-tambah">
                                <div class="form-group">
                                    <label for="">Nama Aset</label>
                                    <select name="id_asset" id="" class="form-control select2">
                                        <option value="">Pilih </option>
                                        <?php
                                        foreach ($dataassets as $data_asset){?>
                                            <option value="<?= $data_asset->id ?>" data-tempat="<?= $data_asset->tempat ?>"><?= $data_asset->nama_asset ?></option>
                                        <?php } 
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat</label>
                                    <input type="text" class="form-control" name="tempat" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Peminjam</label>
                                    <input type="text" class="form-control" name="nama_peminjam" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="tanggal_peminjaman" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tanggal_pengembalian" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-tambah">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <div id="modal-update" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Update Data Barang Keluar</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('peminjaman-asset/update') ?>" method="POST" id="form-update">
                                <input type="hidden" name="id_update">
                                <input type="hidden" name="id_asset">

                                <div class="form-group">
                                    <label for="">Nama Asset</label>
                                    <input type="text" class="form-control" name="nama_asset_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat</label>
                                    <input type="text" class="form-control" name="tempat_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Peminjam</label>
                                    <input type="text" class="form-control" name="nama_peminjam_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="tanggal_peminjaman_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tanggal_pengembalian_update" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-update">Save</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>

            <div id="modal-validation" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Validasi Penerimaan Aset</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('peminjaman-asset/validation') ?>" method="POST" id="form-validation">
                                <input type="hidden" name="id_update">
                                <input type="hidden" name="id_asset">

                                <div class="form-group">
                                    <label for="">Nama Asset</label>
                                    <input type="text" class="form-control" name="nama_asset_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tempat</label>
                                    <input type="text" class="form-control" name="tempat_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Peminjam</label>
                                    <input type="text" class="form-control" name="peminjam_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="tanggal_peminjaman_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tanggal_pengembalian_update" readonly>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-validation">Validation</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>