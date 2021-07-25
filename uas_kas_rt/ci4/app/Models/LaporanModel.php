<?php 

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model 
{
  public function get_laporan()
  {
    return $this->db->table('warga')
    ->join('iuran', 'iuran.warga_id = warga.id','right')
    // ->where('iuran.bulan','12')
    ->get()->getResultArray(); 


  } 

  function total_iuran()
  {
    $query = $this->db->query("SELECT jumlah FROM iuran");
    return $query;
  }

}

 