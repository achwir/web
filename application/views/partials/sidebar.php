<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php
                      // data main menu
                    $main_menu = $this->db->order_by('sequence')->get_where('menus', 
                                                array('parrent_id' => 0, 'group_id' => $this->session->userdata('group_id')));
                    foreach ($main_menu->result() as $main) {
                        // Query untuk mencari data sub menu
                        $parrent_id = $this->db->order_by('sequence')->get_where('menus', 
                                                array('parrent_id' => $main->id, 'group_id' => $this->session->userdata('group_id')));
                        // periksa apakah ada sub menu
                      if ($parrent_id->num_rows() > 0) {?>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class="<?= $main->icon ?>"></i><span
                                    class="hide-menu"><?= $main->name ?> </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                
                                <?php foreach ($parrent_id->result() as $sub) {?>
                                  <li class="sidebar-item">
                                    <a href="<?= base_url($this->session->userdata('group_slug')) ?>/<?= $sub->slug ?>" class="sidebar-link">
                                      <span class="hide-menu"> <?= $sub->name ?></span>
                                    </a>
                                  </li>
                                <?php } ?>
                                
                            </ul>
                        </li>
                      <?php } else { ?>
                        <li class="sidebar-item"> 
                          <a class="sidebar-link sidebar-link" href="<?= base_url($this->session->userdata('group_slug')) ?>/<?= $main->slug ?>" aria-expanded="false">
                                <i class="<?= $main->icon ?>">
                                </i>
                                <span class="hide-menu"><?= $main->name ?></span>
                          </a>
                        </li>
                      <?php }
                } ?>
                <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('dashboard') ?>"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Master Data </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                    class="hide-menu"> Pegawai
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span
                                    class="hide-menu"> Bidang Bagian
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span
                                    class="hide-menu"> Bidang Barang
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">Input Barang
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards.html"
                        aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                            class="hide-menu">Output Barang
                        </span></a>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                            class="hide-menu">Laporan </span></a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                    <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                    class="hide-menu"> Pegawai
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-inputs.html" class="sidebar-link"><span
                                    class="hide-menu"> Barang Masuk
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-input-grid.html" class="sidebar-link"><span
                                    class="hide-menu"> Barang Keluar
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span
                                    class="hide-menu"> Bidang Bagian
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="form-checkbox-radio.html" class="sidebar-link"><span
                                    class="hide-menu"> Bidang Barang
                                </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                        aria-expanded="false"><i data-feather="lock" class="feather-icon"></i><span
                            class="hide-menu">Admin
                        </span></a>
                </li> -->
                <!-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../../docs/docs.html"
                        aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span
                            class="hide-menu">Profil</span></a></li> -->
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="<?= base_url('logout') ?>"
                        aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Logout</span></a></li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>