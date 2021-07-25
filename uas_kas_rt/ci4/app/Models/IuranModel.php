<?php 

namespace App\Models;

use CodeIgniter\Model;

class IuranModel extends Model
{
    protected $table = 'iuran';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = TRUE;
    protected $allowedFields = ['id','keterangan','tanggal','bulan','tahun','jumlah','warga_id','slug'];
}
