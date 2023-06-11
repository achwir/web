<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data User</h3>
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
                                        <button class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#modal-tambah">Tambah</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Nama Lengkap</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="body-data-user">
                                            <?php
                                                $no = 1;
                                                foreach ($datauser as $db) {
                                                    echo '<tr>
                                                            <td>'.$no++.'</td>
                                                            <td>'.$db->username.'</td>    
                                                            <td>'.$db->email.'</td>    
                                                            <td>'.$db->nama_lengkap.'</td>    
                                                            <td>'.date('d-m-Y', strtotime($db->created_at)).'</td>
                                                            <td>
                                                                <button class="btn btn-warning btn-sm btn-update" 
                                                                data-id="'.$db->id.'"  
                                                                data-username="'.$db->username.'"
                                                                data-email="'.$db->email.'"
                                                                data-nama-lengkap="'.$db->nama_lengkap.'"
                                                                data-group_id="'.$db->group_id.'"
                                                                data-status="'.$db->status.'"
                                                                data-foto="'.$db->foto.'"
                                                                ><i class="fas fa-edit"></i></button>
                                                                <a class="btn btn-danger btn-sm" href="'.base_url('data-user/delete/'.$db->id).'"><i class="fas fa-trash"></i></a>
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
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('data-user/insert') ?>" method="POST" id="form-tambah"  enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Foto</label>
                                    <input type="file" name="foto" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Group ID</label>
                                    <select class="form-control mr-sm-2" name="group_id" required>
                                    <?php
                                    $var = $this->db->get('groups')->result();

                                    foreach ($var as $v){
                                    echo '<option value="'.$v->id.'">'.$v->name.'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control mr-sm-2" name="status" required>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
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
                            <h4 class="modal-title" id="myModalLabel">Update Data User</h4>
                            <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url('data-user/update') ?>" method="POST" id="form-update"  enctype="multipart/form-data">
                                <input type="hidden" name="id_update">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" name="email_update" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama_lengkap_update" required>
                                </div>
                                <div class="row">
                                    <div class="col-md">
                                        <img src="" id="preview-foto" alt="" width="150" height="150">
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" name="foto_update" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Group ID</label>
                                    <select class="form-control mr-sm-2" name="group_id_update" required>
                                    <?php
                                    $var = $this->db->get('groups')->result();

                                    foreach ($var as $v){
                                    echo '<option value="'.$v->id.'">'.$v->name.'</option>';
                                    }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select class="form-control mr-sm-2" name="status_update" required>
                                    <option value="1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
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