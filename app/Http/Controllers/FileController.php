<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Peticione;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function download($filename){
        $path= public_path() . '/peticiones' . $filename;
        return $path;
    }
}
