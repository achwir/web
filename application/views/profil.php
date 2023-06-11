<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Profil</h3>
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
                                <form method="post" action="<?= base_url('profil/update') ?>" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Nama Lengkap</label>
                                                <input type="text" name="nama_lengkap" class="form-control" value="<?= $user->nama_lengkap ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" value="<?= $user->email ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Username</label>
                                                <input type="text" name="username" readonly class="form-control" value="<?= $user->username ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <?php 
                                                if($user->foto == NULL){
                                                    $foto = 'default.png';
                                                }else{
                                                    $foto = $user->foto;
                                                }
                                            ?>
                                            <img src="<?= base_url('assets/img/'). $foto ?>" alt="" width="150" height="150">
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Foto</label>
                                                <input type="file" name="foto" class="form-control">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="row mt-2 text-right">
                                        <div class="col-md">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>