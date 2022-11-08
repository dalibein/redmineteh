<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Velosipedi;
use Illuminate\Support\Facades\DB;


use App\Models\Employees;


class velosipediController extends Controller
{
    static public function velosipedi()
    {
        $vel= new Velosipedi();
        
    return view ('velosipedi', ['velosipedi'=> $vel->all()]);
    }

    static public function velosipedisave()
    {
        $vel= new Velosipedi();
        
    return view ('velosipedisave', ['velosipedisave'=> $vel->all()]);
    }

    public function che(Request $req)
    {
        $vel = new Velosipedi();
        $vel->marka = $req->input('marka');
        $vel->type = $req->input('type');
        $vel->age = $req->input('age');
        $vel->date = $req->input('date');
        $vel->speed_count = $req->input('speed_count');
        $vel->color = $req->input('color'); 
        $vel->weight = $req->input('weight'); 
        $vel->price = $req->input('price');

   $vel->save();
   
   return redirect()->route('velosipedi', ['velosipedi'=> $vel->all()]);
    }

    public function destroy($id)
    {
        DB::delete('delete from velosipedis where id =  ?', [$id]);
        
        return redirect()->route('employees');
    }
}
