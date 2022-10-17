<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me() {
        return [
            'NIS' => 3103120189,
            'Nama' => 'Rakha YUdhistira',
            'Phone' => '081232369481822',
            'Kelas' => 'XII RPL 6'
        ];
    }
}
