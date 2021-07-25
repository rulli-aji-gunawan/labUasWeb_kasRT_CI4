<?php 

namespace App\Controllers;

use App\Models\LaporanModel;

class Laporan extends BaseController
{
    protected $LaporanModel;
    public function __construct()
    {
        $this->LaporanModel = new LaporanModel();
    }

    public function laporan_index(){
        $laporan = new LaporanModel;
        $data = [
                'title'     => 'Laporan Kas',
                'laporan'   => $this->LaporanModel->get_laporan(),
                'isi'       => 'laporan_index'
                ];
        $total = $this->LaporanModel->total_iuran();
        echo view('laporan/laporan_index',$data); 
     } 
    


}
