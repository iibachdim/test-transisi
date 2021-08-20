<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Company;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::select('employees.*', 'companies.id as id_company', 'companies.nama as nama_company')
                            ->leftJoin('companies', 'employees.company_id', '=', 'companies.id')
                            ->paginate(5);

        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all()->pluck('nama', 'id');

        return view('admin.employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees = Employee::create([
            'nama' => $request['nama'],
            'company_id' => $request['company_id'],
            'email' => $request['email']
        ]);
        $employees->save();

        return redirect()->route('admin.employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        $employees = Employee::select('employees.*', 'companies.id as id_company', 'companies.nama as nama_company')
                            ->leftJoin('companies', 'employees.company_id', '=', 'companies.id')
                            ->where('employees.id', $employee->id)
                            ->get();

        return view('admin.employees.show', compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $companies = Company::all()->pluck('nama', 'id');
        $employee = Employee::find($employee->id);

        return view('admin.employees.edit', compact('companies', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());

        return redirect()->route('admin.employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}
