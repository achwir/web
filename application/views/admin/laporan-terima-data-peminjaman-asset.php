<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Terima Data Peminjaman Asset</h3>
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
                            <form action="<?= base_url('admin/laporan-terima-data-peminjaman-asset') ?>" method="POST" id="form-tambah">

                                <div class="row">
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="">Asset</label>
                                            <select class="form-control mr-sm-2 select2" id="inlineFormCustomSelect" name="id_asset" required>
                                                <option value="">Pilih Asset</option>
                                            <?php
                                            $var = $this->db->get('data_asset')->result();

                                            foreach ($var as $v){
                                            echo '<option value="'.$v->id.'">'.$v->nama_asset.'</option>';
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>

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
                                    <table id="laporan_terima_data_peminjaman_asset" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Asset</th>
                                                <th>Tempat</th>
                                                <th>Nama Peminjam</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Tanggal Berakhir</th>
                                                <th>Jumlah Hari</th>
                                                <th>Tanggal Diterima</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-terima-data-peminjaman-asset">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {
                                                    $tgl1 = strtotime($db->tanggal_pengembalian);
                                                    $tgl2 = strtotime($db->tanggal_peminjaman); 
                                                    
                                                    $jarak = $tgl1-$tgl2;
                                                    $hari = $jarak / 60 / 60 / 24;
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_asset.'</td>     
                                                            <td>'.$db->tempat.'</td>     
                                                            <td>'.$db->nama_peminjam.'</td>     
                                                            <td>'.$db->tanggal_peminjaman.'</td>    
                                                            <td>'.$db->tanggal_pengembalian.'</td>    
                                                            <td>'.$hari.' Hari</td>    
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