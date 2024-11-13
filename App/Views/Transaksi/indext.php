<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Transaksi</title>
    <style>
        .content-wrapper {
            padding: 20px;
            margin-top: 20px;
        }

        table {
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }

        table thead th {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table tbody td {
            padding: 10px;
            text-align: center;
            border-top: 1px solid #ddd;
        }

        footer {
            margin-top: 20px;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="public/AdminLTE/index3.html" class="brand-link">
                <img src="public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Rohmanisah</a>
                    </div>
                </div>
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">Daftar</li>
                        <li class="nav-item">
                            <a href="index.php?controller=home&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=barang&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Barang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=pelanggan&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Pelanggan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?controller=transaksi&action=index" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Transaksi</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Daftar Transaksi</h1>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Transaksi</h3>
                    </div>
                    <a href="index.php?controller=transaksi&action=create" class="btn btn-primary my-2 ml-3">+ Tambah Data</a>
                    <div class="card-body p-0">
                        <table class="table table-striped table-bordered projects">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Transaksi</th>
                                    <th>Kode Barang</th>
                                    <th>ID Pelanggan</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaksiList as $key => $transaksi): ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $transaksi['id_transaksi'] ?></td>
                                        <td><?= $transaksi['kode_barang'] ?></td>
                                        <td><?= $transaksi['id_pelanggan'] ?></td>
                                        <td><?= $transaksi['jumlah'] ?></td>
                                        <td><?= $transaksi['total_harga'] ?></td>
                                        <td><?= $transaksi['tanggal_transaksi'] ?></td>
                                        <td><a href="index.php?controller=transaksi&action=detail&id=<?= urlencode($transaksi['id_transaksi']) ?>" class="btn btn-info btn-sm">Detail</a>

                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>


    </div>

    <script src="public/plugins/jquery/jquery.min.js"></script>
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/dist/js/adminlte.min.js"></script>
</body>

</html>