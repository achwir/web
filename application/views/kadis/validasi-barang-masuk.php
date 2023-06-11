<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Validasi Permintaan Barang Masuk</h3>
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
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Supplier</th>
                                                <th>Tanggal Masuk</th>
                                                <th>Jumlah Barang</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-barang-masuk">
                                            <?php
                                                $no = 1;
                                                foreach ($databarangmasuk as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>   
                                                            <td>'.$db->nama_barang.'</td>    
                                                            <td>'.$db->nama_supplier.'</td>    
                                                            <td>'.$db->tanggal_masuk.'</td>    
                                                            <td>'.$db->jumlah_barang.'</td>   
                                                            <td>'.date('d-m-Y H:i:s', strtotime($db->created_at)).'</td>
                                                            <td>
                                                            <button class="btn btn-success btn-sm btn-validation" 
                                                            data-id="'.$db->id.'"
                                                            data-id_barang="'.$db->id_barang.'"
                                                            data-nama="'.$db->nama_barang.'"
                                                            data-supplier="'.$db->nama_supplier.'"
                                                            data-tanggal="'.$db->tanggal_masuk.'"
                                                            data-jumlah="'.$db->jumlah_barang.'"
                                                            ><i class="fas fa-check"></i></button>
                                                            <a class="btn btn-danger btn-sm" href="'.base_url('barang-masuk/reject/'.$db->id).'"><i class="fas fa-trash"></i></a>
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

            <div id="modal-validation" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Validasi Barang Masuk</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('barang-masuk/validation') ?>" method="POST" id="form-validation">
                                <input type="hidden" name="id_update">
                                <input type="hidden" name="id_barang">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" class="form-control" name="nama_barang_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Supplier</label>
                                    <input type="text" class="form-control" name="nama_supplier_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Barang Masuk</label>
                                    <input type="date" class="form-control" name="tanggal_masuk_update" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Jumlah Barang</label>
                                    <input type="number" class="form-control" name="jumlah_barang_update" readonly>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" form="form-validation">Validasi</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>