<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
       
        $data = Employee::all();
        return view('dataemployee', compact('data'));
    }

    public function addemployee(){
        return view('addemployee');
    }

    public function insertdata(Request $request){
    
        //dd($request->all());
  
        $data = Employee::create($request->all());
        if ($request->hasfile('foto')){
            $request->file('foto')->move('fotoemployee/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('employee')->with('success', 'Data added successfully');
    }

    public function showemployee($id){
        $data = Employee::find($id);
        //dd($data);

        return view('showemployee', compact('data'));
    }

    public function updatedata(Request $request, $id){
        
        $data = Employee::find($id);
        $data->update($request->all());

        return redirect()->route('employee')->with('success', 'Data update successfully');
    }


    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('employee')->with('success', 'Data delete successfully');
    }
}
