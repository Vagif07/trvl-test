<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Support\Facades\Storage;
use Request;
use App\Http\Requests\CompanyCreateRequest;
use App\Http\Requests\CompanyUpdateRequest;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param  Company $company
     * @return \App\Employee $employees
     */
    public function getEmployees(Company $company)
    {
        $employees = $company->employees()->with('company')->paginate(10);

        if(Request::ajax()) {
            return $employees;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \App\Company $companies (If request is Ajax)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::paginate(10);
        
        if(Request::ajax()) {
            return $companies;
        }

        return view('resources.companies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resources.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CompanyCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyCreateRequest $request)
    {
        // If there is any logo attached to the request, rename and store it
        if ($request->has('logo')) {
            $filename = 'company_' . time() . '.' . $request->logo->getClientOriginalExtension();
            Storage::disk('public')->put($filename, file_get_contents($request->logo));
        }

        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'logo' => $filename ?? null,
            'website' => $request->website,
        ]);
        
        return redirect()->back()->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('resources.companies.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('resources.companies.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CompanyUpdateRequest  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyUpdateRequest $request, Company $company)
    {
        $logo = $company->logo;

        $company->update($request->all());

        // If there is any logo attached to the request, rename and store it
        if ($request->has('logo')) {

            // Remove previous logo, if there was any
            if (isset($logo)) {
                Storage::disk('public')->delete($logo);
            }

            $filename = 'company_' . time() . '.' . $request->logo->getClientOriginalExtension();
            Storage::disk('public')->put($filename, file_get_contents($request->logo));

            $company->logo = $filename;
            $company->save();
        }

        return redirect()->back()->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \App\Company $companies (If request is Ajax)
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->employees()->delete();

        $company->delete();
        
        if(Request::ajax()) {
            $companies = Company::paginate(10);
            return $companies;
        }

        return view('resources.companies.index');
    }
}
