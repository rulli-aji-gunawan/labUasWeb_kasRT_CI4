<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home',[
            'title' => 'Halaman Home', 
            'content' => 'Ini adalah halaman Home yang menjelaskan tentang isi halaman ini.'
        ]);
    }
    
}
