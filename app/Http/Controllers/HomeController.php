<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $services=Service::get();
        
        $data=[
            'services' => $services
        ];

        return view('home.index',$data);
    }

}
?>
