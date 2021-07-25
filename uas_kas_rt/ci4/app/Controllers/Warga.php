<?php 

namespace App\Controllers;

use App\Models\WargaModel;

class Warga extends BaseController
{

    public function warga_index()
    {
        $title = 'Daftar Warga';
        $model = new WargaModel();
        $warga = $model->findAll();
        return view('Warga/warga_index',compact('warga','title'));
        
    }

    public function add()
    {
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['nik' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $warga = new WargaModel();
            $warga->insert([
                'nik'       => $this->request->getPost('nik'),
                'nama'      => $this->request->getPost('nama'),
                'kelamin'   => $this->request->getPost('kelamin'),
                'alamat'    => $this->request->getPost('alamat'),
                'no_rumah'  => $this->request->getPost('no_rumah'),
                'status'    => $this->request->getPost('status'),
                'slug'      => url_title($this->request->getPost('nik')),
            ]);
            return redirect('warga/index');
        }
        $title = "Tambah Warga";
        return view('warga/form_add', compact('title'));
    }


    public function edit($id)
    {
        $warga = new WargaModel();

        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules(['nik' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();
        if ($isDataValid)
        {
            $warga->update($id, [
                'nik'       => $this->request->getPost('nik'),
                'nama'      => $this->request->getPost('nama'),
                'kelamin'   => $this->request->getPost('kelamin'),
                'alamat'    => $this->request->getPost('alamat'),
                'no_rumah'  => $this->request->getPost('no_rumah'),
                'status'    => $this->request->getPost('status'),
                'slug'      => url_title($this->request->getPost('nik')),
            ]);
            return redirect('warga/index');
        }
        // ambil data lama
        $data = $warga->where('id', $id)->first();
        $title = "Edit Data Warga";
        return view('warga/form_edit', compact('title', 'data'));
    }


    public function delete($id)
    {
        $warga = new WargaModel();
        $warga->delete($id);
        return redirect('warga/index');
    }



    


}