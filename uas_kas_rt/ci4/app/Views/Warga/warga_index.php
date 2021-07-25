
<?= $this-> include('template/header'); ?>
<h1 class="aplikasi"><?= $title; ?></h1>
<br>

    <div>
        <container class="daftarWarga">

            <nav class="subMenu">
                <a href="#">
                    Lihat Data Warga
                </a>
                <a href="<?= base_url('/warga/add'); ?>">
                    Tambah Warga
                </a>
            </nav>
        </container>        
    </div>

    <table class="table" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th >ID Warga</th>
            <th >NIK(KTP)</th>
            <th >Nama</th>
            <th >Jenis Kelamin</th>
            <th >Alamat</th>
            <th >No. Rumah</th>
            <th >Status</th>
            <th >Aksi</th>
            <th >Input</th>
        </tr>
    </thead>

    <tbody>
        <?php if($warga): foreach($warga as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nik']; ?></td>
            <td class="tblNama"><?= $row['nama']; ?></td>
            <td><?= $row['kelamin']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['no_rumah']; ?></td>
            <td>
                <?php
                   $status = $row['status'];
                   switch ($status) {
                    case '1':
                        echo "Warga Tetap";
                        break;
                    case '0':
                        echo "Warga Kontrak";
                        break;                    
                    };
                ?>
            </td>
            <td class="aksi"  >
                <a class="btn" href="<?= base_url('/warga/edit/' .$row['id']);?>">Ubah</a>
                <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/warga/delete/' .$row['id']);?>">Hapus</a>
            </td>
            <td class="tambahIuran">
                <a class="btn" href="<?= base_url('/iuran/add/' .$row['id']);?>">Input Iuran</a>
            </td>
        </tr>
            <?php endforeach; else: ?>
        <tr>
            <td colspan="7">Belum ada data.</td>
        </tr>
        <?php endif; ?>
    </tbody>

    </table>


<?= $this->include('template/admin_footer'); ?>