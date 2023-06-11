<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan Data Asset</h3>
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
                                    <table id="laporan_asset" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Asset</th>
                                                <th>Tempat</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-asset">
                                            <?php
                                                $no = 1;
                                                foreach ($laporan as $db) {

                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->nama_asset.'</td>    
                                                            <td>'.$db->tempat.'</td>     
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