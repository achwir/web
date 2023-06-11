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
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
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
            