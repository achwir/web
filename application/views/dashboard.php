<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= $total_databarang ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Barang</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="package"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><?= $total_databarangmasuk ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Barang Masuk
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="arrow-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= $total_databarangkeluar ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Barang Keluar</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="arrow-up"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= $total_dataasset ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Asset</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="package"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><?= $total_datauser ?></h2>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">User
                                    </h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="arrow-down"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-right">
                        <div class="card-body">
                            <div class="d-flex d-lg-flex d-md-block align-items-center">
                                <div>
                                    <div class="d-inline-flex align-items-center">
                                        <h2 class="text-dark mb-1 font-weight-medium"><?= $total_databidang ?></h2>
                                    </div>
                                    <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Bidang</h6>
                                </div>
                                <div class="ml-auto mt-md-3 mt-lg-0">
                                    <span class="opacity-7 text-muted"><i data-feather="arrow-up"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End First Cards -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Sales Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Data Barang</h4>
                                <div id="campaign-v2" class="mt-2" style="height:283px; width:100%;"></div>
                                <ul class="list-style-none mb-0">
                                    <li>
                                        <i class="fas fa-circle text-primary font-10 mr-2"></i>
                                        <span class="text-muted">Total Data Barang</span>
                                        <span class="text-dark float-right font-weight-medium"><?= $total_databarang ?></span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-danger font-10 mr-2"></i>
                                        <span class="text-muted">Total Data Barang Masuk</span>
                                        <span class="text-dark float-right font-weight-medium"><?= $total_databarangmasuk ?></span>
                                    </li>
                                    <li class="mt-3">
                                        <i class="fas fa-circle text-cyan font-10 mr-2"></i>
                                        <span class="text-muted">Total Data Barang Keluar</span>
                                        <span class="text-dark float-right font-weight-medium"><?= $total_databarangkeluar ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Total Transaksi Barang Perbulan pada Tahun 2023</h4>
                                <div class="barang-masu mt-4 position-relative" style="height:294px;"></div>
                                <ul class="list-inline text-center mt-5 mb-2">
                                    <li class="list-inline-item text-muted font-italic">Data Barang</li>
                                </ul>
                            </div>
                        </div>
                    </div> 

                    
                    <!-- <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Barang Keluar</h4>
                                <div class="barang-keluar mt-4 position-relative" style="height:294px;"></div>
                                <ul class="list-inline text-center mt-5 mb-2">
                                    <li class="list-inline-item text-muted font-italic">Data Barang Keluar</li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Earning by Location</h4>
                                <div class="" style="height:180px">
                                    <div id="visitbylocate" style="height:100%"></div>
                                </div>
                                <div class="row mb-3 align-items-center mt-1 mt-5">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">India</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">28%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">UK</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 74%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">21%</span>
                                    </div>
                                </div>
                                <div class="row mb-3 align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">USA</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-4 text-right">
                                        <span class="text-muted font-14">China</span>
                                    </div>
                                    <div class="col-5">
                                        <div class="progress" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-right">
                                        <span class="mb-0 font-14 text-dark font-weight-medium">12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!-- *************************************************************** -->
                <!-- End Sales Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body ">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Transaksi Terakhir Barang Masuk</h4>
                                </div>
                                <div class="table-responsive users">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Nama Lengkap
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Nomor Telepon
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Alamat
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datasupplier as $supplier) {?>
                                                <tr>
                                                    <td class="border-0">
                                                        <div class="d-flex no-block align-items-center">
                                                            <div class="">
                                                                <h5 class=""><?= $supplier->nama_supplier ?></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $supplier->no_telp ?></td>
                                                    <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $supplier->alamat ?></td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transaksi Terakhir Barang Keluar</h4>
                                <div class="mt-4 activity">

                                    <?php
                                        foreach ($log_activity as $log) {?>

                                            <div class="d-flex align-items-start border-left-line pb-3 px-2" >
                                                <div>
                                                    <?php
                                                        if($log->log_action == "Menambah"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                                                    <i data-feather="plus"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Mengubah"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-warning btn-circle mb-2 btn-item">
                                                                    <i data-feather="minus"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Menghapus"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-danger btn-circle mb-2 btn-item">
                                                                    <i data-feather="trash"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Login"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-success btn-circle mb-2 btn-item">
                                                                    <i data-feather="log-in"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Logout"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-secondary btn-circle mb-2 btn-item">
                                                                    <i data-feather="log-out"></i>
                                                                </a>';
                                                        }
                                                    ?>
                                                   
                                                </div>
                                                <div class="ml-3 mt-2">
                                                    <h5 class="text-dark font-weight-medium mb-2"><?= $log->log_type ?></h5>
                                                    <p class="font-14 mb-2 text-muted">
                                                        <?= $log->log_action .' '. $log->log_item ?>
                                                    </p>
                                                    <span class="font-weight-light font-14 text-muted"><?= date('d-m-Y H:i:s', strtotime($log->created_at)) ?></span>
                                                </div>
                                            </div>

                                        <?php 
                                            } 
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Activity</h4>
                                <div class="mt-4 activity">

                                    <?php
                                        foreach ($log_activity as $log) {?>

                                            <div class="d-flex align-items-start border-left-line pb-3 px-2" >
                                                <div>
                                                    <?php
                                                        if($log->log_action == "Menambah"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-info btn-circle mb-2 btn-item">
                                                                    <i data-feather="plus"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Mengubah"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-warning btn-circle mb-2 btn-item">
                                                                    <i data-feather="minus"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Menghapus"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-danger btn-circle mb-2 btn-item">
                                                                    <i data-feather="trash"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Login"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-success btn-circle mb-2 btn-item">
                                                                    <i data-feather="log-in"></i>
                                                                </a>';
                                                        }else if($log->log_action == "Logout"){
                                                            echo '<a href="javascript:void(0)" class="btn btn-secondary btn-circle mb-2 btn-item">
                                                                    <i data-feather="log-out"></i>
                                                                </a>';
                                                        }
                                                    ?>
                                                   
                                                </div>
                                                <div class="ml-3 mt-2">
                                                    <h5 class="text-dark font-weight-medium mb-2"><?= $log->log_type ?></h5>
                                                    <p class="font-14 mb-2 text-muted">
                                                        <?= $log->log_action .' '. $log->log_item ?>
                                                    </p>
                                                    <span class="font-weight-light font-14 text-muted"><?= date('d-m-Y H:i:s', strtotime($log->created_at)) ?></span>
                                                </div>
                                            </div>

                                        <?php 
                                            } 
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body ">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Data User</h4>
                                </div>
                                <div class="table-responsive users">
                                    <table class="table no-wrap v-middle mb-0">
                                        <thead>
                                            <tr class="border-0">
                                                <th class="border-0 font-14 font-weight-medium text-muted">Nama Lengkap
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted">Email
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted px-2">Role Akses
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Status
                                                </th>
                                                <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                                    Created At
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($datauser as $user) {?>
                                                <tr>
                                                    <td class="border-top-0 px-1 py-4">
                                                        <div class="d-flex no-block align-items-center">
                                                            <?php
                                                                if($user->foto != null){?>
                                                                    <div class="mr-3"><img
                                                                            src="<?= base_url('assets/img/'.$user->foto) ?>"
                                                                            alt="user" class="rounded-circle" width="45"
                                                                            height="45" /></div>
                                                                <?php } else { ?>
                                                                    <div class="mr-3"><img
                                                                            src="<?= base_url('assets/img/default.png') ?>"
                                                                            alt="user" class="rounded-circle" width="45"
                                                                            height="45" /></div>
                                                                <?php } ?>
                                                            <div class="">
                                                                <h5 class="text-dark mb-0 font-16 font-weight-medium"><?= $user->nama_lengkap ?></h5>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $user->email ?></td>
                                                    <td class="border-top-0 text-muted px-2 py-4 font-14"><?= $user->name ?></td>


                                                    
                                                        <?php
                                                            if($user->status != 1){?>
                                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                                    class="fa fa-circle text-danger font-12" data-toggle="tooltip"
                                                                    data-placement="top" title="Tidak Aktif"></i></td>
                                                            <?php } else { ?>
                                                                <td class="border-top-0 text-center px-2 py-4"><i
                                                                    class="fa fa-circle text-success font-12" data-toggle="tooltip"
                                                                    data-placement="top" title="Aktif"></i></td>
                                                            <?php } ?>

                                                    <td
                                                        class="border-top-0 text-center font-weight-medium text-muted px-2 py-4">
                                                        <?= date('d-m-Y', strtotime($user->created_at)) ?>
                                                    </td>
                                                </tr>
                                            <?php
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>