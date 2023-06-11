<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Barang Keluar</h3>
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
                                                <th>Nama Barang</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Pengembalian</th>
                                                <th>Jumlah Barang</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-barang-keluar">
                                            <?php
                                                $no = 1;
                                                foreach ($databarangkeluar as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_barang.'</td>     
                                                            <td>'.$db->tanggal_peminjaman.'</td>    
                                                            <td>'.$db->tanggal_pengembalian.'</td>    
                                                            <td>'.$db->jumlah_barang.'</td>   
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                data-id="'.$db->id.'"
                                                                data-id_barang="'.$db->id_barang.'"
                                                                data-nama="'.$db->nama_barang.'"
                                                                data-peminjaman="'.$db->tanggal_peminjaman.'"
                                                                data-pengembalian="'.$db->tanggal_pengembalian.'"
                                                                data-jumlah="'.$db->jumlah_barang.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                <button class="btn btn-success btn-sm btn-update" 
                                                                data-id="'.$db->id.'"
                                                                data-id_barang="'.$db->id_barang.'"
                                                                data-nama="'.$db->nama_barang.'"
                                                                data-peminjaman="'.$db->tanggal_peminjaman.'"
                                                                data-pengembalian="'.$db->tanggal_pengembalian.'"
                                                                data-jumlah="'.$db->jumlah_barang.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('barang-keluar/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
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
                            <h4 class="modal-title" id="myModalLabel">Tambah Data Barang</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('barang-keluar/insert') ?>" method="POST" id="form-tambah">
                                <div class="form-group">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <video id="previewKamera"></video>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <select id="pilihKamera" class="form-control">
                                        <option value="Pilih Kamera"></option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Barcode</label>
                                    <input type="text" id="hasilscan" class="form-control" name="kode_barang" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="tanggal_peminjaman" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tanggal_pengembalian" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" class="form-control" name="jumlah_barang" required> 
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
                            <form action="<?= base_url('barang-keluar/update') ?>" method="POST" id="form-update">
                                <input type="hidden" name="id_update">
                                <input type="hidden" name="id_barang">
                                <input type="hidden" name="jumlah_sebelum">

                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="tanggal_peminjaman_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Pengembalian</label>
                                    <input type="date" class="form-control" name="tanggal_pengembalian_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" class="form-control" name="jumlah_barang_update" required>
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