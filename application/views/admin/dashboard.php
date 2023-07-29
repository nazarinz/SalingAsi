<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPEhtml>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin SalingAsi</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('files/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('files/');?>css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?php echo base_url('files/');?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-baby"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin SalingAsi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="DataPendonor">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Pendonor</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

                        <!-- Nav Item - Tables -->
                        <li class="nav-item">
                <a class="nav-link" href="salingasi/DataPendonor/pagedatabase">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Penerima</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pendonor Asi</h6>
                            <a href="" class="btn btn-primary btn-sm float-right"> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nomor KK</td>
                            <td>Nama</td>
                            <td>Agama</td>
                            <td>Pekerjaan</td>
                            <td>Nomor HP</td>
                            <td>Alamat</td>
                            <td>Kelebihan ASI</td>
                            <td>Sehat</td>
                            <td>Perokok</td>
                            <td>Alkohol</td>
                            <td>Vege</td>
                            <td>Seks</td>
                            <td>Narkoba</td>
                            <td>Tato</td>
                            <td>HIV/AIDS</td>
                            <td>Hepatitis</td>
                            <td>Hepatitis C</td>
                            <td>Sifilis</td>
                            <td>HPV</td>
                            <td>Kanker</td>
                            <td>TBC</td>
                            <td>Epilepsy</td>
                            <td>Infeksi Payudara</td>
                        </tr>
                    </thead>
                    </tbody>    
                    <?php 
                    $no = 1;
                    foreach ($pendonor as $pdn) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $pdn['no_kk']; ?></td>
                            <td><?php echo $pdn['nama']; ?></td>
                            <td><?php echo $pdn['agama']; ?></td>
                            <td><?php echo $pdn['pekerjaan']; ?></td>
                            <td><?php echo $pdn['no_hp']; ?></td>
                            <td><?php echo $pdn['alamat']; ?></td>
                            <td><?php echo $pdn['q_kelebihanasi']; ?></td>
                            <td><?php echo $pdn['q_andasehat']; ?></td>
                            <td><?php echo $pdn['q_andaperokok']; ?></td>
                            <td><?php echo $pdn['q_andaalkohol']; ?></td>
                            <td><?php echo $pdn['q_andavege']; ?></td>
                            <td><?php echo $pdn['q_andaseks']; ?></td>
                            <td><?php echo $pdn['q_andanarkoba']; ?></td>
                            <td><?php echo $pdn['q_andatato']; ?></td>
                            <td><?php echo $pdn['q_andahivaids']; ?></td>
                            <td><?php echo $pdn['q_andahepatitis']; ?></td>
                            <td><?php echo $pdn['q_andahepatitisc']; ?></td>
                            <td><?php echo $pdn['q_andasifilis']; ?></td>
                            <td><?php echo $pdn['q_andahpv']; ?></td>
                            <td><?php echo $pdn['q_andakanker']; ?></td>
                            <td><?php echo $pdn['q_andatbc']; ?></td>
                            <td><?php echo $pdn['q_andaepilepsy']; ?></td>
                            <td><?php echo $pdn['q_andainfeksipayudara']; ?></td>
                        </tr>

                    <?php endforeach; ?>
                    
                    </tbody>
                    </table>

                </div>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Penerima Asi</h6>
                            <a href="" class="btn btn-primary btn-sm float-right"> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nomor KK</td>
                            <td>Nama Ibu Penerima</td>
                            <td>Agama Ibu Penerima</td>
                            <td>Pekerjaan</td>
                            <td>Nomor HP</td>
                            <td>Alamat</td>
                            <td>Nama Bayi</td>
                            <td>Tanngal Lahir</td>
                            <td>Jenis Kelamin</td>
                            <td>Bayi Adopsi</td>
                            <td>Berat Badan Anak</td>
                            <td>Jumlah Butuh Asi</td>
                            <td>Alasan</td>
                            <td>Bayi Prematur</td>
                            <td>Bayi Gizi Buruk</td>
                            <td>Bayi Kelainan</td>
                            <td>Bayi Sakit Berat</td>
                            <td>Ibu Sadar</td>
                            <td>Ibu Terpisah</td>
                            <td>Ibu Meninggal</td>
                            <td>Ibu Gangguan Mental</td>
                            <td>Ibu Infeksi Menular</td>
                            <td>Ibu Hormon</td>                          
                        </tr>
                    </thead>
                    </tbody>    
                    <?php 
                    $no = 1;
                    foreach ($penerima as $pnr) : ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $pnr['id']; ?></td>
                            <td><?php echo $pnr['no_kk']; ?></td>
                            <td><?php echo $pnr['nama_ibu_penerima']; ?></td>
                            <td><?php echo $pnr['agama_ibu_penerima']; ?></td>
                            <td><?php echo $pnr['pekerjaan']; ?></td>
                            <td><?php echo $pnr['no_hp']; ?></td>
                            <td><?php echo $pnr['alamat']; ?></td>
                            <td><?php echo $pnr['nama_bayi']; ?></td>
                            <td><?php echo $pnr['tanggal_lahir']; ?></td>
                            <td><?php echo $pnr['jenis_kelamin']; ?></td>
                            <td><?php echo $pnr['bayi_adopsi']; ?></td>
                            <td><?php echo $pnr['berat_badan_anak']; ?></td>
                            <td><?php echo $pnr['jumlah_asi']; ?></td>
                            <td><?php echo $pnr['bayi_prematur']; ?></td>
                            <td><?php echo $pnr['bayi_giziburuk']; ?></td>
                            <td><?php echo $pnr['bayi_kelainan']; ?></td>
                            <td><?php echo $pnr['bayi_sakitberat']; ?></td>
                            <td><?php echo $pnr['ibu_sadar']; ?></td>
                            <td><?php echo $pnr['ibu_terpisah']; ?></td>
                            <td><?php echo $pnr['ibu_meninggal']; ?></td>
                            <td><?php echo $pnr['ibu_gangguanmental']; ?></td>
                            <td><?php echo $pnr['ibu_infeksimenular']; ?></td>
                            <td><?php echo $pnr['ibu_hormon']; ?></td>

                        </tr>

                    <?php endforeach; ?>
                    
                    </tbody>
                    </table>

                </div>
                </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; SalingAsi 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('files/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('files/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('files/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('files/');?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('files/');?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('files/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('files/');?>js/demo/datatables-demo.js"></script>

</body>

</html>