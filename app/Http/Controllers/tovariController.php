<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Tovari;
use Illuminate\Http\Request;


class tovariController extends Controller
{
    static  public function tovari()
    {
        $tov= new Tovari();
        
    return view ('tovari', ['tovari'=> $tov->all()]);
    }

    static  public function tovarisave()
    {
        $tov= new Tovari();
        
    return view ('tovarisave', ['tovarisave'=> $tov->all()]);
    }

    public function che(Request $req)
    {
        $tov = new Tovari();
        $tov->name = $req->input('name');
        $tov->quantity = $req->input('quantity');
        $tov->price = $req->input('price');
        $tov->description = $req->input('description');
        $tov->creator = $req->input('creator');
        $tov->provider = $req->input('provider'); 
        $tov->color = $req->input('color'); 
        $tov->material = $req->input('material');

   $tov->save();
   
   return redirect()->route('tovari', ['tovari'=> $tov->all()]);

    }

    public function destroy($id)
    {
        DB::delete('delete from tovaris where id =  ?', [$id]);
        return redirect()->route('employees');    
    }
}
