<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employees;
class employeesController extends Controller
{
    static public function employees()
    {
        $employees= new Employees();
        
        return view ('employees', ['employees'=> $employees->all()]);
    }

   static public function employeessave()
    {
        $employees= new Employees();
        
        return view ('employeessave', ['employeessave'=> $employees->all()]);
    }

    public function che(Request $req)
    {
        $employees = new Employees();
        $employees->name = $req->input('name');
        $employees->second_name = $req->input('second_name');
        $employees->middle_name = $req->input('middle_name');
        $employees->birthdate = $req->input('birthdate');
        $employees->salary = $req->input('salary');
        $employees->phone = $req->input('phone'); 
        $employees->email = $req->input('email'); 
        $employees->adress = $req->input('adress');

        $employees->save();
        
        
        return redirect()->route('employees', ['employees'=>  $employees->all()]);
    }

    static public function delete($id)
    {
        DB::delete('delete from employees where id =  ?', [$id]);
        
        
        return redirect()->route('employees');
    }
}
