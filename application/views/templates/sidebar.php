<link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet" type="text/css">

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-white sidebar sidebar-white accordion border-right shadow-lg p-3 mb-5 bg-body rounded ms-4 me-3 mt-2" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <div class=" d-flex align-items-center justify-content-center mt-3 h1 mb-3" href="">
                <!-- <div class="sidebar-brand-icon ">
                    <i class=" bi-flower1"></i>
                </div>
                <div class="sidebar-brand-arial mx-3">Flouris</div> -->
                <a class="navbar-brand h1 align-items-center justify-content-center text-dark" href="<?php echo base_url('') ?>">Madame<span class="text-warning">Flowers</span></a>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="mb-3 mt-3 nav-item <?= ($this->uri->segment(1) == "welcome") ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/welcome/explore') ?>">

                    <span>Home</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading ">
                Kategori
            </div>

            <!-- Nav Item - Tables -->
            <li class=" mb-2 mt-2 nav-item <?= ($this->uri->segment(2) == "bunga_tangan") ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/kategori/bunga_tangan') ?>">

                    <span>Bunga Tangan</span></a>
            </li>

            <li class="mb-2 mt-2 nav-item <?= ($this->uri->segment(2) == "bunga_meja") ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/kategori/bunga_meja') ?>">
                    <div class="font-family-vernanda"></div>

                    <span>Bunga Meja</span>
                </a>
            </li>

            <li class="mb-2 mt-2 nav-item <?= ($this->uri->segment(2) == "bunga_standing") ? "active" : "" ?>">
                <a class="nav-link" href="<?php echo base_url('index.php/kategori/bunga_standing') ?>">

                    <span>Bunga Standing</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/dashboard/proses_pesanan') ?>">
                <i class="fas fa-fw fa-cookie"></i>
                <span>Invoice</span></a>
            </li> -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <!-- <button class="rounded-circle border-0" id="sidebarToggle"></button> -->
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow mt-2">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class='navbar'>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="alert alert-white mt-3 btn btn-light py-2 px-3">

                                    <?php
                                    $keranjang = 'Keranjang Belanja : ' . $this->cart->total_items() . ' item '
                                    ?>

                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>

                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <!-- <div class="text-dark">Selamat datang <span class="text-primary"><?php echo $this->session->userdata('username') ?></span></div> -->
                                    </li>
                                    <li class="ml-2"><?php echo anchor('auth/logout', '<button class="btn btn-danger btn-sm px-5 py-2">Logout</button>') ?></li>
                                <?php } else { ?>
                                    <li><?php echo anchor('auth/login', 'Login'); ?></li>
                                <?php } ?>
                            </ul>
                        </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->