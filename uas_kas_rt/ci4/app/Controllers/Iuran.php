<?php 

namespace App\Controllers;

use App\Models\IuranModel;
use App\Models\WargaModel;

class Iuran extends BaseController
{
     public function iuran_index()
    {
        $title = 'Daftar Iuran';
        $model = new IuranModel();
        $iuran = $model->findAll(); 
        return view('iuran/iuran_index',compact('iuran','title'));        
    }

    public function add($id)
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['warga_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $iuran = new IuranModel();
            $iuran->insert([
                'keterangan'    => $this->request->getPost('keterangan'),
                'tanggal'       => $this->request->getPost('tanggal'),
                'bulan'         => $this->request->getPost('bulan'),
                'tahun'         => $this->request->getPost('tahun'),
                'jumlah'        => $this->request->getPost('jumlah'),
                'warga_id'      => $this->request->getPost('warga_id'),
                'slug'          => url_title($this->request->getPost('warga_id')),
            ]);
            return redirect('iuran/index');
        }
        $warga = new WargaModel;
        $data = $warga->where('id', $id)->first();
        $title = "Tambah Iuran";
        return view('iuran/form_add', compact('title','data'));
    }


    

    public function edit($id)
    {
        $iuran = new IuranModel();

        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['keterangan' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid)
        {
            $iuran->update($id, [
                'keterangan'  => $this->request->getPost('keterangan'),
                'tanggal'     => $this->request->getPost('tanggal'),
                'bulan'       => $this->request->getPost('bulan'),
                'tahun'       => $this->request->getPost('tahun'),
                'jumlah'      => $this->request->getPost('jumlah'),
                'warga_id'    => $this->request->getPost('warga_id'),
                'slug'        => url_title($this->request->getPost('warga_id')),
            ]);
            return redirect('iuran/index');
        }
        // ambil data lama
        $data = $iuran->where('id', $id)->first();
        $title = "Edit Data Iuran";
        return view('iuran/form_edit', compact('title', 'data'));
    }


    public function delete($id)
    {
        $iuran = new IuranModel();
        $iuran->delete($id);
        return redirect('iuran/index');
    }



    


}