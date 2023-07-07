<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan pengembalian Barang</h3>
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
                            <form action="<?= base_url('admin/laporan-pengembalian-barang') ?>" method="POST" id="form-tambah">

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
                                    <table id="laporan_barang_keluar" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                        <tr>
                                                <th>No</th>
                                                <th>Nama Barang</th>
                                                <th>Nama Peminjam</th>
                                                <th>Nama Bidang</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Pengembalian</th>
                                                <th>Jumlah Hari</th>
                                                <th>Jumlah Barang</th>
                                                <th>Jenis Barang</th>
                                                <th>Tanggal Validasi</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-barang-keluar">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    $tgl1 = strtotime($db->tanggal_pengembalian);
                                                    $tgl2 = strtotime($db->tanggal_peminjaman); 
                                                    
                                                    $jarak = $tgl1-$tgl2;
                                                    $hari = $jarak / 60 / 60 / 24;
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_barang.'</td>     
                                                            <td>'.$db->nama_peminjam.'</td>     
                                                            <td>'.$db->nama_bidang.'</td>     
                                                            <td>'.$db->tanggal_peminjaman.'</td>    
                                                            <td>'.$db->tanggal_pengembalian.'</td>    
                                                            <td>'.$hari.' Hari</td>    
                                                            <td>'.$db->jumlah_barang.'</td>   
                                                            <td>'.$db->jenis_barang.'</td>   
                                                            <td>'.$db->tgl_validation_pengembalian.'</td>   
                                                            <td>'.date('d-m-Y H:i:s', strtotime($db->created_at)).'</td>
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