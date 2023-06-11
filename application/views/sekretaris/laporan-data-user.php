<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data User</h3>
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
                                <div class="col-md">
                                <a href="<?= base_url('admin/laporan-user') ?>" class="btn btn-outline-danger float-right" target="_blank">Cetak PDF</a>
                                </div>
                                <div class="table-responsive">
                                    <table id="laporan_data_user" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Nama Lengkap</th>
                                                <th>Group Name</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-user">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->username.'</td>    
                                                            <td>'.$db->email.'</td>    
                                                            <td>'.$db->nama_lengkap.'</td>    
                                                            <td>'.$db->name.'</td>    
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
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
                            <form action="<?= base_url('data-barang/insert') ?>" method="POST" id="form-tambah">
                                <div class="form-group">
                                    <label for="">Kode Barang</label>
                                    <input type="text" class="form-control" name="kode_barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="number" class="form-control" name="stok" required> 
                                </div>
                                <div class="form-group">
                                    <label for="">harga Barang</label>
                                    <input type="number" class="form-control" name="harga_barang" required>
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
                            <h4 class="modal-title" id="myModalLabel">Update Data Barang</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('data-barang/update') ?>" method="POST" id="form-update">
                                <input type="hidden" name="id_update">
                                <div class="form-group">
                                    <label for="">Kode Barang</label>
                                    <input type="text" class="form-control" name="kode_barang_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">harga Barang</label>
                                    <input type="number" class="form-control" name="harga_barang_update" required>
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