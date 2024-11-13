<!DOCTYPE html>
<html lang="id">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Transaksi</title>
    <style>
        .content-wrapper {
            padding: 20px;
            margin-top: 20px;
            background-color: #ffffff;
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

        .card {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
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
            <a href="public/index3.html" class="brand-link">
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

        <!-- Konten Halaman -->
        <div class="content-wrapper">
            <nav>
                <a href="index.php?controller=transaksi&action=index" class="btn btn-add">Kembali ke Daftar Transaksi</a>
            </nav>
            <div class="card">
                <h2>Detail Transaksi ID: <?= htmlspecialchars($transaksiDetail['id_transaksi']) ?></h2>
                <p><strong>Nama Barang:</strong> <?= htmlspecialchars($transaksiDetail['nama_barang']) ?></p>
                <p><strong>Nama Pelanggan:</strong> <?= htmlspecialchars($transaksiDetail['nama_pelanggan']) ?></p>
                <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksiDetail['jumlah']) ?></p>
                <p><strong>Total Harga:</strong> <?= htmlspecialchars($transaksiDetail['total_harga']) ?></p>
                <p><strong>Tanggal Transaksi:</strong> <?= htmlspecialchars($transaksiDetail['tanggal_transaksi']) ?></p>
            </div>
        </div>
    </div>

    <script src="public/plugins/jquery/jquery.min.js"></script>
    <script src="public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/dist/js/adminlte.min.js"></script>
</body>

</html>