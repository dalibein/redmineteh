<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Suppliers;
use Illuminate\Http\Request;

class suppliersController extends Controller
{
    static public function suppliers()
    {
        $sup= new Suppliers();
        
    return view ('suppliers', ['suppliers'=> $sup->all()]);
    }

    static public function supplierssave()
    {
        $sup= new Suppliers();
        
    return view ('supplierssave', ['supplierssave'=> $sup->all()]);
    }

    public function che(Request $req)
    {
        $sup = new suppliers();
        $sup->name = $req->input('name');
        $sup->adress = $req->input('adress');
        $sup->phone = $req->input('phone');
        $sup->marka = $req->input('marka');
        $sup->count = $req->input('count');
        $sup->delivery_date = $req->input('delivery_date'); 
        $sup->city = $req->input('city'); 
        $sup->the_amount = $req->input('the_amount');

   $sup->save();
   
   return redirect()->route('suppliers', ['suppliers'=> $sup->all()]);
   
    }

    public function destroy($id)
    {
        DB::delete('delete from suppliers where id =  ?', [$id]);
        
        return redirect()->route('employees');
     }
}
