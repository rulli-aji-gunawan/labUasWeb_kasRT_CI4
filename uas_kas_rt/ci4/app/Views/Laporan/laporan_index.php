
<?= $this-> include('template/header'); ?>

<h1 class="aplikasi"><?= $title; ?></h1>
<br>
    <p>
        <label for="tahun"></label> <br>
        <select name="tahun" id="pilih">
            <option value="" disabled selected>- Pilih Tahun -</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
        </select>
        &nbsp &nbsp
        <select type="int" name="bulan" id="">
            <option value="" disabled selected>- Pilih Bulan Iuran -</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>
            <option value="03">Maret</option>
            <option value="04">April</option>
            <option value="05">Mei</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">Agustus</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">December</option>
        </select> &ensp; &ensp; <br><br>
    </p>
    <br>

    <div>
        <container class="daftarlaporan">

            <nav class="subMenu">
                <a href="#">
                    Daftar Warga Belum Bayar
                </a>
                <a href="<?= base_url('/iuran/iuran_index'); ?>">
                    Lihat Semua laporan
                </a>
            </nav>
        </container>        
    </div>
    <br>

    <table  class="table" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th >Tahun</th>
            <th >Bulan(KTP)</th>
            <th >Nama</th>
            <th >Alamat</th>
            <th >No. Rumah</th>
            <th >Iuran</th>
            <th >Keterangan</th>
        </tr>
    </thead>

    <tbody>
        <?php if($laporan): foreach($laporan as $value) {?>
        <tr>
            <td><?= $value['tahun']; ?></td>
            <td>
                <?php
                   $bulan = $value['bulan'];
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
            <td><?= $value['nama']; ?></td>
            <td><?= $value['alamat']; ?></td>
            <td><?= $value['no_rumah']; ?></td>
            <td><?= $value['jumlah']; ?></td>
            <td><?= $value['keterangan']; ?></td>
        </tr>    

        <?php } endif; ?>

        <tr>
            <td colspan="5">Total Iuran</td>     
            <td>
            <?php
                $sum = 0;
                foreach($laporan as $row){
                $sum += $row['jumlah'];
                }
                echo number_format($sum, 2);
            ?>
            </td>      
        <tr>
            
            
    </tbody>

    </table>

   

<?= $this->include('template/admin_footer'); ?>