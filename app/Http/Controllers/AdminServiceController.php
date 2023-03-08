<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminServiceController extends Controller
{
    public function service(){ 
        $services = DB::table('services')->get(); 
        //dd($services);    
        $data=[
            'services' => $services
        ];
        return view('admin.service',$data);     
    }

    public function create(){ 
        return view('admin.service_create');     
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request){ 
        if($request->isMethod('post')){
            $insert =DB::table('services')->insert([
                'icon' => $request->icon,
                'name' => $request->name,
                'description' => $request->description,
            ]);        
        }

        return redirect()->route('admin_service') ;     
    }

    public function delete($id){
        $delete= DB::table('services')->where('id',$id)->delete();              
        return redirect()->route('admin_service') ;     
    }    
}

?>
