
<?= $this-> include('template/header'); ?>

<h1 class="aplikasi"><?= $title; ?></h1>
<br>

    <div>
        <container class="daftarIuran">

            <nav class="subMenu">
                <a href="<?= base_url('/warga/index'); ?>">
                    Lihat Daftar Iuran
                </a>
                <a href="<?= base_url('/warga/index'); ?>">
                    Input Iuran
                </a>
            </nav>
        </container>        
    </div>

    <table class="table" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th >ID Transaksi</th>
            <th >Keterangan</th>
            <th >Tanggal</th>
            <th >Bulan</th>
            <th >Tahun</th>
            <th >Jumlah</th>
            <th >ID Warga</th>
            <th >Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php if($iuran): foreach($iuran as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['keterangan']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td>
                <?php
                   $bulan = $row['bulan'];
                   switch ($bulan) {
                    case '1':
                        echo "Januari";
                        break;
                    case '2':
                        echo "Februari";
                        break;
                        
                    case '3':
                        echo "Maret";
                        break;
                        
                    case '4':
                        echo "April";
                        break;
                        
                    case '5':
                        echo "Mei";
                        break;
                        
                    case '6':
                        echo "Juni";
                        break;
                        
                    case '7':
                        echo "Juli";
                        break;
                        
                    case '8':
                        echo "Agustus";
                        break;
                        
                    case '9':
                        echo "September";
                        break;
                        
                    case '10':
                        echo "Oktober";
                        break;
                        
                    case '11':
                        echo "November";
                        break;
                        
                    case '12':
                        echo "Desember";
                        break;
                    
                };
                ?>
            </td>

            <td><?= $row['tahun']; ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td><?= $row['warga_id']; ?></td>
            <td class="aksi">
                <a class="btn" href="<?= base_url('/iuran/edit/' .$row['id']);?>">Ubah</a>
                <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/iuran/delete/' .$row['id']);?>">Hapus</a>
            </td>
        </tr>
            <?php endforeach; else: ?>
        <tr>
            <td colspan="7">Belum ada data.</td>
        </tr>
        <?php endif; ?>
    </tbody>

    </table>

    <br><br>


<?= $this->include('template/admin_footer'); ?>