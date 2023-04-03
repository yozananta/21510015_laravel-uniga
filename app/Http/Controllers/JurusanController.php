<?php

namespace App\Http\Controllers;
use App\Models\Jurusan;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function getjurusan()
    {
        $dt_jurusan=jurusan::get();
        return response()->json ($dt_jurusan);
    }
}
