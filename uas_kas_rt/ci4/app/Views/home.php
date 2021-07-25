<?= $this-> include('template/header'); ?>

<h1 clas="aplikasi><?= $title; ?></h1>
<body>
    <header>
        <h1>
            SISTEM KAS RT
        </h1>
    </header>
    <div>
        <h1>
            Menu Utama
        </h1>
    </div>

    <div>
        <container class="home">
            <h2>
                Kelola Data Warga
            </h2>
            <br>
            <nav class="subMenu">
                <a href="<?= base_url('/warga/index');?>">
                    Lihat Data Warga
                </a>
                <a href="<?= base_url('/warga/add');?>">
                    Tambah Warga
                </a>
                <a href="<?= base_url('/warga/index');?>">
                    Ubah/Hapus Warga
                </a>
            </nav>
        </container>
        <br><br><br><br>

        <container class="iuran">
            <h2>
                Kelola Data Iuran
            </h2>
            <br>
            <nav class="subMenu">
                <a href="<?= base_url('/iuran/index');?>"">
                    Daftar KAS
                </a>
                <a href="<?= base_url('/warga/index');?>"">
                    Tambah Iuran
                </a>
            </nav>
        </container>
        <br><br><br><br>
        <container class="iuran">
            <h2>
                Laporan
            </h2>
            <br>
            <nav class="subMenu">
                <a href="<?= base_url('/laporan/index');?>">
                    Jumlah KAS terkumpul
                </a>
                <a href="#">
                    Data Warga Belum Bayar Iuran
                </a>
            </nav>
        </container>

        
    </div>
</body>
</html>