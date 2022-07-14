<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class mahasiswa extends BaseController
{
    public function index()
    {
        $this->mhs1 = new MahasiswaModel();
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Fauzan Rahman";
        $this->mhs1->nim = "0110221045";
        $this->mhs1->gender = "L";
    }
}