<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Barang</h3>
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
                                    </div>
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
                                                <th>Barcode Barang</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Jenis Barang</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-barang">
                                            <?php
                                                $no = 1;
                                                foreach ($databarang as $db) {
                                                    
                                                    $this->db->select('SUM(jumlah_barang) as total_bm');
                                                    $this->db->where('id_barang', $db->id);
                                                    $stok_bm = $this->db->get('barang_masuk')->row();

                                                    $this->db->select('SUM(jumlah_barang) as total_bk');
                                                    $this->db->where('id_barang', $db->id);
                                                    $stok_bk = $this->db->get('barang_keluar')->row();

                                                    // echo $this->db->last_query($stok_bm);
                                                    $stok = $stok_bm->total_bm - $stok_bk->total_bk;
                                                    
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td><img src="'.base_url('assets/barcode/'.$db->kode_barang).'.png" class="img-fluid"></td>    
                                                            <td>'.$db->kode_barang.'</td>    
                                                            <td>'.$db->nama_barang.'</td>  
                                                            <td>'.$stok.'</td>  
                                                            <td>'.number_format($db->harga_barang).'</td>  
                                                            <td>'.$db->jenis_barang.'</td>  
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                    data-id="'.$db->id.'"  
                                                                    data-nama="'.$db->nama_barang.'"
                                                                    data-kode="'.$db->kode_barang.'"
                                                                    data-harga="'.$db->harga_barang.'"
                                                                    data-jenis="'.$db->jenis_barang.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('data-barang/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
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
                <div class="modal-dialog modal-lg">
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
                                    <label for="">harga Barang</label>
                                    <input type="number" class="form-control" name="harga_barang" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis</label>
                                    <select class="form-control mr-sm-2 select2" id="inlineFormCustomSelect" name="jenis_barang" required>
                                                <option value="Tidak Habis">Tidak Habis</option>
                                                <option value="Habis Pakai">Habis Pakai</option>
                                    </select>
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
                                <div class="form-group">
                                    <label for="">Jenis</label>
                                    <select class="form-control mr-sm-2 select2" id="inlineFormCustomSelect" name="jenis_barang_update" required>
                                                <option value="Tidak Habis">Tidak Habis</option>
                                                <option value="Habis Pakai">Habis Pakai</option>
                                    </select>
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