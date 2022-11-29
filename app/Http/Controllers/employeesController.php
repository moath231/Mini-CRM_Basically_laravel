<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\employees;
use App\Models\companymodel;


class employeesController extends Controller
{
    public function index()
    {
        return view('Employees.index')
        ->with('employee',employees::all());
    }

    public function create()
    {
        return view('Employees.createemployee')->with('company',companymodel::all());
    }

    public function store(Request $request)
    {
        $request -> validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'Company' => '',
            'email' => 'required',
            'phone' => 'required'
        ]);

        employees::create([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'companyId' => $request->Company,
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);

        return redirect('/employees');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('Employees.editemployee')->with('empl',employees::where('id',$id)->first());
    }

    public function update(Request $request, $id)
    {
        employees::where('id',$id)->update([
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            // 'companyId' => $request->Company,
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);
        return redirect('/employees')->with('message','Update Successfully');
    }

    public function destroy($id)
    {
        Employees::where('id',$id)->delete();
        return redirect('/employees')->with('Dmessage','Delete Successfully');
    }
}
