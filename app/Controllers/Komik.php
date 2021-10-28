<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    protected $KomikModel;

    public function __construct()
    {
        $this->KomikModel = new KomikModel();
    }
    public function index()
    {
        $data = $this->KomikModel->findAll();

        $data = [
        'title' => 'Daftar Komik',
        'komik' => $data
    ];

    return view('komik/index', $data,);
    }

}
