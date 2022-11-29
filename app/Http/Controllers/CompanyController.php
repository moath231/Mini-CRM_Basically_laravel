<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\companymodel;

class CompanyController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            return view('home')->with('company',companymodel::all());
        }else{
            return view('auth.login');
        }
    }

    public function create()
    {
        return view('comany.createNewCompany');
    }

    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'Email' => 'required|email|unique:users',
            'Address' => 'required',
            'website' => 'required',
            'logo' => 'required'

        ]);
        $newimagename = uniqid() . $request->input('name') .'.' . $request->logo->extension();
        $request->logo->move(public_path('images'),$newimagename);

        companymodel::create([
            'name' => $request->input('name'),
            'Email' => $request->input('Email'),
            'Address' => $request->input('Address'),
            'website' => $request->input('website'),
            'logo_path' => $newimagename
        ]);

        return redirect('/company');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('comany.edit') -> with('company',companymodel::where('id',$id)->first());
    }

    public function update(Request $request, $id)
    {
        companymodel::where('id',$id)
        ->update([
            'name' => $request->input('name'),
            'Email' => $request->input('Email'),
            'Address' => $request->input('Address'),
            'website' => $request->input('website')
        ]);
        return redirect('/company')->with('message','Update Successfully');
    }

    public function destroy($id)
    {
        echo $id;
        companymodel::where('id',$id)->delete();
        return redirect('/company')
        ->with('Dmessage','Delete Successfully');

    }
}
