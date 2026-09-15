<?php

namespace App\Controllers;

class Profil extends BaseController
{
    public function sejarah()
    {
   
        echo view('profil/sejarah');
       
    }
    
    public function visiMisi()
    {
        return view('profil/visimisi');
    }
}
