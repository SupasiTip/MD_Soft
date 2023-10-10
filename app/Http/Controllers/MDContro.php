<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class MDContro extends Controller
{

    public function index (Request $request){

        $data['companies'] = Company::orderBy('id', 'asc')->paginate(10);
        return view('companies.index',$data);


    }
    public function create(){
        return view('companies.create');
    }
    //store resource
    public function store(Request $request){
        $request->validate([
            'occupation' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'companyperformance' => 'required',
            'media' => 'required'
        ]);
        $company = new Company;
        $company -> occupation = $request->occupation;
        $company -> name = $request->name;
        $company -> lastName = $request->lastName;
        $company -> email = $request->email;
        $company -> companyperformance = $request->companyperformance;
        $company -> media = $request->media;
        $company->save();
        return redirect()->route('companies.index')->with('success','Company has been created successfully');
    }

    public function edit(Company $company){
        return view('companies.edit',compact('company'));

    }
    public function update(Request $request,$id){
        $request->validate([
            'occupation' => 'required',
            'name' => 'required',
            'lastName' => 'required',
            'email' => 'required',
            'companyperformance' => 'required',
            'media' => 'required'
        ]);
        $company = new Company;
        $company -> occupation = $request->occupation;
        $company -> name = $request->name;
        $company -> lastName = $request->lastName;
        $company -> email = $request->email;
        $company -> companyperformance = $request->companyperformance;
        $company -> media = $request->media;
        $company->save();
        return redirect()->route('companies.index')->with('success'.'Company has been created successfully');
    }
    public function destroy(Company $company){
        $company->delete();
        return redirect()->route('companies.index')->with('success'.'Company has been deleted successfully');
    }
}
