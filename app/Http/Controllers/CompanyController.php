<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
class CompanyController extends Controller
{
    public function index() {
        $business_data = Company::orderBy('id')->first();
        return view('business_info', compact('business_data'));
    }

    public function edit(Company $business_data) {
        return view('business_edit', compact('business_data'));
    }

    public function store(Request $request) {
        $data = $request->validate(
            [
                'id_type'   =>  'required',
                'id_number'   =>  'required',
                'check_digit' =>  'required',
                'business_name' =>  'required',
                'address' =>  'nullable',
                'country' =>  'nullable',
                'city' =>  'nullable',
                'main_phone_number' =>  'nullable',
                'second_phone_number' =>  'nullable',
                'email' =>  'required',
            ]
        );
        if (!is_null($request->id)) {
            $business_data = Company::find($request->id);
            $this->uptade($business_data, $data);
            return redirect('/business/index');
        }
        $company_data = Company::create($data);
        return redirect('/business/index');
    }

    public function uptade(Company $company_data, $data) {
        $company_data->update($data);
        return redirect('/business/index');
    }
}
