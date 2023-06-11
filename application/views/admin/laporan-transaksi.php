<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data Transaksi Barang Masuk & Barang Keluar</h3>
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
                                </div>
                                <div class="table-responsive">
                                    <table id="laporan_transaksi" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah Barang Masuk</th>
                                                <th>Jumlah Barang Keluar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-transaksi">
                                            <?php
                                                $no = 1;
                                                $CI =& get_instance();
                                                $CI->load->model('DataBarangMasukModel');
                                                $CI->load->model('DataBarangKeluarModel');

                                                $total_masuk = 0;
                                                $total_keluar = 0;

                                                foreach ($laporan as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_barang.'</td>     
                                                            <td>'.$CI->DataBarangMasukModel->sum_stok($db->id).'</td>    
                                                            <td>'.$CI->DataBarangKeluarModel->sum_stok($db->id).'</td>   
                                                        </tr>'; 

                                                    $total_masuk += $CI->DataBarangMasukModel->sum_stok($db->id);
                                                    $total_keluar += $CI->DataBarangKeluarModel->sum_stok($db->id);
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <th colspan="1"> </th>
                                            <th colspan="1">Total : </th>
                                            <th><?= $total_masuk ?></th>
                                            <th><?= $total_keluar ?></th>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            