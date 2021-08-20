<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(5);
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

        $logo = $request->file('logo');

        $nama_logo = time()."_".$logo->getClientOriginalName();
        $upload = 'company';
        $logo->move($upload, $nama_logo);

        $companies = Company::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'website' => $request['website'],
            'logo' => $nama_logo
        ]);
        $companies->save();

        return redirect()->route('admin.companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        $company = Company::find($company->id);

        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $company = Company::find($company->id);
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
			'logo' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		]);

        $logo = $request->file('logo');

        $nama_logo = time()."_".$logo->getClientOriginalName();
        $upload = 'company';
        $logo->move($upload, $nama_logo);

        $company = Company::find($company->id);
        $company->nama = $request->input('nama');
        $company->email = $request->input('email');
        $company->website = $request->input('website');
        $company->logo = $nama_logo;
        $company->save();

        return redirect()->route('admin.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();

        return back();
    }
}
