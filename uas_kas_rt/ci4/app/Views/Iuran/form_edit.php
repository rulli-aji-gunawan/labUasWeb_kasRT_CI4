<?= $this-> include('template/header'); ?>
<h1 class="aplikasi"><?= $title; ?></h1>
<br>
<h2 class="pageTitle"> <?= $title; ?></h2>
<form class="add" action="" method="post" enctype="multipart/form-data">
    <p>
        <label for="keterangan">Keterangan :</label>
        <select name="keterangan" id="">
            <option value="<?= $data['keterangan'];?>" selected><?= $data['keterangan'];?></option>
            <option value="" disabled >- Pilih Jenis Iuran -</option>
            <option value="Iuran Keamanan">Iuran Keamanan</option>
            <option value="Iuran Sampah">Iuran Sampah</option>
        </select>
    </p>
    <p>
        <label for="tanggal" >Tanggal :</label>
        <input type="date" value="<?= $data['tanggal'];?>" selected id="tanggal" name="tanggal" cols="5" placeholder="-tanggal-"> <br> <br> 
        <label for="bulan">Bulan : </label>
        <select type="int" name="bulan" id="">
            <option value="<?= $data['bulan'];?>" selected>
                <?php
                $bulan = $data['bulan'];
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
            </option>

            <option value="" disabled >- Pilih Bulan Iuran -</option>
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
        <label for="tahun">Tahun :</label> 
        <select name="tahun" id="">
            <option value="<?= $data['tahun'];?>" selected><?= $data['tahun'];?></option>
            <option value="" disabled >- Pilih Tahun -</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
        </select> 
    </p>
    <p>
        <label for="jumlah">Jumlah Iuran :</label>
        <input type="decimal" id="jumlah" name="jumlah" cols="100" value="<?= $data['jumlah'];?>">
    </p>
    <p>
        <label for="warga_id">ID Warga :</label>
        <input type="int" id="warga_id" name="warga_id" cols="100"  value="<?= $data['warga_id'];?>" readonly >
    </p>

    <br>

    <p>
        <input type="submit" value="Kirim" class="btn btn-large">
    </p>

</form>

<?= $this->include('template/admin_footer'); ?>
