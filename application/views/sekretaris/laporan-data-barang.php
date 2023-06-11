<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data Barang</h3>
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
                            <form action="<?= base_url('admin/laporan-data-barang') ?>" method="POST" id="form-tambah">

                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Dari Tanggal</label>
                                        <input type="date" class="form-control" name="start_date" required>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Sampai Tanggal</label>
                                        <input type="date" class="form-control" name="end_date" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button  class="btn btn-primary" type="submit">Filter</button>
                                </div>
                            </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="laporan_data_barang" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-barang">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    $stok = $db->total_bm - $db->total_bk;

                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->kode_barang.'</td>    
                                                            <td>'.$db->nama_barang.'</td>    
                                                            <td>'.$stok.'</td>    
                                                            <td>'.number_format($db->harga_barang).'</td>    
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