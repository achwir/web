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
                                
                                <div class="table-responsive">
                                    <table id="laporan_data_barang" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Supplier</th>
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
                                                            <td>'.$db->nama_supplier.'</td>    
                                                            <td>'.$stok.'</td>    
                                                            <td>'.number_format($db->harga_barang).'</td>    
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                        </tr>';    
                                                }
                                            ?>
                                        </tbody>
                                        <tfoot class="row">
                                            <div class="col text-right">
                                                <button  class="btn btn-sm btn-outline-danger shadow-sm ml-3" type="button" id="btn-export">PDF <i class="fa fa-file-pdf"></i></button>
                                            </div>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>